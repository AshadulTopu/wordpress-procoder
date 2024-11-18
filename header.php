<?php
/**
 * The main Header file.
 */

?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header id="header_area" class="header-area <?php echo get_theme_mod( 'procoder_header_position' ); ?>" style="background-color: <?php echo get_theme_mod( 'procoder_header_color' ); ?>; color: <?php echo get_theme_mod( 'procoder_header_text_color' ); ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <!-- <img src=" <?php echo get_template_directory_uri(); ?> ./assets/images/logo.png" alt="Logo"> -->
                            <img src=" <?php echo get_theme_mod( 'procoder_logo' ); ?>" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <!-- static menu -->
                     <!-- <ul id="nav">
                        <li><a href="">Home</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Team</a>
                            <ul>
                                <li><a href="">Team One</a></li>
                                <li><a href="">Team Two</a></li>
                                <li><a href="">Team Three</a></li>
                                <li><a href="">Team Four</a>
                                    <ul>
                                        <li><a href="">Inner Team One</a></li>
                                        <li><a href="">Inner Team Two</a></li>
                                        <li><a href="">Inner Team Three</a></li>
                                        <li><a href="">Inner Team Four</a></li>
                                    </ul>
                            </li>
                            </ul>
                        </li>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">Projects</a></li>
                     </ul> -->
                   <?php wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id' => 'nav', 'menu_class' => 'main-menu',) ); ?>
                   <!-- <?php wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id' => 'nav', 'menu_class' => 'main-menu', 'link_after'     => '',) ); ?> -->
                </div>
            </div>
        </div>
    </header>