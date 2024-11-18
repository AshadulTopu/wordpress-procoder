

<?php

/**
 *  Theme Function
 * 
 */



 
// theme function
function procoder_customizer_register( $wp_customize ) {
    
    // Header section
    $wp_customize->add_section( 'procoder_header', array(
        'title' => __( 'Procoder Header', 'procoder' ),
        'description' => __( 'If you want to change the header, you can do it here.','procoder' ),
        'priority' => 50,
    ) );
    // Header Logo
    $wp_customize->add_setting( 'procoder_logo', array(
        'default' => get_bloginfo( 'template_directory' ) . '/assets/images/logo.png',
        // 'default' =>  get_template_directory_uri() . './assets/images/logo.png',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'procoder_logo', array(
        'label' => __( 'Upload Logo', 'procoder' ),
        'section' => 'procoder_header',
        'settings' => 'procoder_logo',
    ) ) );

    // Header Color
    $wp_customize->add_setting( 'procoder_header_color', array(
        'default' => '#fff',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'procoder_header_color', array(
        'label' => __( 'Header Color', 'procoder' ),
        'section' => 'procoder_header',
        'settings' => 'procoder_header_color',
    ) ) );

    // Header Text Color
    $wp_customize->add_setting( 'procoder_header_text_color', array(
        'default' => '#000',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'procoder_header_text_color', array(
        'label' => __( 'Header Text Color', 'procoder' ),
        'section' => 'procoder_header',
        'settings' => 'procoder_header_text_color',
    ) ) );

    // // Header Background Color
    // $wp_customize->add_setting( 'procoder_header_background_color', array(
    //     'default' => '#000',
    // ) );
    // $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'procoder_header_background_color', array(
    //     'label' => __( 'Header Background Color', 'procoder' ),
    //     'section' => 'procoder_header',
    //     'settings' => 'procoder_header_background_color',
    // ) ) );


    // Header Link Color
    $wp_customize->add_setting( 'procoder_header_link_color', array(
        'default' => '#000',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'procoder_header_link_color', array(
        'label' => __( 'Header Link Color', 'procoder' ),
        'section' => 'procoder_header',
        'settings' => 'procoder_header_link_color',
    ) ) );

    // Header Link Hover Color
    $wp_customize->add_setting( 'procoder_header_link_hover_color', array(
        'default' => '#000',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'procoder_header_link_hover_color', array(
        'label' => __( 'Header Link Hover Color', 'procoder' ),
        'section' => 'procoder_header',
        'settings' => 'procoder_header_link_hover_color',
    ) ) );

    // Header Link Background Color
    $wp_customize->add_setting( 'procoder_header_link_background_color', array(
        'default' => '#000',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'procoder_header_link_background_color', array(
        'label' => __( 'Header Link Background Color', 'procoder' ),
        'section' => 'procoder_header',
        'settings' => 'procoder_header_link_background_color',
    ) ) );

    // Header Link Background Hover Color
    $wp_customize->add_setting( 'procoder_header_link_background_hover_color', array(
        'default' => '#000',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'procoder_header_link_background_hover_color', array(
        'label' => __( 'Header Link Background Hover Color', 'procoder' ),
        'section' => 'procoder_header',
        'settings' => 'procoder_header_link_background_hover_color',
    )));

    // Header position
    $wp_customize->add_setting( 'procoder_header_position', array(
        'default' => 'center',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'procoder_header_position', array(
        'label' => __( 'Header Position', 'procoder' ),
        'section' => 'procoder_header',
        'settings' => 'procoder_header_position',
        'type' => 'select',
        'choices' => array(
            'menu_left' => __( 'Left', 'procoder' ),
            'menu_center' => __( 'Center', 'procoder' ),
            'menu_right' => __( 'Right', 'procoder' ),
        ),
    ) ) );





    // Footer section
    $wp_customize->add_section( 'procoder_footer', array(
        'title' => __( 'Procoder Footer', 'procoder' ),
        'description' => __( 'If you want to change the footer, you can do it here.','procoder' ),
        'priority' => 50,
    ) );
    // Footer Logo
    $wp_customize->add_setting( 'procoder_logo', array(
        'default' => get_bloginfo( 'template_directory' ) . '/assets/images/logo.png',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'procoder_logo', array(
        'label' => __( 'Upload Logo', 'procoder' ),
        'section' => 'procoder_footer',
        'settings' => 'procoder_logo',
    ) ) );

    // Copyright Text
    $wp_customize->add_setting( 'procoder_copyright_text', array(
        'default' => 'Copyright &copy; 2021 Procoder',
    ) );
    $wp_customize->add_control( 'procoder_copyright_text', array(
        'label' => __( 'Copyright Text', 'procoder' ),
        'section' => 'procoder_footer',
        'settings' => 'procoder_copyright_text',
    ) );

    // Copyright Link
    $wp_customize->add_setting( 'procoder_copyright_link', array(
        'default' => 'https://procoder.com',
    ) );
    $wp_customize->add_control( 'procoder_copyright_link', array(
        'label' => __( 'Copyright Link', 'procoder' ),
        'section' => 'procoder_footer',
        'settings' => 'procoder_copyright_link',
    ) );

    // Copyright Text Color
    $wp_customize->add_setting( 'procoder_copyright_text_color', array(
        'default' => '#fff',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'procoder_copyright_text_color', array(
        'label' => __( 'Copyright Text Color', 'procoder' ),
        'section' => 'procoder_footer',
        'settings' => 'procoder_copyright_text_color',
    ) ) );

    // Footer Background Color
    $wp_customize->add_setting( 'procoder_footer_background_color', array(
        'default' => '#000',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'procoder_footer_background_color', array(
        'label' => __( 'Footer Background Color', 'procoder' ),
        'section' => 'procoder_footer',
        'settings' => 'procoder_footer_background_color',
    ) ) );

    // Footer position
    $wp_customize->add_setting( 'procoder_footer_position', array(
        'default' => 'Center',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'procoder_footer_position', array(
        'label' => __( 'Footer Position', 'procoder' ),
        'section' => 'procoder_footer',
        'settings' => 'procoder_footer_position',
        'type' => 'select',
        'choices' => array(
            'footer_left' => __( 'Left', 'procoder' ),
            'footer_center' => __( 'Center', 'procoder' ),
            'footer_right' => __( 'Right', 'procoder' ),
        ),
    ) ) );








    
    // Theme Color section
    $wp_customize->add_section( 'procoder_theme', array(
        'title' => __( 'Procoder Theme Color', 'procoder' ),
        'description' => __( 'If you want to change the Theme Color, you can do it here.','procoder' ),
        'priority' => 50,
    ) );

    // Theme Color
    $wp_customize->add_setting( 'procoder_theme_color', array(
        'default' => '#fff',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'procoder_theme_color', array(
        'label' => __( 'Theme Color', 'procoder' ),
        'section' => 'procoder_theme',
        'settings' => 'procoder_theme_color',
    ) ) );

    // primary color
    $wp_customize->add_setting( 'procoder_primary_color', array(
        'default' => '#ea1a70',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'procoder_primary_color', array(
        'label' => __( 'Primary Color', 'procoder' ),
        'section' => 'procoder_theme',
        'settings' => 'procoder_primary_color',
    ) ) );

}

add_action( 'customize_register', 'procoder_customizer_register' );


// Theme color Customizer
function procoder_customizer_css() {
    $procoder_theme_color = get_theme_mod( 'procoder_theme_color', '#fff' );
    $procoder_primary_color = get_theme_mod( 'procoder_primary_color', '#ea1a70' );
    ?>
    <style type="text/css">
        body {
            background-color: <?php echo esc_attr( $procoder_theme_color ); ?>;
        }
        :root {
            --color-theme: <?php echo esc_attr( $procoder_theme_color ); ?>;
            --color-primary: <?php echo esc_attr( $procoder_primary_color ); ?>;
        }
    </style>
    <?php
}
add_action( 'wp_head', 'procoder_customizer_css' );
