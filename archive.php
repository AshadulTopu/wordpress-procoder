<?php
/**
 * The archive template file.
 */

get_header();
?>


    <!-- body -->
     <main id="main_area" class="main-area">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div id="archive-title">
                            <?php the_archive_title( '<h2 class="archive-title">', '</h2>' ); ?>
                            <?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
                            
                        </div>
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