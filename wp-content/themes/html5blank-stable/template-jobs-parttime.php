<?php
/*
 * Template name: Jobs Parttime
*/

 get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<h1><?php _e( 'Archives-parttime', 'html5blank' ); ?></h1>

			<form method="GET" action="">
				<input type="text" name="search_content" class="search_content">
				<button type="submit">Submit</button>
			</form>

			<?php

				$args = [
			 		'post_type' => 'parttime'
			 	];
				if ( isset($_GET['search_content']) ) {
					$args['s'] = $_GET['search_content'];

				}
			 	
			 	$my_posts = new WP_query( $args );
			 	// var_dump($my_posts);

			?>

				<?php if ($my_posts->have_posts()): while ($my_posts->have_posts()) : $my_posts->the_post(); ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<!-- post thumbnail -->
						<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
							</a>
						<?php endif; ?>
						<!-- /post thumbnail -->

						<!-- post title -->
						<h2>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h2>
						<!-- /post title -->

						<!-- post details -->
						<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
						<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
						<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
						<!-- /post details -->

						<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

						<?php edit_post_link(); ?>

					</article>
					<!-- /article -->

					<?php endwhile; ?>

					<?php else: ?>

					<!-- article -->
					<article>
						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
					</article>
					<!-- /article -->

				<?php endif; ?>


			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section put
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
