     <?php
     /**
      *  Footer
      */
     ?>
     
     
     <footer>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                            <?php dynamic_sidebar('footer-one' ); ?>
                        <!-- <div class="footer-logo">
                            <img src="<?php echo get_theme_mod( 'procoder_footer_logo' ); ?>">
                        </div> -->
                    </div>

                    <div class="col-md-4">
                            <?php dynamic_sidebar('footer-two' ); ?>
                    </div>
                    <div class="col-md-4">
                            <?php dynamic_sidebar('footer-three' ); ?>
                    </div>
                </div>
            </div>
        </section>
     <section class="copy-right-area" style="background-color: <?php echo get_theme_mod( 'procoder_footer_background_color' ); ?>;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                     <!-- <p class="copy-right-text" style="color: <?php echo get_theme_mod( 'procoder_copyright_text_color' ); ?>;">
                         <?php echo get_theme_mod( 'procoder_copyright_text' ); ?>
                     </p> -->

                     <p class="copy-right-text <?php echo esc_attr(get_theme_mod('procoder_footer_position')); ?>">
                        <?php 
                            $copyright_link = get_theme_mod('procoder_copyright_link');
                            $copyright_text = get_theme_mod('procoder_copyright_text');
                            echo sprintf('<a href="%s" style="color: %s;">%s</a>', esc_url($copyright_link), esc_attr(get_theme_mod('procoder_copyright_text_color')), esc_html($copyright_text));
                        ?>
                    </p>
                </div>
            </div>
        </div>
     </section>
     </footer>
<?php wp_footer(); ?>
</body>
</html>