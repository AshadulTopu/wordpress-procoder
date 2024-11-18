<?php
/**
 * The 404 template file.
 */

get_header();
?>


    <!-- body -->
     <main id="main_area" class="main-area">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       <div class="page-404">
                           <h1>404</h1>
                           <!-- <div class="page-404-img"></div> -->
                            <div class="error-log">
                                <?php get_search_form(); ?>
                            </div>
                           <h2>Page not found</h2>
                           <p>Sorry, the page you requested was not found.</p>
                           <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Back to Home</a>
                       </div>
                    </div>
                </div>
            </div>
        </section>
     </main>     


<?php get_footer(); ?>