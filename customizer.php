<?php
function snedecor_gl_customizer( $wp_customize ){
  $cs_theme_options = snedecor_get_options();

  /**************************************/
  // General Options
  /***********************************/
  $wp_customize->add_section(
        'general_sec',
        array(
            'title' => __( 'Theme General Options','snedecor' ),
            'description' => 'Customize Your theme\'s general Settings',
      'capability'=>'edit_theme_options',
            'priority' => 35,

        )
    );

  // Add logo
    $wp_customize->add_setting(
    'casco_options[upload_image_logo]',
    array(
      'type'    => 'option',
      'default'=>$cs_theme_options['upload_image_logo'],
      'sanitize_callback'=>'esc_url_raw',
      'capability'        => 'edit_theme_options',
    )
  );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'casco_upload_image_logo', array(
    'label'        => __( 'Website Logo', 'snedecor' ),
    'section'    => 'general_sec',
    'settings'   => 'casco_options[upload_image_logo]',
  ) ) );

  // Choose logo height and width
  $wp_customize->add_setting(
    'casco_options[height]',
    array(
      'type'    => 'option',
      'default'=>$cs_theme_options['height'],
      'sanitize_callback'=>'casco_sanitize_integer',
      'capability'        => 'edit_theme_options'
    )
  );
  $wp_customize->add_control( 'casco_logo_height', array(
    'label'        => __( 'Logo Height', 'snedecor' ),
    'type'=>'number',
    'section'    => 'general_sec',
    'settings'   => 'casco_options[height]',
  ) );
  $wp_customize->add_setting(
    'casco_options[width]',
    array(
      'type'    => 'option',
      'default'=>$cs_theme_options['width'],
      'sanitize_callback'=>'casco_sanitize_integer',
      'capability'        => 'edit_theme_options',
    )
  );
  $wp_customize->add_control( 'casco_logo_width', array(
    'label'        => __( 'Logo Width', 'snedecor' ),
    'type'=>'number',
    'section'    => 'general_sec',
    'settings'   => 'casco_options[width]',
  ) );
}

function casco_sanitize_integer( $input ) {
    return (int)($input);
}

add_action( 'customize_register', 'snedecor_gl_customizer');

?>
