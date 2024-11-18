<?php

/**
 * The service template file.
 * 
 * This is the most generic template file in a WordPress theme
 */

get_header();
?>

    <!-- body -->
<section class="service-area">
    <div class="container">
        <div class="row g-6">
            <?php 
                $args = array(
                    'post_type' => 'service',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'order' => 'ASC' ,
                    'orderby' => 'date', // 'menu_order' 
                    'paged' => get_query_var('post'),
                )
            ?>
            <?php $loop = new WP_Query( $args ); ?>
            <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col-md-4">
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
                        <!-- <a href="<?php the_permalink(); ?>" class="read-more">Read More</a> -->
                    </div>
                </div>
            </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>