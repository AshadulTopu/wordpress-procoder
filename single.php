<?php
/**
 * The single template file.
 */

get_header();
?>


    <!-- body -->
     <main id="main_area" class="main-area">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                       <?php get_template_part( 'template-parts/post_setup', 'single' ); ?>
                       <div class="comments">
                           <?php comments_template(); ?>
                       </div>
                    </div>
                    <div class="col-md-3">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </section>
     </main>     


<?php get_footer(); ?>