<?php wp_enqueue_style('mapboxgl'); ?>
<?php wp_enqueue_script('mapboxgl'); ?>
<?php get_header(); ?>

	<section class="section">
		<div class="container">
      <div class="home-hero">
        <div class="home-hero__tile home-hero--text">
          <h1 class="title is-large"><?php the_title(); ?></h1>
          <?php if (have_posts()): while (have_posts()) : the_post(); ?>
						<div class="entry">
							<?php the_content(); ?>
						</div>
          <?php endwhile; endif; ?>
        </div>
        <div class="home-hero__tile home-hero--map">
					<div id='map'></div>
					<script>
						mapboxgl.accessToken = 'pk.eyJ1IjoiZGFuam95Y2UiLCJhIjoiNDc1Y2UwZDdkMjRkMmJkNmYzZDViNmMxMTE4ZjA3NTIifQ.FDI9-JFiGuBodhe1aIX8DA';
						const map = new mapboxgl.Map({
						container: 'map',
						style: 'mapbox://styles/danjoyce/cjpba9yq9ac6z2snz6lplz9mx',
						center: [-95.318,29.737],
						zoom: 12
						});
					</script>
        </div>
      </div>
    </div>
  </section>

  <?php $posts_query = new WP_Query( array('posts_per_page' => 4) ); ?>
  <?php if( $posts_query->have_posts() ): ?>
		<section class="section is-light">
	    <div class="container">

        <h1 class="title is-small">
          <a href="<?php echo get_the_permalink( get_option('page_for_posts', true) ); ?>">
            <?php echo get_the_title( get_option('page_for_posts', true) ); ?>
          </a>
        </h1>
        <div class="item-row">
          <?php while( $posts_query->have_posts() ): ?>
            <?php
              $posts_query->the_post();
              get_template_part('templates/items/post-item', get_post_format());
            ?>
          <?php endwhile; ?>
        </div>
			</div>
		</section>
  <?php endif; ?>

  <?php if( function_exists('tribe_get_option') ): ?>
		<?php $events_query = tribe_get_events( array('posts_per_page' => 4, 'start_date' => date( 'Y-m-d H:i:s' )) ); ?>
		<?php if( count($events_query) > 0 ): ?>
			<section class="section is-light">
		    <div class="container">
					<h1 class="title is-small">
						<a href="<?php echo esc_url( tribe_get_events_link() ); ?>">
							Upcoming Events
						</a>
					</h1>
		      <div class="item-row">
						<?php foreach ( $events_query as $post ): ?>
						  <?php setup_postdata( $post ); ?>
						  <?php get_template_part('templates/items/event-item'); ?>
						<?php endforeach; ?>
					</div>
				</div>
			</section>
		 <?php endif; ?>
	<?php endif; ?>

	<?php $links_query = get_bookmarks(array('orderby' => 'rating')); ?>
	<?php if( count($links_query) > 0 ): ?>
		<section class="section is-light">
	    <div class="container">
				<h1 class="title is-small">
					Our Sister Sites
				</h1>
		    <div class="item-row">
					<?php foreach ( $links_query as $post ): ?>
					  <?php get_template_part('templates/items/link-item'); ?>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
 	<?php endif; ?>

<?php get_footer(); ?>
