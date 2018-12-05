<?php get_header(); ?>

<section class="section">
	<div class="container">

		<div class="page-header">
			<h1 class="title is-large">
				Search
			</h1>
		</div>

		<div class="layout layout--three-col">

			<!-- Left Rail -->
			<div class="layout__left-rail">
				<p class="subtitle search-results">
					<?php echo sprintf( __( 'Showing %s search results for “%s”', 'html5blank' ), $wp_query->found_posts, get_search_query() ); ?>
				</p>
			</div>
			<!-- /Left Rail -->

			<!-- Center -->
			<main class="layout__main" role="main">

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<?php get_template_part('templates/search-result'); ?>

				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>
						<h2><?php _e( 'Sorry, no results.', 'html5blank' ); ?></h2>
					</article>
					<!-- /article -->

				<?php endif; ?>


				<?php get_template_part('pagination'); ?>

			</main>
			<!-- /Center -->

			<!-- Right Rail -->
			<aside class="layout__right-rail">
				
			</aside>
			<!-- /Right Rail -->

		</div>
		<!-- layout -->
	</div>
	<!-- container -->
</section>
<!-- section -->

<?php get_footer(); ?>
