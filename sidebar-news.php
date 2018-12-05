<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<div class="widget">
		<?php get_template_part('searchform'); ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-sidebar')) ?>
	</div>

</aside>
<!-- /sidebar -->
