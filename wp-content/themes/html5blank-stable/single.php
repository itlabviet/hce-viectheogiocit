<?php get_header(); ?>

	<main role="main">
	<!-- section -->
		<div class="container" id="post-parttime">
			<div class="row">
				<div class="col-8">

					<section>

						<?php if (have_posts()): while (have_posts()) : the_post(); ?>

							<!-- article -->
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

								<!-- post title -->
								<h1>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
								</h1>
								<!-- /post title -->

								<!-- post thumbnail -->
								<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_post_thumbnail(); // Fullsize image for the single post ?>
										<br>
									</a>
								<?php endif; ?>
								<!-- /post thumbnail -->

								<!-- post details -->
								<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
								<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
								<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
								<!-- /post details -->

								<?php the_content(); // Dynamic Content ?>

								<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

								<p><?php _e( 'Danh mục: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
								
								<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

								<div class="author-wrap media">
									<div class="media-body">
										<p><?php _e( 'Bài viết được đăng bởi ', 'html5blank' );?> <a href="<?php the_author_meta('user_url'); ?>" target="_blank" class="ext-link" title="Ghé thăm website của <?php the_author_meta('user_login') ?>"><?php the_author(); ?> </a></p>

										<div class="author-descrip">
											<?php the_author_meta('description') ?>
										</div>

										<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">Xem bài của <?php the_author_meta('user_login') ?></a>
									</div>
									
									<div class="author-img align-self-center" >
										<div>
											<?php echo get_avatar(get_the_author_meta("ID"),100); ?>
										</div>
										<p><?php the_author(); ?></p>				
									</div>

								</div>


								<?php comments_template(); ?>

							</article>
							<!-- /article -->

						<?php endwhile; ?>

						<?php else: ?>

							<!-- article -->
							<article>

								<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

							</article>
							<!-- /article -->

						<?php endif; ?>

					</section>

				</div>

				<div class="col-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	
	<!-- /section -->
	</main>



<?php get_footer(); ?>
