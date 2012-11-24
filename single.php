<?php get_header(); ?>
		<div id="articles">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'single' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; ?>
		</div>
<?php get_footer(); ?>
