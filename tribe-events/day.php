<?php
/**
 * Day View Template
 * The wrapper template for day view.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/day.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

do_action( 'tribe_events_before_template' );
?>

	<!-- Title Bar -->
<?php tribe_get_template_part( 'day/title-bar' ); ?>

<!-- Tribe Bar -->
<?php tribe_get_template_part( 'modules/bar' ); ?>

<div class="layout layout--three-col">

	<div class="layout__left-rail"></div>

	<main class="layout__main" role="main">
		<!-- Main Events Content -->
		<?php tribe_get_template_part( 'day/content' ); ?>
	</main>

	<div class="layout__right-rail">
		<?php get_template_part('sidebar'); ?>
	</div>

</div>

<?php
do_action( 'tribe_events_after_template' );
