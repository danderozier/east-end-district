<?php get_header(); ?>

	<?php if ( has_post_thumbnail()) : ?>
    <figure class="hero">
      <?php the_post_thumbnail('hero'); ?>
    </figure>
  <?php endif; ?>

	<section class="section">

		<div class="container">

			<div class="page-header">
				<h1 class="title is-large">
					<?php the_title(); ?>
				</h1>
				<?php if(has_post_thumbnail()): ?>
				<figcaption>
					<p class="caption">Above: <?php the_post_thumbnail_caption(); ?></p>
				</figcaption>
				<?php endif; ?>
			</div>

			<div class="layout layout--three-col">

				<div class="layout__left-rail">
					<div class="sub-nav">
						<?php echo wpb_list_child_pages(); ?>
					</div>
				</div>

				<main class="layout__main" role="main">



					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<div class="entry">
								<?php the_content(); ?>
							</div>

							<?php comments_template( '', true ); // Remove if you don't want comments ?>

							<br class="clear">

							<?php edit_post_link(); ?>

						</article>
						<!-- /article -->

					<?php endwhile; ?>

					<?php else: ?>

						<!-- article -->
						<article>

							<h2><?php _e( 'Sorry, nothing to display.', 'eastenddistrict' ); ?></h2>

						</article>
						<!-- /article -->

					<?php endif; ?>
				</main>
				<!-- layout__main -->

				<aside class="layout__right-rail">
					<?php get_sidebar(); ?>
				</aside>
				<!-- layout__rail -->

			</div>
			<!-- layout -->
		</div>
		<!-- container -->
	</section>
	<!-- section -->

<?php get_footer(); ?>
