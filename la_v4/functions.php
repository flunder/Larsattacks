<?php

$textdomain = "larsattacks";

/**
 * WORDPRESS FUNCTIONS INCLUDES
*/

// LESS
if ( file_exists('wp-less/wp-less.php' ) ) {
    require_once( 'wp-less/wp-less.php' );
} else {
    require_once( '../wp-less/wp-less.php' );
}

require_once locate_template('/lib/dev.php');
require_once locate_template('/lib/admin.php');
require_once locate_template('/lib/post-types.php');
require_once locate_template('/lib/frontend.php');
require_once locate_template('/lib/ajax.php');


add_action( 'after_setup_theme',  'la_setup' );
add_action( 'wp_enqueue_scripts', 'la_stylesheets' );
add_action( 'wp_enqueue_scripts', 'la_scripts' );

/*
 * WORDPRESS UPDATE SETTINGS
*/
add_filter( 'allow_minor_auto_core_updates', '__return_true' );

/**
 * LA THEME SETUP
*/
function la_setup(){

    add_filter( 'show_admin_bar', '__return_false' );

    register_nav_menus(array(
        'primary' => 'Primary Navigation'
    ));

    /*
        THUMBNAIL SIZES
    */
    // add_theme_support( 'post-thumbnails', array( /*'post',*/ 'gallery' ) );
    // add_image_size( 'mm-medium', 772, 482, array('center', 'center') );

    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
}

/**
 * Register Stylesheets
 */
function la_stylesheets(){

    $styles = array (
        'default' => array(
            # 'bootstrap'  => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css',
            'normalise'    => get_stylesheet_directory_uri().'/less/normalise.css',
            'grid12'       => get_stylesheet_directory_uri().'/less/grid12.css',
            # 'lato'       => 'http://fonts.googleapis.com/css?family=Lato:300,400,700',
            'styles'       => get_stylesheet_directory_uri().'/less/style.less'
        ),
        'frontpage' => array(
            # 'nivo'             => get_stylesheet_directory_uri() . '/nivo-slider.css',
            # 'nivo-theme'       => get_stylesheet_directory_uri() . '/themes/default/default.css'
        )
    );

    # ~
    # add_editor_style( get_stylesheet_directory_uri().'/less/editor-style.less' );

    /*
        Default Styles
    */

    foreach( $styles['default'] as $k => $v ) {
        wp_register_style( $k, $v );
        wp_enqueue_style( $k );
    }

    /*
        Page specific styles
    */

    if ( is_front_page() ) {
        foreach( $styles['frontpage'] as $k => $v ) {
            wp_register_style( $k, $v );
            wp_enqueue_style( $k );
        }
    }

}

/**
 * Register Javascript
 */
function la_scripts(){

    global $post;

    // Switch WP to use latest jQuery
    if( !is_admin() ) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', get_template_directory_uri().'/js/vendor/jquery-2.1.4.min.js', false, 'latest', false );
        wp_enqueue_script('jquery');
    }

    wp_register_script('la',        get_template_directory_uri().'/js/la.js'                           , array('jquery'), null, true);
    wp_register_script('ga',        get_template_directory_uri().'/js/ga.js'                           , null           , null, true);
    wp_register_script('modernizr', get_template_directory_uri().'/js/vendor/modernizr-2.8.3-custom.js', null           , null, false);

    wp_enqueue_script('la');
    wp_enqueue_script('ga');
    wp_enqueue_script('modernizr');
}


/**
 * LA custom wp_header
 */
function la_wp_header() {

    // Remove unnecessary header tags
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'wp_generator' );

    // Indent wp_head output
    $patterns = array( "/\n/" => "\n    " );
    ob_start();
    wp_head();
    echo preg_replace( array_keys($patterns), array_values($patterns), ob_get_clean() );
}

function la_wp_footer() {
    // Indent wp_footer output
    $patterns = array( "/\n/" => "\n    " );
    ob_start();
    wp_footer();
    echo "    ".preg_replace( array_keys($patterns), array_values($patterns), ob_get_clean() );
}

?>