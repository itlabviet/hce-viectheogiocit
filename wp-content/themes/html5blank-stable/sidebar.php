<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<?php //get_template_part('searchform'); ?>
	<form method="GET" action="" class="search">
		<input type="text" name="search_content" class="search_content">
		<button type="submit">Search</button>
	</form>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

</aside>
<!-- /sidebar -->
