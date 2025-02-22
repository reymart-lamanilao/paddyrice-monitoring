<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Paddy_Rice
 */

get_header();
?>

	<main id="primary" class="site-main">

		<!-- home banner -->
	    <section class="home-banner bg-gray position-relative d-flex flex-column align-items-center justify-content-center z-1">
	        <div class="bg-img-fill">
	            <img src="http://paddyrice-monitoring.loc/wp-content/uploads/2025/02/paddy-banner.jpg" class="img-fluid" alt="">
	            <div class="overlay-shade-dark opacity-1"></div>
	        </div>
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-7" data-aos="fade-up">
	                    <h1 class="display-2 fw-bold text-white">Powerful Digital <br>Agriculture Solutions</h1>
	                    <div class="text-white fs-4 mt-40px">
	                        <p>Farm management software supporting farmers with data-driven tools from the field to make precise agronomic and economic decisions and maximize productivity and profitability.</p>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
	    <!-- // end banner -->

	    <!-- contact section -->
	    <section class="">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-6">
	                    <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
	                        <span class="text-primary fw-bold">Call us</span>
	                        <p>Our helpline is available Monday through Friday, 10am to 6pm.</p>
	                        <div class="d-flex gap-3 gap-lg-18px align-items-center">
	                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets//img/icons/phone-calling.png" alt="">
	                            <a href="tel:0384123289">(038) 412 3289</a>
	                        </div>
	                    </div>
	                    <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
	                        <span class="text-primary fw-bold">Our location</span>
	                        <p>Visit us at</p>
	                        <div class="d-flex gap-3 gap-lg-18px align-items-center">
	                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets//img/icons/location-map.png" alt="">
	                            Bohol Island State University
	                        </div>
	                    </div>
	                    <div class="mb-5" data-aos="fade-up" data-aos-delay="300">
	                        <span class="text-primary fw-bold">Contact us</span>
	                        <p>Write to us at</p>
	                        <div class="d-flex gap-3 gap-lg-18px align-items-center">
	                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets//img/icons/icon-a-email.png" alt="">
	                            <a href="mailt0:info@jardicycles.be">info@paddyrice-monitoring.com</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-lg-6" data-aos="fade-up">
	                    <form class="form form-theme">
	                        <div class="row gy-30px">
	                            <div class="col-md-6">
	                                <input type="text" class="form-control" placeholder="First name *">
	                            </div>
	                            <div class="col-md-6">
	                                <input type="text" class="form-control" placeholder="Last name *">
	                            </div>
	                            <div class="col-md-6">
	                                <input type="text" class="form-control" placeholder="Email *">
	                            </div>
	                            <div class="col-md-6">
	                                <input type="text" class="form-control" placeholder="Phone">
	                            </div>
	                            <div class="col-12">
	                                <input type="text" class="form-control" placeholder="Address">
	                            </div>
	                            <div class="col-12">
	                                <label for="message" class="text-uppercase">MESSAGE <span class="required">*</span></label>
	                                <textarea name="" rows="6" id="message" placeholder="Leave us a message..." class="form-control"></textarea>
	                            </div>
	                        </div>
	                        <button type="submit" class="btn btn-primary btn-submit">Send the message</button>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </section>
	    <!-- // end contact -->

	</main><!-- #main -->

<?php
get_footer();
