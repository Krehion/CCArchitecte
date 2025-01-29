<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <!-- CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/22d39dc9b4.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- HEADER -->
    <?php
    if ( is_front_page() ) {
        get_template_part( 'header', 'home' );  // Loads header-home.php
    } else {
        // Regular header content for other pages
        ?>
        <header>
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
        </header>
    <!-- FIN HEADER -->
    <?php
}
?>
