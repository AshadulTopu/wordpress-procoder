

<?php


/**
 * All Default Settings
 */


// Theme Title
// add_theme_support( 'title-tag' );

// Theme Supports
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );
add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
));


// Image Support

add_theme_support( 'post-thumbnails', array( 'post', 'page', 'service' ) );
add_image_size( 'post-thumbnails', 950, 300, true );


// add_theme_support( 'html5', array(
//     'search-form',
//     'comment-form',
//     'comment-list',
//     'gallery',
//     'caption',
// ) )

// function procoder_image_support() {
//     add_theme_support( 'post-thumbnails' ); 
//     set_post_thumbnail_size( 200, 200, true ); 
// }
// add_action( 'after_setup_theme', 'procoder_image_support' );



// Excerpt Length

function procoder_excerpt_more( $more ) {
    return '<br> <a class="more-link" href="' . get_permalink( get_the_ID() ) . '">' . __( 'Read More', 'procoder' ) . '</a>';
}
add_filter( 'excerpt_more', 'procoder_excerpt_more' );

function procoder_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'procoder_excerpt_length', 999 );






// pagination Function

function procoder_pagination() {
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if( !$current = get_query_var('paged') ) $current = 1;
    $args['base'] = str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) );
    // $args['format'] = $wp_rewrite->pagination_base . '/%#%/';
    $args['total'] = $max;
    $args['current'] = $current;
    $total = 1;
    $args['next_text'] = 'Next';
    $args['prev_text'] = 'Prev';
    if( $max > 1 ) echo '</pre>
        <div class="pagination-count">';
        if( $total == 1 && $max > 1 ) $pages = '<p class="pages">' . sprintf( __( 'Page %1$s of %2$s', 'procoder' ), $current, $max ) . '</p></div> <div class="pagination-links">';
        echo $pages . paginate_links( $args );
        if( $max > 1 ) echo '</div><pre>';
    }



// global $wp_query, $wp_rewrite;
// $pages = $wp_query->max_num_pages;
// if ( $pages >= 2 ) {
//     echo '<div class="pagination"><ul>';
//     for ( $i = 1; $i <= $pages; $i++ ) {
//         echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link( $i ) . '">' . $i . '</a></li>';
//     }
//     echo '</ul></div>';
// }

// function procoder_pagination() {
//     global $wp_query;
//     $big = 999999999;
//     echo paginate_links( array(
//         'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
//         'format' => '?paged=%#%',
//         'current' => max( 1, get_query_var( 'paged' ) ),
//         'total' => $wp_query->max_num_pages,
//     ) );
// }






