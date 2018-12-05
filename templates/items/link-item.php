<!-- link -->
<a id="link-<?php echo $post->link_id; ?>" class="item link-item" href="<?php echo $post->link_url; ?>" title="<?php echo $post->link_name; ?>">

  <?php if($post->link_image): ?>
    <div class="item__image">
      <img src="<?php echo $post->link_image; ?>" alt="<?php echo $post->link_name; ?> logo"/>
    </div>
  <?php endif; ?>

  <h2 class="headline">
    <?php echo $post->link_description; ?>
  </h2>
</a>
<!-- /link -->
