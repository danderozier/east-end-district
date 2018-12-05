<?php
/**
 * Day View Title Template
 * Overrides src/day/title-bar.php
 */
?>

<div class="page-header">
	<?php do_action( 'tribe_events_before_the_title' ); ?>
	<h1 class="title is-medium">
		<?php echo tribe_get_events_title() ?>
	</h1>
	<?php do_action( 'tribe_events_after_the_title' ); ?>
</div>
