
<?php 
/**
 * Register Custom Navigation Walker
 */
// require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';


// menu register
function procoder_menu_register() {
    register_nav_menu( 'main_menu', __( 'Main Menu', 'procoder' ) );
}
add_action( 'init', 'procoder_menu_register' );



// walker Menu Properties
function procoder_menu_walker($item_output, $item, $args) {
    if( !empty( $item->description ) ) {
        $item_output = str_replace( $item->link_after . '</a>', '<span class="menu-description">' . esc_html( $item->description ) . '</span>' . $item->link_after . '</a>', $item_output );
    }    
    // if ( is_object( $args ) && !empty( $item->description ) ) {
    //     $link_after = isset($args->link_after) ? $args->link_after : '';
    //     $item_output = str_replace(
    //         $link_after . '</a>',
    //         '<span class="menu-description">' . $item->description . '</span>' . $link_after . '</a>',
    //         $item_output
    //     );
    // }

    return $item_output;
}

add_filter( 'walker_nav_menu_start_el', 'procoder_menu_walker', 10, 3 );