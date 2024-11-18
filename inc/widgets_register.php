

<?php


/**
 * Register widget area.
 * 
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */


function procoder_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'procoder' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'procoder' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer One', 'procoder' ),
        'id'            => 'footer-one',
        'description'   => esc_html__( 'Add widgets here.', 'procoder' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Two', 'procoder' ),
        'id'            => 'footer-two',
        'description'   => esc_html__( 'Add widgets here.', 'procoder' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Three', 'procoder' ),
        'id'            => 'footer-three',
        'description'   => esc_html__( 'Add widgets here.', 'procoder' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'procoder_widgets_init' );