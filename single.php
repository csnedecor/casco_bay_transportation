<?php get_header(); ?>
<div class="container">
	<div class="row casco_blog_wrapper">
	<div class="col-md-8">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() );
		endwhile;
		else :
			get_template_part('nocontent');
		endif;
		snedecor_navigation_posts();
		comments_template( '', true ); ?>
	</div>
	<?php get_sidebar(); ?>
	</div> <!-- row div end here -->
</div><!-- container div end here -->
<?php get_footer(); ?>
