<a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>" title="<?php echo get_the_title(); ?>" class="item post-item">
  <p class="categories">
    <?php echo category_list(); ?>
  </p>
  <figure class="item__image">
    <?php if ( has_post_thumbnail()) : ?>
      <?php the_post_thumbnail('large'); ?>
    <?php endif; ?>
  </figure>
  <h3 class="headline"><?php the_title(); ?></h3>
  <p class="meta"><?php the_time('F j, Y'); ?></p>
</a>
