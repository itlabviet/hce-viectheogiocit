<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section
			<h1><?php _e( 'Archives-parttime', 'html5blank' ); ?></h1>
>

			<form method="GET" action="">
				<input type="text" name="search_content" class="search_conent">
				<button type="submit">Submit</button>
			</form>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section put
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
