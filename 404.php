<?php get_header(); ?>
		<div id="articles" role="main">
			<article id="post-0" class="post error404 not-found">
				<header class="entry-header">
					<h1 class="entry-title">404 - Page non trouvée</h1>
				</header>

				<div class="entry-content">
					<p>Tu est tombé sur une page qui existe aussi peu que le 
                       bon goût dans un album de Charly et Lulu.</p>
                    <p>Tu ne trouveras pas de bon goût dans <em>Même pas 
                        mâles</em>, mais tu peux trouver des articles 
                        intéressants ici :</p>

					<?php get_search_form(); ?>

                <p>Ou lire les derniers articles :</p>
					<?php the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 10 ), array( 'widget_id' => '404' ) ); ?>

                <p>Ou visiter (va te chercher un coca, ça peut durer un moment) :</p>
                    <div class="row-fluid">
					    <div class="span6">
						    <h2 class="widgettitle"><?php _e( 'Most Used Categories', 
                                'twentyeleven' ); ?></h2>
						    <ul>
						    <?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
						    </ul>
					    </div>

                        <div class="span6">
					    <?php
					    $archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives.', 'twentyeleven' )) . '</p>';
					    the_widget( 'WP_Widget_Archives', array('count' => 0 , 'dropdown' => 1 ), array( 'after_title' => '</h2>'.$archive_content ) );
					?>
                        </div>
                    </div>


				</div><!-- .entry-content -->
			</article><!-- #post-0 -->
		</div><?php /* #articles */ ?>
<?php get_footer(); ?>
