 <div class="blog-area">
    <?php 
        if(have_posts()): 
        while(have_posts()): the_post();
        //  get_template_part( 'template-parts/content', 'home' );
    ?>

    <div class="single-blog">
        <a href="<?php the_permalink(); ?>">
            <div class="post-thumb">
                <!-- <?php the_post_thumbnail(); ?> -->
                <?php echo the_post_thumbnail('post-thumbnails'); ?>
            </div>
        </a>
        <div class="post-meta">
            <ul>
                <li><a href="#"><i class="fa fa-user"></i> <?php the_author(); ?> </a></li>
                <li><a href="#"><i class="fa fa-calendar"></i> <?php the_time('F j, Y'); ?> </a></li>
                <li><a href="#"><i class="fa fa-comment"></i> <?php comments_number(); ?> </a></li>
            </ul>
        </div>
        <a href="<?php the_permalink(); ?>">
            <h2 class="blog-title">
                <?php the_title(); ?>
            </h2>
        </a>
        <div class="post-desc">
            <?php the_content(); ?>
        </div>
    </div>

    <?php
        endwhile;
        else:
        //  echo '<p>No content found</p>';
        _e( 'No content found', 'procoder' );
        endif;
        ?>
</div>