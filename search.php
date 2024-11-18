<?php
/**
 * The search template file.
 */

get_header();
?>


    <!-- body -->
     <main id="main_area" class="main-area">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div id="search-title">
                            <h2>
                                <?php printf( esc_html__( 'Search Results for: %s', 'procoder' ), get_search_query()); ?>
                            </h2>
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