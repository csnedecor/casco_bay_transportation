<!-- intro section -->
<?php $cs_theme_options = snedecor_get_options(); ?>
<div class="casco_intro">
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
<!-- /Service section -->
