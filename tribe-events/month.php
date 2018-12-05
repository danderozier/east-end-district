<?php
/**
 * Month View Template
 * Overrides src/views/month.php
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

do_action( 'tribe_events_before_template' );

// Title Bar
tribe_get_template_part( 'month/title-bar' );

// Tribe Bar
tribe_get_template_part( 'modules/bar' );

// Main Events Content
tribe_get_template_part( 'month/content' );

do_action( 'tribe_events_after_template' );
