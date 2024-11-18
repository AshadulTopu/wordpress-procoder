
<?php

/**
 * Shortcode
 */


// function procoder_shortcode() {
//     return 'Hello World';
// }

// add_shortcode( 'procoder', 'procoder_shortcode' );

function procoder_post_shortcode( ) {
    return 'Hello World from shortcode';
}
add_shortcode( 'text', 'procoder_post_shortcode' );


function button_shortcode( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'url' => '#',
        'class' => '',
    ), $atts ) );
    return '<a href="' . esc_url( $url ) . '" class="btn ' . esc_attr( $class ) . '">' . $content . '</a>';
}
add_shortcode( 'button', 'button_shortcode' );


// function button_shortcode( $atts, $content = null ) {
//    $values = shortcode_atts( array(
//         'url' => '#',
//         'class' => '',
//     ), $atts ) 
//     return '<a href="' . esc_url( $values['url'] ) . '" class="' . esc_attr( $values['class'] ) . '">' . $content . '</a>';
// }
// add_shortcode( 'button', 'button_shortcode' );






// short code for posts

function procoder_service_shortcode( $atts ) {
    ob_start();
    $args = array(
        'post_type' => 'service',
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'order' => 'ASC' ,
        'orderby' => 'date', // 'menu_order' 
        'paged' => get_query_var('post'),
    );
    $loop = new WP_Query( $args );
    ?>
    <!-- <div class="row g-6"> -->
    <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
     <!-- <div class="col-md-4"> -->
        <div class="single-service">
            <div class="service-img">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="service-content">
                <h3 class="service-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <p>
                    <?php the_excerpt(); ?>
                </p>
            </div>
        </div>
    <!-- </div> -->
    <?php
    endwhile; endif;
    wp_reset_postdata();
    return ob_get_clean();
    ?>
    
    <!-- </div> -->

    <?php
}
add_shortcode( 'service', 'procoder_service_shortcode' );

