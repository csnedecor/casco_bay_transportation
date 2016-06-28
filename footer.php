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
      <div class="logo">
        <a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
          <?php
          if($cs_theme_options['upload_image_logo']){ ?>
            <img class="img-responsive" src="<?php echo $cs_theme_options['upload_image_logo']; ?>" style="height:<?php if($cs_theme_options['height']!='') { echo $cs_theme_options['height']; }  else { "80"; } ?>px; width:<?php if($cs_theme_options['width']!='') { echo $cs_theme_options['width']; }  else { "200"; } ?>px;" />
          <?php } else {
            echo get_bloginfo('name');
          } ?>
        </a>
        <?php
          $description = get_bloginfo( 'description', 'display' );
          if ( $description || is_customize_preview() ) : ?>
          <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
        <?php
        endif; ?>
      </div>
      <?php if($cs_theme_options['email_id'] || $cs_theme_options['address'] || $cs_theme_options['phone_no'] !='') { ?>
        <ul class="foot">
          <?php if($cs_theme_options['email_id'] !='') { ?><li><i class="fa fa-envelope"></i><a href="mailto:<?php echo $cs_theme_options['email_id']; ?>"><?php echo esc_attr($cs_theme_options['email_id']); ?></a></li><?php } ?>
          <?php if($cs_theme_options['address'] !='') { ?><li><i class="fa fa-home"></i><?php echo esc_attr($cs_theme_options['address']); ?></li><?php } ?>
          <?php if($cs_theme_options['phone_no'] !='') { ?><li><i class="fa fa-phone"></i><a href="tel:<?php echo $cs_theme_options['phone_no']; ?>"><?php echo esc_attr($cs_theme_options['phone_no']); ?></a></li><?php } ?>
        </ul>
      <?php } ?>
        <?php if($cs_theme_options['upload_partner_logo']) {
          if($cs_theme_options['partner_link']) { ?>
            <a href="<?php echo $cs_theme_options['partner_link'] ?>">
          <?php } ?>
          <img class="img-responsive partner_logo" src="<?php echo $cs_theme_options['upload_partner_logo']; ?>" style="width:<?php if($cs_theme_options['partner_width']!='') { echo $cs_theme_options['partner_width']; }  else { "200"; } ?>px;" />
          <?php if($cs_theme_options['partner_link']) { ?>
            </a>
          <?php } ?>
        <?php } ?>
    </div>
  </div>
  <div class="container">
      <div class="col-md-12">
        <p class="casco_footer_copyright_info cs_rtl" >
        <?php if($cs_theme_options['footer_customizations']) {
          echo esc_attr($cs_theme_options['footer_customizations']);
        } ?></p>
      </div>
    </div>
<!-- /Footer Widget Secton -->
</div>
<a href="#" title="Go Top" class="casco_scrollup" style="display: inline;"><i class="fa fa-chevron-up"></i></a>
<?php get_template_part('google', 'font'); ?>
<?php wp_footer(); ?>
</body>
</html>
