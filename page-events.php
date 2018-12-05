<?php /* Template Name: Events Page Template */ get_header(); ?>

	<section class="section">
		<div class="container">

			<div class="page-header">
				<h1 class="title is-large">
					Events
				</h1>
			</div>

			<div class="layout layout--two-col">

				<main class="layout__main" role="main">

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<div class="entry">
								<?php the_content(); ?>
							</div>

							<br class="clear">

							<?php edit_post_link(); ?>

						</article>
						<!-- /article -->

					<?php endwhile; ?>

					<?php else: ?>

						<!-- article -->
						<article>

							<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

						</article>
						<!-- /article -->

					<?php endif; ?>
				</main>

				<div class="layout__rail">
					<?php get_template_part('sidebar'); ?>
				</div>

			</div>
			<!-- layout -->

		</div>
		<!-- container -->
	</section>
	<!-- section -->

<?php get_footer(); ?>
