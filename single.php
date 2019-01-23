<?php get_header(); ?>

	<section class="section">
		<div class="container">

			<div class="page-header">
				<h1 class="title is-large">
					<?php echo get_the_title( get_option( 'page_for_posts' ) ); ?>
				</h1>
			</div>
			<!-- /Page Header -->

			<div class="layout layout--two-col layout--single">
				<main class="layout__main" role="main">

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<!-- post meta -->
						<ul class="meta inline-meta">
							<li><?php the_category(', '); ?></li>
							<li><?php the_time('F j, Y'); ?></li>
						</ul>

						<!-- post title -->
						<h1 class="headline">
							<?php the_title(); ?>
						</h1>
						<!-- /post title -->

						<!-- post thumbnail -->
						<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
							<div class="post__image">
								<?php the_post_thumbnail(); ?>
								<p class="caption">
									<?php the_post_thumbnail_caption(); ?>
								</p>
							</a>
							</div>
						<?php endif; ?>
						<!-- /post thumbnail -->

						<!-- post meta -->
						<ul class="meta pull-out">
							<li>Posted by <?php the_author(); ?></li>
							<li><?php the_tags( 'Tagged ', ', '); ?></li>
							<li><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></li>
							<?php edit_post_link(); ?>
						</ul>

						<!-- post content -->
						<div class="entry">
							<?php the_content(); ?>
						</div>

						<!-- comments -->
						<?php comments_template(); ?>

					</article>
					<!-- /article -->

				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>

						<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

					</article>
					<!-- /article -->

				<?php endif; ?>

				</main>
				<!-- layout__main -->

				<div class="layout__rail">
					<?php get_sidebar(); ?>
				</div>
				<!-- layout__rail -->

			</div>
			<!-- layout -->
		</div>
		<!-- container -->
	</section>
	<!-- section -->

<?php get_footer(); ?>
