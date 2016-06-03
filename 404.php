<?php get_header(); ?>
<div class="casco_header_breadcrum_title">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php _e('404 Error','snedecor'); ?></h1>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row casco_blog_wrapper">
		<div class="col-md-12 hc_404_error_section">
			<div class="error_404">
				<h2><?php _e('404','snedecor'); ?></h2>
				<h4><?php _e('Whoops... Page Not Found !!!','snedecor'); ?></h4>
				<p><?php _e('We`re sorry, but the page you are looking for doesn`t exist.','snedecor'); ?></p>
				<p><a href="<?php echo home_url( '/' ); ?>"><button class="casco_send_button" type="submit"><?php _e('Go To Homepage','snedecor'); ?></button></a></p>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
