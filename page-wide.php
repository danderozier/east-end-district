<?php /* Template Name: Wide Page Template */ get_header(); ?>

	<section class="section">
		<div class="container">

			<div class="page-header">
				<h1 class="title is-large">
					<?php the_title(); ?>
				</h1>
			</div>

			<div class="layout layout--three-col layout--single-wide">

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

				<div class="layout__right-rail"></div>

			</div>
			<!-- layout -->

		</div>
		<!-- container -->
	</section>
	<!-- section -->

<?php get_footer(); ?>
