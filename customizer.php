<?php
function snedecor_gl_customizer( $wp_customize ){
  $cs_theme_options = snedecor_get_options();
  $ImageUrl1 = esc_url(get_template_directory_uri() ."/images/header-1.jpg");
  $ImageUrl2 = esc_url(get_template_directory_uri() ."/images/header-2.jpg");
  $ImageUrl3 = esc_url(get_template_directory_uri() ."/images/header-3.jpg");

  /**************************************/
  // General Options
  /***********************************/
  $wp_customize->add_section(
        'general_sec',
        array(
            'title' => __( 'General Options','snedecor' ),
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

/**************************************/
    /* Slider options */
/***************************************/

  $wp_customize->add_section(
      'slider_sec',
        array(
            'title' =>  __( 'Slider Options','snedecor' ),
            'description' => 'Add slider images',
            'capability'=>'edit_theme_options',
            'priority' => 35,
            'active_callback' => 'is_front_page',
        )
    );
  $wp_customize->add_setting(
    'casco_options[slide_image_1]',
    array(
      'type'    => 'option',
      'default'=>$ImageUrl1,
      'capability' => 'edit_theme_options',
      'sanitize_callback'=>'esc_url_raw',
    )
  );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'casco_slider_image_1', array(
    'label'        => __( 'Slider Image One', 'snedecor' ),
    'section'    => 'slider_sec',
    'settings'   => 'casco_options[slide_image_1]'
  ) ) );
  $wp_customize->add_setting(
    'casco_options[slide_image_2]',
    array(
      'type'    => 'option',
      'default'=>$ImageUrl2,
      'capability' => 'edit_theme_options',
      'sanitize_callback'=>'esc_url_raw'
    )
  );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'casco_slider_image_2', array(
    'label'        => __( 'Slider Image Two ', 'snedecor' ),
    'section'    => 'slider_sec',
    'settings'   => 'casco_options[slide_image_2]'
  ) ) );

  $wp_customize->add_setting(
    'casco_options[slide_image_3]',
    array(
      'type'    => 'option',
      'default'=>$ImageUrl3,
      'capability' => 'edit_theme_options',
      'sanitize_callback'=>'esc_url_raw',

    )
  );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'casco_slider_image_3', array(
    'label'        => __( 'Slider Image Three', 'snedecor' ),
    'section'    => 'slider_sec',
    'settings'   => 'casco_options[slide_image_3]'
  ) ) );

/*********************************************/
    /* Service Options */
/********************************************/

  $wp_customize->add_section('service_section',array(
    'title'=>__("Service Options",'snedecor'),
    'capability'=>'edit_theme_options',
    'priority' => 35,
    'active_callback' => 'is_front_page',
  ));

  $wp_customize->add_setting(
    'casco_options[service_home]',
    array(
      'type'    => 'option',
      'default'=>$cs_theme_options['service_home'],
      'sanitize_callback'=>'casco_sanitize_checkbox',
      'capability' => 'edit_theme_options'
    )
  );
  $wp_customize->add_control( 'home_service_heading', array(
    'label'        => __( 'Home Service Title', 'snedecor' ),
    'type'=>'text',
    'section'    => 'service_section',
    'settings'   => 'casco_options[home_service_heading]'
  ) );

  $wp_customize->add_setting(
  'casco_options[home_service_heading]',
    array(
    'default'=>esc_attr($cs_theme_options['home_service_heading']),
    'type'=>'option',
    'capability'=>'edit_theme_options',
    'sanitize_callback'=>'casco_sanitize_text',

      )
  );
  $wp_customize->add_control( 'casco_show_service', array(
    'label'        => __( 'Enable Service on Home', 'snedecor' ),
    'type'=>'checkbox',
    'section'    => 'service_section',
    'settings'   => 'casco_options[service_home]'
  ) );

  $wp_customize->add_setting(
  'casco_options[service_1_icons]',
    array(
    'default'=>esc_attr($cs_theme_options['service_1_icons']),
    'type'=>'option',
    'capability'=>'edit_theme_options',
    'sanitize_callback'=>'casco_sanitize_text',

      )
  );
  $wp_customize->add_control('casco_options[service_1_icons]',
      array(
    'label'        => __( 'Service Icon One', 'snedecor' ),
    'description'=>__('<a href="http://fontawesome.bootstrapcheatsheets.com">FontAwesome Icons</a>','weblizar'),
          'section'  => 'service_section',
    'type'=>'text',
    'settings'   => 'casco_options[service_1_icons]'
      )
  );
  $wp_customize->add_setting(
    'casco_options[service_1_title]',
    array(
    'default'=>esc_attr($cs_theme_options['service_1_title']),
    'type'=>'option',
    'capability'=>'edit_theme_options',
    'sanitize_callback'=>'casco_sanitize_text',
      )
  );
  $wp_customize->add_control( 'service_one_title', array(
    'label'        => __( 'Service One Title', 'snedecor' ),
    'type'=>'text',
    'section'    => 'service_section',
    'settings'   => 'casco_options[service_1_title]'
  ) );

  $wp_customize->add_setting(
    'casco_options[service_1_text]',
    array(
    'default'=>esc_attr($cs_theme_options['service_1_text']),
    'type'=>'option',
    'sanitize_callback'=>'casco_sanitize_text',
    'capability'=>'edit_theme_options',
      )
  );
  $wp_customize->add_control( 'service_one_text', array(
    'label'        => __( 'Service One Text', 'snedecor' ),
    'type'=>'text',
    'section'    => 'service_section',
    'settings'   => 'casco_options[service_1_text]'
  ) );

  $wp_customize->add_setting(
    'casco_options[service_1_link]',
    array(
    'default'=>esc_attr($cs_theme_options['service_1_link']),
    'type'=>'option',
    'capability'=>'edit_theme_options',
    'sanitize_callback'=>'esc_url_raw',
  ));
  $wp_customize->add_control( 'service_1_link', array(
    'label'        => __( 'Service One Link', 'snedecor' ),
    'type'=>'url',
    'section'    => 'service_section',
    'settings'   => 'casco_options[service_1_link]'
  ) );

  $wp_customize->add_control(
    new casco_Customize_Misc_Control(
        $wp_customize,
        'service_options1-line',
        array(
            'section'  => 'service_section',
            'type'     => 'line'
        )
    ));
  $wp_customize->add_setting(
  'casco_options[service_2_icons]',
    array(
    'default'=>esc_attr($cs_theme_options['service_2_icons']),
    'type'=>'option',
    'capability'=>'edit_theme_options',
    'sanitize_callback'=>'casco_sanitize_text',

    )
  );
  $wp_customize->add_control( 'casco_options[service_2_icons]',
      array(
    'label'        => __( 'Service Icon Two', 'snedecor' ),
    'description'=>__('<a href="http://fontawesome.bootstrapcheatsheets.com">FontAwesome Icons</a>','weblizar'),
          'section'  => 'service_section',
    'type'=>'text',
    'settings'   => 'casco_options[service_2_icons]'
      )
  );

  $wp_customize->add_setting(
    'casco_options[service_2_title]',
    array(
    'default'=>esc_attr($cs_theme_options['service_2_title']),
    'type'=>'option',
    'capability'=>'edit_theme_options',
    'sanitize_callback'=>'casco_sanitize_text'
    )
  );
  $wp_customize->add_control( 'service_two_title', array(
    'label'        => __( 'Service Two Title', 'snedecor' ),
    'type'=>'text',
    'section'    => 'service_section',
    'settings'   => 'casco_options[service_2_title]'
  ) );

  $wp_customize->add_setting(
    'casco_options[service_2_text]',
    array(
    'default'=>esc_attr($cs_theme_options['service_2_text']),
    'type'=>'option',
    'sanitize_callback'=>'casco_sanitize_text',
    'capability'=>'edit_theme_options',
    )
  );
  $wp_customize->add_control( 'casco_service_two_text', array(
    'label'        => __( 'Service Two Text', 'snedecor' ),
    'type'=>'text',
    'section'    => 'service_section',
    'settings'   => 'casco_options[service_2_text]'
  ) );

  $wp_customize->add_setting(
    'casco_options[service_2_link]',
    array(
    'default'=>esc_attr($cs_theme_options['service_2_link']),
    'type'=>'option',
    'capability'=>'edit_theme_options',
    'sanitize_callback'=>'esc_url_raw',
    ));
  $wp_customize->add_control( 'service_2_link', array(
    'label'        => __( 'Service Two Link', 'snedecor' ),
    'type'=>'url',
    'section'    => 'service_section',
    'settings'   => 'casco_options[service_2_link]'
  ) );

  $wp_customize->add_control(
    new casco_Customize_Misc_Control(
        $wp_customize,
        'service_options2-line',
        array(
            'section'  => 'service_section',
            'type'     => 'line'
        )
  ));

  $wp_customize->add_setting(
  'casco_options[service_3_icons]',
    array(
    'default'=>esc_attr($cs_theme_options['service_3_icons']),
    'type'=>'option',
    'capability'=>'edit_theme_options',
    'sanitize_callback'=>'casco_sanitize_text',

    )
  );
  $wp_customize->add_control('casco_options[service_3_icons]',
      array(
    'label'        => __( 'Service Icon Three', 'snedecor' ),
    'description'=>__('<a href="http://fontawesome.bootstrapcheatsheets.com">FontAwesome Icons</a>','weblizar'),
          'section'  => 'service_section',
    'type'=>'text',
    'settings'   => 'casco_options[service_3_icons]'
      )
  );

  $wp_customize->add_setting(
  'enigma_options[service_3_title]',
    array(
    'default'=>esc_attr($cs_theme_options['service_3_title']),
    'type'=>'option',
    'sanitize_callback'=>'enigma_sanitize_text',
    'capability'=>'edit_theme_options',
    )
  );
  $wp_customize->add_control( 'casco_service_three_title', array(
    'label'        => __( 'Service Three Title', 'snedecor' ),
    'type'=>'text',
    'section'    => 'service_section',
    'settings'   => 'casco_options[service_3_title]'
  ) );
  $wp_customize->add_setting(
  'casco_options[service_3_text]',
    array(
    'default'=>esc_attr($cs_theme_options['service_3_text']),
    'type'=>'option',
    'sanitize_callback'=>'casco_sanitize_text',
    'capability'=>'edit_theme_options',
    )
  );
  $wp_customize->add_control( 'casco_service_three_text', array(
    'label'        => __( 'Service Three Text', 'snedecor' ),
    'type'=>'text',
    'section'    => 'service_section',
    'settings'   => 'casco_options[service_3_text]'
  ) );

  $wp_customize->add_setting(
  'casco_options[service_3_link]',
    array(
    'default'=>esc_attr($cs_theme_options['service_3_link']),
    'type'=>'option',
    'capability'=>'edit_theme_options',
    'sanitize_callback'=>'esc_url_raw',
  ));
  $wp_customize->add_control( 'service_3_link', array(
    'label'        => __( 'Service Three Link', 'snedecor' ),
    'type'=>'url',
    'section'    => 'service_section',
    'settings'   => 'casco_options[service_3_link]'
  ) );


  $wp_customize->add_control(new casco_Customize_Misc_Control(
        $wp_customize, 'casco_service_options3-line',
        array(
            'section'  => 'service_section',
            'type'     => 'line'
        )
    ));
}
add_action( 'customize_register', 'snedecor_gl_customizer');

/* Sanitizers */
function casco_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}
function casco_sanitize_integer( $input ) {
    return (int)($input);
}
/* Custom Control Class */
if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'casco_Customize_Misc_Control' ) ) :
class casco_Customize_Misc_Control extends WP_Customize_Control {
    public $settings = 'blogname';
    public $description = '';
    public function render_content() {
        switch ( $this->type ) {
            default:

            case 'heading':
                echo '<span class="customize-control-title">' . esc_html( $this->label ) . '</span>';
                break;

            case 'line' :
                echo '<hr />';
                break;

        }
    }
}
endif;

?>
