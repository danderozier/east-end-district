<?php
/**
 * Default Events Template
 * Overrides /src/views/default-template.php
**/

 get_header(); ?>

 	<section class="section tribe-events">
 		<div class="container">

      <?php tribe_events_before_html(); ?>
      <?php tribe_get_view(); ?>
      <?php tribe_events_after_html(); ?>

      <!-- <div id="tribe-events-pg-template" class="tribe-events-pg-template">

      </div> -->

 		</div>
 		<!-- container -->
 	</section>
 	<!-- section -->

 <?php get_footer(); ?>
