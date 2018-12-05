			</div>
			<!-- /body -->

			<!-- footer -->
			<footer class="site-footer" role="contentinfo">
				<div class="section is-dark">
					<div class="container">

						<div class="widgets">
							<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-footer')) ?>
						</div>

						<!-- <div class="level">
							<div class="level-left">
								<div class="level-item">
									<p class="contact">Contact</p>
									<p class="copyright">
										&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
									</p>
								</div>
							</div>
							<div class="level-right">
								<div class="level-item">
									<p>Social</p>
								</div>
							</div>
						</div> -->
						<!-- /level -->

					</div>
					<!-- /container -->

				</div>
				<!-- /section -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<div class="nav-overlay"></div>

		<?php wp_footer(); ?>

	</body>
</html>
