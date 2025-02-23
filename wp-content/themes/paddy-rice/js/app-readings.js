/* global wp, jQuery */
/**
 * File app-readings.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	jQuery(document).ready(function($) {

        $(document).on("click", ".startreading", function () {
            console.log('clicked');
            startajaxreading();
        });

        
    });

    function startajaxreading() {
        console.log('startajaxreading');
        $.ajax({
            url: wp_ajax.ajaxurl,
            type: 'POST',
            data: {
                'action':'get_predicted_moisture',
                some_data: 1,
            },
            success: function( response ) {
                console.log(response);
            },
        });
    }
}( jQuery ) );
