<?php
/**
 * The main template file.
 */

get_header();
?>


    <!-- body -->
     <main id="main_area" class="main-area">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                       <?php get_template_part( 'template-parts/blog_setup', 'home' ); ?>
                    </div>
                    <div class="col-md-3">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </section>
     </main>     


<?php get_footer(); ?>