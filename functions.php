<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style('main-styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function my_theme_setup() {
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'theme-text-domain'),
        'footer'  => __('Footer Menu', 'my-theme'),
    ));
}
add_action('after_setup_theme', 'my_theme_setup');

if(!function_exists('add_grid_plus_skins')) {
    function add_grid_plus_skins($skins) {
        $skins[] = array (
            'name' => 'Thumbnail - title, tag, category',
            'slug' => 'thumbnail-title-tag-cat',
            'template' => dirname(__FILE__).'/thumbnail-title-tag-cat.php',
            'skin_css' => get_template_directory_uri().'/thumbnail-title-tag-cat.css',
        );
        return $skins;
    }
    add_filter('grid-plus-skins', 'add_grid_plus_skins');
}