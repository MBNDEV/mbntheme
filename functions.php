<?php

define('MBN_DIR_URI', get_template_directory_uri());
define('MBN_DIR_PATH', get_template_directory());
define('MBN_ASSETS_URI', MBN_DIR_URI.'/resources');
define('MBN_MAP_API_KEY',"AIzaSyDac2mOtJr_IktjUhiLZYRL_xHzxRbodRE");

//MBN Login
//include_once("mbn-login/setup.php");

//Theme setup
if ( ! function_exists( 'mbn_setup' ) ) :

    function mbn_setup() {

        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );

        add_theme_support('align-wide');
        add_theme_support( 'editor-styles' );
        add_editor_style( 'editor.css' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'main-menu' => esc_html__( 'Main Menu', 'mbn' ),
            'footer-menu' => esc_html__( 'Footer Menu', 'mbn' ),
            'services-menu' => esc_html__( 'Services Menu', 'mbn' )
        ) );

    }
endif;
add_action( 'after_setup_theme', 'mbn_setup' ); 


/**
 * Enqueue scripts and styles.
 */
function mbn_scripts() {
    global $wp_version;

    //Fonts
    wp_enqueue_style('font-prometo', 'https://use.typekit.net/ion0lxd.css', [], $wp_version);


    //Global CSS
    wp_enqueue_style( 'mbn-style', get_stylesheet_uri() );
    wp_enqueue_style( 'custom', MBN_ASSETS_URI."/css/app.css", [], $wp_version);

    //Global JS
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', MBN_ASSETS_URI .'/vendor/jquery-3.4.1.min.js', [], $wp_version);
    wp_enqueue_script( 'jquery' );

    wp_deregister_script( 'jquery-migrate' );
    wp_register_script( 'jquery-migrate', MBN_ASSETS_URI .'/vendor/jquery-migrate-3.min.js', [], $wp_version);
    wp_enqueue_script( 'jquery-migrate' );

    // Foundation JS
    wp_enqueue_script('foundation', MBN_ASSETS_URI.'/vendor/foundation/js/foundation.min.js', [], $wp_version);

    // slick
    wp_enqueue_style('slick', MBN_ASSETS_URI.'/vendor/slick/slick.css', [], $wp_version);
    wp_enqueue_script('slick', MBN_ASSETS_URI.'/vendor/slick/slick.min.js', [], $wp_version);
    
    // Fancybox
    wp_enqueue_style('fancybox', MBN_ASSETS_URI.'/vendor/fancybox/fancybox.min.css', [], $wp_version);
    wp_enqueue_script('fancybox', MBN_ASSETS_URI.'/vendor/fancybox/fancybox.min.js', [], $wp_version);
    

    // App JS
    wp_enqueue_script('app', MBN_ASSETS_URI.'/js/app.js', [], $wp_version, true);
}
add_action( 'wp_enqueue_scripts', 'mbn_scripts' );


// remove wp emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');


// Disable all colors within Gutenberg.
function mbn_gutenberg_disable_all_colors() {
    add_theme_support( 'editor-color-palette' );
    add_theme_support( 'disable-custom-colors' );
}
add_action( 'after_setup_theme', 'mbn_gutenberg_disable_all_colors' );


// Allow SVG
function mbn_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml';
    return $mime_types;
}
add_filter('upload_mimes', 'mbn_myme_types');


require MBN_DIR_PATH.'/includes/tgmpa/init.php';
require MBN_DIR_PATH.'/includes/post-types.php';
require MBN_DIR_PATH.'/includes/shortcodes.php';
require MBN_DIR_PATH.'/includes/admin-hooks.php';
require MBN_DIR_PATH.'/includes/public-hooks.php';
