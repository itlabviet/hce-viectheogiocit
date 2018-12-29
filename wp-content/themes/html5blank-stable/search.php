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

					<h3><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h3>

					<?php get_template_part('loop'); ?>

					<?php get_template_part('pagination'); ?>

				</section>
				<!-- /section -->
			</div>
		</div>
		</div>
		
	</main>


<?php get_footer(); ?>
