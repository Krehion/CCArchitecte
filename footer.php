    <!-- FIN GALLERY -->
    <footer>
        <div class="footer-container">
            <div class="max-width-container">
                <div class="third-width-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logo/CCA-C.svg" alt="logo" class="footer-logo">
                </div>
                <div class="third-width-container ">
                <?php
                // Display the footer menu
                wp_nav_menu(array(
                    'theme_location' => 'footer', // Use the footer menu
                    'container' => false, // No container
                    'menu_class' => 'footer-menu', // Add your custom class for styling
                ));
                ?>
                </div>
                <div class="third-width-container">
                    <a href="https://www.linkedin.com/in/c%C3%A9cile-courgneau-91349a7a/" title="LinkedIn"><i class="fa-brands fa-linkedin footer-social"></i></a>
                </div>
            </div>
            <div class="max-width-container">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('mentions-legales'))); ?>" class="footer-legal">Mentions légales</a>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
