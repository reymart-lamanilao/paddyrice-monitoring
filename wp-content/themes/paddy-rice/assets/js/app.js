(function ($) {

var app = {};

app.$root = $("html, body");

app.windowSize = function () {
    var e = window,
        a = "inner";
    if (!("innerWidth" in window)) {
        a = "client";
        e = document.documentElement || document.body;
    }
    return {
        width: e[a + "Width"],
        height: e[a + "Height"],
    };
};

// header
var _header = function () {
    $(document).on("click", ".navbar-toggler", function () {
        const togglericon = $(this).children( ".mobile-toggler-icon" );

        if ( $(this).hasClass( "collapsed" ) ) {
            togglericon.removeClass( "menu-close animate" );
            togglericon.addClass( "menu-bar animate" );
        } else {
            togglericon.removeClass( "menu-bar animate" );
            togglericon.addClass( "menu-close animate" );
        }
    });

    if ($('body.admin-bar').length) {
        if ($(window).scrollTop() > 5){  
            $('header').addClass("sticky");
        }
        else{
            $('header').removeClass("sticky");
        }

        $(window).scroll(function() {
            if ($(this).scrollTop() > 5){  
                $('header').addClass("sticky");
            }
            else{
                $('header').removeClass("sticky");
            }
        });
    }
};

var _step_readings = function () {
    console.log('_step_readings');
    const form = document.getElementById('registrationForm');
        const steps = Array.from(document.querySelectorAll('.form-step'));
        const stepItems = Array.from(document.querySelectorAll('.step-item'));
        const successMessage = document.querySelector('.success-message');
        let currentStep = 0;

        // Show current step
        function showStep(stepIndex) {
            steps.forEach((step, index) => {
                step.classList.toggle('active', index === stepIndex);
            });
            updateStepIndicators();
        }

        // Update step indicators
        function updateStepIndicators() {
            stepItems.forEach((item, index) => {
                if (index === currentStep) {
                    item.classList.add('active');
                } else {
                    item.classList.remove('active');
                }
                if (index < currentStep) {
                    item.classList.add('completed');
                } else {
                    item.classList.remove('completed');
                }
            });
        }

        // Validate current step
        function validateStep(stepIndex) {
            const currentStepElement = steps[stepIndex];
            const inputs = currentStepElement.querySelectorAll('input[required], select[required]');
            let isValid = true;

            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.classList.add('error');
                } else {
                    input.classList.remove('error');
                }
            });

            return isValid;
        }

        // Next button click handler
        document.querySelectorAll('.next').forEach(button => {
            button.addEventListener('click', () => {
                if (validateStep(currentStep)) {
                    currentStep++;
                    showStep(currentStep);
                }
            });
        });

        // Previous button click handler
        document.querySelectorAll('.prev').forEach(button => {
            button.addEventListener('click', () => {
                currentStep--;
                showStep(currentStep);
            });
        });

        // Step indicator click handler
        stepItems.forEach((item, index) => {
            item.addEventListener('click', () => {
                // Only allow moving to steps that are completed or next in sequence
                if (index <= currentStep + 1 && validateStep(currentStep)) {
                    currentStep = index;
                    showStep(currentStep);
                }
            });
        });

        // Form submission
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            if (validateStep(currentStep)) {
                // Here you would typically send the form data to your server
                const formData = new FormData(form);
                console.log('Form submitted with data:', Object.fromEntries(formData));
                
                // Show success message
                form.style.display = 'none';
                successMessage.classList.add('active');
                
                // Update step indicators to show completion
                stepItems.forEach(item => {
                    item.classList.add('completed');
                    item.classList.remove('active');
                });
            }
        });

        // Input validation handlers
        const requiredInputs = form.querySelectorAll('input[required], select[required]');
        requiredInputs.forEach(input => {
            input.addEventListener('input', () => {
                if (input.value.trim()) {
                    input.classList.remove('error');
                }
            });

            input.addEventListener('blur', () => {
                if (!input.value.trim()) {
                    // input.classList.add('error');
                }
            });
        });

        // Special validation for email
        // const emailInput = document.getElementById('email');
        // emailInput.addEventListener('blur', () => {
        //     const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        //     if (!emailRegex.test(emailInput.value)) {
        //         emailInput.classList.add('error');
        //     } else {
        //         emailInput.classList.remove('error');
        //     }
        // });

        // Phone number validation
        // const phoneInput = document.getElementById('phone');
        // phoneInput.addEventListener('input', (e) => {
        //     // Remove any non-numeric characters
        //     let value = e.target.value.replace(/\D/g, '');
            
        //     // Format the number
        //     if (value.length > 0) {
        //         if (value.length <= 3) {
        //             value = value;
        //         } else if (value.length <= 6) {
        //             value = value.slice(0, 3) + '-' + value.slice(3);
        //         } else {
        //             value = value.slice(0, 3) + '-' + value.slice(3, 6) + '-' + value.slice(6, 10);
        //         }
        //     }
            
        //     e.target.value = value;
        // });

        // Initialize form
        showStep(currentStep);

};


$(document).ready(function () {
    _header();
    _step_readings();

    // plugins init
    AOS.init({
        once: true,
        duration: 500,
    });
});

}(jQuery));