<?php get_header(); ?>

	<section class="section">
		<div class="container">

			<div class="page-header">
				<h1 class="title is-large">
					<?php single_cat_title(); ?>
				</h1>
			</div>

			<div class="layout layout--three-col">

				<!-- Left Rail -->
				<div class="layout__left-rail">
					<div class="sub-nav">
						<ul>
							<li><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">All Categories</a></li>
							<?php wp_list_categories(array(
								'title_li' => ''
							)); ?>
						</ul>
					</div>
				</div>
				<!-- /Left Rail -->

				<!-- Center -->
				<main class="layout__main" role="main">

					<?php get_template_part('loop'); ?>

					<?php get_template_part('pagination'); ?>

				</main>
				<!-- /Center -->

				<!-- Right Rail -->
				<aside class="layout__right-rail">
					<?php get_sidebar('news'); ?>
				</aside>
				<!-- /Right Rail -->

			</div>
			<!-- layout -->
		</div>
		<!-- container -->
	</section>
	<!-- section -->

<?php get_footer(); ?>
