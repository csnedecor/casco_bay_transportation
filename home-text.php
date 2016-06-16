<!-- intro section -->
<?php $cs_theme_options = snedecor_get_options(); ?>
<div class="casco_intro">
  <?php if($cs_theme_options['home_intro_heading'] !='') { ?>
    <div class="row">
      <div class="col-sm-12">
        <div class="casco_heading_title">
          <h3><?php echo esc_attr($cs_theme_options['home_intro_heading']); ?></h3>
        </div><!-- /.casco_heading_title -->
      </div><!-- /.col-sm-12 -->
    </div><!-- /.row -->
  <?php } ?>
  <div class="container">
    <div class="row">
      <div class=" col-md-12 intro">
          <?php if($cs_theme_options['intro_text'] !='') { ?>
            <p><?php echo $cs_theme_options['intro_text']; ?></p>
          <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /Intro section -->
