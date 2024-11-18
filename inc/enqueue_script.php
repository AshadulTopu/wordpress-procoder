

<?php
/**
 * Enqueue scripts and styles. 
 */

//  Theme Scripts
function procoder_scripts() {
    // styles
    wp_enqueue_style( 'procoder-bootstrap-style', get_template_directory_uri().'./assets/css/bootstrap.min.css', array(), '5.2.3', 'all' );
    wp_enqueue_style( 'procoder-main-style', get_template_directory_uri().'./assets/css/main.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'procoder-custom-style', get_stylesheet_uri(), array(), '1.0.0', 'all' );
    // wp_style_add_data( 'procoder-style', 'rtl', 'replace' );

    // scripts
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'procoder-bootstrap', get_template_directory_uri() . './assets/js/bootstrap.bundle.min.js', array(), '5.2.3', true );
    wp_enqueue_script( 'procoder-navigation', get_template_directory_uri() . './assets/js/navigation.js', array(), '1.0.0', true );
    wp_enqueue_script( 'procoder-main', get_template_directory_uri() . './assets/js/main.js', array(), '1.0.0', true );
    wp_enqueue_script( 'procoder-main', get_template_directory_uri() . './assets/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'procoder_scripts' );

// Google Font
function procoder_google_fonts() {
    wp_enqueue_style( 'procoder-google-fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald:wght@200..700&display=swap', array(), null );
}
add_action( 'wp_enqueue_scripts', 'procoder_google_fonts' );