<?php get_header();
$cs_theme_options = snedecor_get_options();

$cs_theme_options['_frontpage'];
if ($cs_theme_options['_frontpage']=="1" && is_front_page()) {
  get_template_part('home','slideshow');
  if($cs_theme_options['intro_text'] != "") {
    get_template_part('home', 'text');
  }
  if($cs_theme_options['service_home'] == "1") {
    get_template_part('home','services');
  }
  get_footer();
}
 else
{
  if(is_page()){
  get_template_part('page');
  }else{
    get_template_part('index');
  }
} ?>
