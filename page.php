<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Casco_Bay_Transportation
 */

get_header(); ?>
<div class="container">
	<div class="row casco_blog_wrapper">
		<div class="col-md-12">
			<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
				<div class="casco_blog_full">
					<?php  if(has_post_thumbnail()):
							$defalt_arg = array('class' => "casco_img_responsive");
							?>
							<div class="casco_blog_thumb_wrapper_showcase">
								<div class="casco_blog-img">
								<?php the_post_thumbnail('cs_page_thumb',$defalt_arg); ?>
								</div>
							</div>
							<?php endif; ?>
							<div class="casco_blog_post_content">
								<?php the_content( __( 'Read More' , 'snedecor' ) ); ?>
							</div>
					</div>
					<div class="push-right">
						<hr class="blog-sep header-sep">
					</div>
					<?php comments_template( '', true ); ?>
					<?php
					endwhile;
				endif; ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
