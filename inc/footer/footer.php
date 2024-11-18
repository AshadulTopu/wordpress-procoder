     <?php
     /**
      *  Footer
      */
        // get_template_part( 'template-parts/content', 'footer' );
     ?>
     
     
     <footer>
     <section class="copy-right-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                     <!-- <p class="copy-right-text" style="color: <?php echo get_theme_mod( 'procoder_copyright_text_color' ); ?>;">
                         <?php echo get_theme_mod( 'procoder_copyright_text' ); ?>
                     </p> -->

                     <p class="copy-right-text" style="color: <?php echo get_theme_mod('procoder_copyright_text_color'); ?>;">
                        <?php 
                            $copyright_link = get_theme_mod('procoder_copyright_link');
                            $copyright_text = get_theme_mod('procoder_copyright_text');
                            echo sprintf('<a href="%s" style="color: %s;">%s</a>', esc_url($copyright_link), esc_attr(get_theme_mod('procoder_copyright_link_color')), esc_html($copyright_text));
                        ?>
                    </p>
                </div>
            </div>
        </div>
     </section>
     </footer>
<?php wp_footer(  ); ?>
</body>
</html>