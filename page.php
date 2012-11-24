<?php get_header(); ?>
	<div id="articles">
        <?php while(have_posts()):
            the_post();
			get_template_part('content', 'page');
			comments_template('', true);
		endwhile; ?>
	</div><!-- #content -->
<?php get_footer(); ?>
