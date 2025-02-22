<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Paddy_Rice
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gothic+A1&family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- vendor css -->
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/vendors/bootstrap.imp-5.3.3/css/bootstrap.imp.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/vendors/animate-on-scroll/aos.css" />
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/vendors/fontawesome-6/css/all.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<div class="navbar-fixed-offset"></div>
<header class="site-header">
    <nav class="navbar navbar-expand-lg">
        <div class="container container-lg">
        	<?php the_custom_logo(); ?>

            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="mobile-toggler-icon menu-bar"></span>
            </button>

            <div class="navbar-collapse collapse" id="main-navbar" style="">
                <?php 
	        	wp_nav_menu( array( 
	               'theme_location' => 'main',
	               'container' => '',
	               'container_class' => '',
	               'items_wrap' => '<ul id="%1$s" class="navbar-nav mt-10px mt-lg-0 ms-4 ms-lg-auto">%3$s</ul>', 
	            )); 
	        	?>
            </div>

        </div>
    </nav>
</header>

