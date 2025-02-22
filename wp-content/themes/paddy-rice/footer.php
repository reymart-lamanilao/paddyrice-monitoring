<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Paddy_Rice
 */

?>
	<?php if ( ! is_page( 'account-app' ) ) : ?>
	<!-- <footer id="footer">
        <div class="container">
            <div class="row align-items-center gy-2 gy-md-0">
                <div class="col-sm-8 text-center text-sm-start">
                    <div class="copyright">
                        <p>© 2025 Paddy Rice. All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center text-sm-end mt-2 mt-sm-0">
                    <div class="developed-by">
                        <p>Made by <a href="#" target="_blank">Bisu</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->
    <?php endif; ?>

    <!-- scripts -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/vendors/bootstrap.imp-5.3.3/js/bootstrap.bundle.imp.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/vendors/animate-on-scroll/aos.js"></script>

    <?php wp_footer(); ?>
</body>
</html>
