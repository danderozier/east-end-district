<div class="comments">
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'eastenddistrict' ); ?></p>
</div>

	<?php return; endif; ?>

<?php if (have_comments()) : ?>

	<h2 class="title"><?php comments_number(); ?></h2>

	<ul>
		<?php wp_list_comments('type=comment&callback=eastenddistrictcomments'); // Custom callback in functions.php ?>
	</ul>

<?php endif; ?>

<?php comment_form(); ?>

</div>
