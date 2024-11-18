
<?php
/**
 * Custom Post
 */


function procoder_custom_post() {
    register_post_type( 'service',
        array(
            'labels' => array(
                'name' => __( 'Services', 'procoder' ),
                'singular_name' => __( 'Service', 'procoder' ),
                'menu_name' => __( 'Services', 'procoder' ),
                'name_admin_bar' => __( 'Services', 'procoder' ),
                'add_new' => __( 'Add New', 'procoder' ),
                'add_new_item' => __( 'Add New Service', 'procoder' ),
                'new_item' => __( 'New Service', 'procoder' ),
                'edit_item' => __( 'Edit Service', 'procoder' ),
                'view_item' => __( 'View Service', 'procoder' ),
                'all_items' => __( 'All Services', 'procoder' ),
                'search_items' => __( 'Search Services', 'procoder' ),
                'parent_item_colon' => __( 'Parent Services:', 'procoder' ),
                'not_found' => __( 'No Services found.', 'procoder' ),
                'not_found_in_trash' => __( 'No Services found in Trash.', 'procoder' ),
            ),
            // 'show_ui' => true,
            // 'show_in_menu' => true,
            // 'show_in_rest' => true,
            // 'show_in_admin_bar' => true,
            // 'show_in_nav_menus' => true,
            // 'show_in_rest' => true,
            'capability_type' => 'post',
            'menu_position' => 5,
            'menu_icon' => 'dashicons-admin-page',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'has_archive' => true,
            'hierarchical' => true,
            'rewrite' => array( 'slug' => 'service', 'with_front' => true ),
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky' ),
            'taxonomies' => array( 'category', 'post_tag' ),
        )
    );
};

add_action( 'init', 'procoder_custom_post' );

function procoder_custom_post_type($query){
    if(is_category()){
        $post_type = get_query_var('post_type');
        if($post_type){
            $post_type = $post_type;
        }else {
            $post_type = array('post', 'service');
            $query -> set('post_type', $post_type);
            return $query;
        }
    }
}
add_action('pre_get_posts', 'procoder_custom_post_type');

// function procoder_custom_post() {
//     $labels = array(
//         'name' => _x( 'Custom Post', 'post type general name', 'procoder' ),
//         'singular_name' => _x( 'Custom Post', 'post type singular name', 'procoder' ),
//         'menu_name' => _x( 'Custom Post', 'admin menu', 'procoder' ),
//         'name_admin_bar' => _x( 'Custom Post', 'add new on admin bar', 'procoder' ),
//         'add_new' => _x( 'Add New', 'Custom Post', 'procoder' ),
//         'add_new_item' => __( 'Add New Custom Post', 'procoder' ),
//         'new_item' => __( 'New Custom Post', 'procoder' ),
//         'edit_item' => __( 'Edit Custom Post', 'procoder' ),
//         'view_item' => __( 'View Custom Post', 'procoder' ),
//         'all_items' => __( 'All Custom Post', 'procoder' ),
//         'search_items' => __( 'Search Custom Post', 'procoder' ),
//         'parent_item_colon' => __( 'Parent Custom Post:', 'procoder' ),
//         'not_found' => __( 'No Custom Post found.', 'procoder' ),
//         'not_found_in_trash' => __( 'No Custom Post found in Trash.', 'procoder' ),
//     );

//     $args = array(
//         'labels' => $labels,
//         'public' => true,
//         'publicly_queryable' => true,
//         'show_ui' => true,
//         'show_in_menu' => true,
//         'query_var' => true,
//         'rewrite' => array( 'slug' => 'custom-post' ),
//         'capability_type' => 'post',
//         'has_archive' => true,
//         'hierarchical' => false,
//         'menu_position' => null,
//         'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky' ),
//     );

//     register_post_type( 'custom-post', $args );
// }

// add_action( 'init', 'procoder_custom_post' );