<?php get_header(); ?>

<!-- NAV -->
<div class="max-width-container nav-homepage">
    <nav>
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/logo/CCA-seul-C.svg" alt="logo" class="nav-logo"></a>
        
        <input type="checkbox" id="menu-toggle" class="menu-toggle" />
        <label for="menu-toggle" class="menu-icon">
            <div id="menu-button" class="hamburger">
                <span></span>
            </div>
        </label>

        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary', // This matches the menu you registered
            'menu_class'     => 'menu',    // This is the CSS class for the <ul> element
            'container'      => false,     // Prevents WordPress from adding a <div> around the menu
        ));
        ?>
    </nav>
</div>

<!-- FIN NAV -->

<main>
    <!-- GALLERY -->
    <section class ="index-gallery">
        <?php echo do_shortcode('[grid_plus name="masonry-home"]'); ?>
    </section>
    <!-- FIN GALLERY -->
</main>

<?php get_footer(); ?>
