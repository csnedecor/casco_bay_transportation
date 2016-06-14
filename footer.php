<?php $cs_theme_options = snedecor_get_options(); ?>
<!-- Footer Widget Secton -->
<?php
  if ( is_active_sidebar( 'footer-widget-area' ) ){ ?>
    <div class="casco_footer_widget_area">
      <div class="container">
        <div class="row">
            <?php dynamic_sidebar( 'footer-widget-area' ); ?>
        </div>
      </div>
    </div>
  <?php } ?>
<div class="casco_footer_area">
    <div class="container">
      <div class="col-md-12">
      <p class="casco_footer_copyright_info cs_rtl" >
      <?php if($cs_theme_options['footer_customizations']) {
        echo esc_attr($cs_theme_options['footer_customizations']);
      } ?>
      <?php if($cs_theme_options['footer_section_social_media_enabled'] == '1') { ?>
      <div class="casco_footer_social_div">
        <ul class="social">
          <?php if($cs_theme_options['fb_link']!='') { ?>
             <li class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><a  href="<?php echo esc_url($cs_theme_options['fb_link']); ?>"><i class="fa fa-facebook"></i></a></li>
          <?php } if($cs_theme_options['twitter_link']!='') { ?>
            <li class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><a href="<?php echo esc_url($cs_theme_options['twitter_link']) ; ?>"><i class="fa fa-twitter"></i></a></li>
          <?php } if($cs_theme_options['linkedin_link']!='') { ?>
            <li class="linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin"><a href="<?php echo esc_url($cs_theme_options['linkedin_link']) ; ?>"><i class="fa fa-linkedin"></i></a></li>
          <?php } ?>
        </ul>
      </div>
      <?php } ?>
      </div>
    </div>
</div>
<!-- /Footer Widget Secton -->
</div>
<a href="#" title="Go Top" class="casco_scrollup" style="display: inline;"><i class="fa fa-chevron-up"></i></a>
<?php get_template_part('google', 'font'); ?>
<?php wp_footer(); ?>
</body>
</html>
