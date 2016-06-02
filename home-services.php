<!-- service section -->
<?php $cs_theme_options = snedecor_get_options(); ?>
<div class="casco_service">
<?php if($cs_theme_options['home_service_heading'] !='') { ?>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="casco_heading_title">
        <h3><?php echo esc_attr($cs_theme_options['home_service_heading']); ?></h3>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<div class="container">
    <div class="row isotope" id="isotope-service-container">
      <?php for($i=1; $i<4; $i++ ) { ?>
      <div class=" col-md-4 service">
        <div class="casco_service_area appear-animation bounceIn appear-animation-visible">
          <?php if($cs_theme_options['service_'.$i.'_icons'] !='') { ?><div class="casco_service_icon pull-left"><i class="<?php echo esc_attr($cs_theme_options['service_'.$i.'_icons']); ?>"></i></div><?php } ?>
          <div class="casco_service_detail media-body">
            <?php if($cs_theme_options['service_'.$i.'_title'] !='') { ?><h3><a href="<?php echo esc_url($cs_theme_options['service_'.$i.'_link']); ?>"><?php echo esc_attr($cs_theme_options['service_'.$i.'_title']); ?></a></h3><?php } ?>
            <?php if($cs_theme_options['service_'.$i.'_text'] !='') { ?><p><?php echo apply_filters('the_content', $cs_theme_options['service_'.$i.'_text'], true); ?></p><?php } ?>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
<!-- /Service section -->
