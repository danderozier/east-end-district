<?php
/**
 * List View Template
 * The wrapper template for a list of events. This includes the Past Events and Upcoming Events views
 * as well as those same views filtered to a specific category.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list.php
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
<?php tribe_get_template_part( 'list/title-bar' ); ?>

	<!-- Tribe Bar -->
<?php tribe_get_template_part( 'modules/bar' ); ?>

<div class="layout layout--three-col">

	<div class="layout__left-rail"></div>

	<main class="layout__main" role="main">
		<!-- Main Events Content -->
		<?php tribe_get_template_part( 'list/content' ); ?>
	</main>

	<div class="layout__right-rail">
		<?php get_template_part('sidebar'); ?>
	</div>

</div>

<?php
do_action( 'tribe_events_after_template' );
