<?php get_header(); ?>

	<main role="main">
		<div class="container" id="tem-parttime">
			<div class="row">
			<div class="col-4">
				<!-- Side bar -->
					<?php get_sidebar(); ?>
			</div>

			<div class="col-8 ">
				<!-- section -->
				<section>

					<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

					<h1><?php _e( 'Việc làm theo giờ', 'html5blank' ); ?></h1>

					<!-- <form method="GET" action="">
						<input type="text" name="search_content" class="search_content">
						<button type="submit">Submit</button>
					</form> -->

					
					<!-- Truy vấn cho tìm kiếm -->
					<?php
						$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
						$args =  array(
							'posts_per_page'   => 10,
							'post_type' => 'parttime',
							'paged'          => $paged
						);

						if ( isset($_GET['search_content']) ) {
							$args['s'] = $_GET['search_content'];

						}
					 	
					 	$my_posts = new WP_query( $args );

					?>

					<!-- Vòng lặp -->
					<?php if ($my_posts->have_posts()): 
						while ($my_posts->have_posts()) : $my_posts->the_post(); ?>

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
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_titlesmall('', '...', true, '50') ?></a>
							</h2>
							<!-- /post title -->

							<!-- post details -->
							<span class="date"><?php the_time('d/m/Y'); ?> <?php the_time('g:i a'); ?></span>
							<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
							<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
							<!-- /post details -->

							<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

							<?php edit_post_link(); ?>

						</article>
						<!-- /article -->

						<div class="entry">
							
						</div>

					<?php endwhile; ?>

					<nav class="pagination">
				        <?php pagination_bar( $my_posts ); ?>
				    </nav>
					<?php wp_reset_postdata();?>

					<?php else: ?>

						<!-- article -->
						<article>
							<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
						</article>
						<!-- /article -->

					<?php endif; ?>
					<!-- Kết thúc -->
					<?php 
					// Pagination html5
					// get_template_part('pagination'); 
					?>

				</section>
			</div>
		</div>
		</div>
		
	</main>


<?php get_footer(); ?>
