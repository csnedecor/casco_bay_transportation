<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Casco_Bay_Transportation
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php $cs_theme_options = snedecor_get_options(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'casco-bay-transportation' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container site-branding">
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
				<ul class="head-contact-info">
						<?php if($cs_theme_options['email_id'] !='') { ?><li><i class="fa fa-envelope"></i><a href="mailto:<?php echo $cs_theme_options['email_id']; ?>"><?php echo esc_attr($cs_theme_options['email_id']); ?></a></li><?php } ?>
						<?php if($cs_theme_options['address'] !='') { ?><li><i class="fa fa-home"></i><?php echo esc_attr($cs_theme_options['address']); ?></li><?php } ?>
						<?php if($cs_theme_options['phone_no'] !='') { ?><li><i class="fa fa-phone"></i><a href="tel:<?php echo $cs_theme_options['phone_no']; ?>"><?php echo esc_attr($cs_theme_options['phone_no']); ?></a></li><?php } ?>
				</ul>
			<?php } ?>

		</div><!-- .site-branding -->
		<!-- Navigation  menus -->
		<div class="navigation_menu"  data-spy="affix" data-offset-top="95" id="casco_nav_top">
			<div class="container navbar-container" >
				<nav class="navbar navbar-default " role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">

						  <span class="sr-only"><?php _e('Toggle navigation','snedecor');?></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						</button>
					</div>
					<div id="menu" class="collapse navbar-collapse ">
					<?php wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class' => 'nav navbar-nav'
							)
							);	?>
					</div>
				</nav>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
