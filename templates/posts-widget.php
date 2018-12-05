<div class="widget">
  <h3 class="widget__title">
    <a href="<?php echo get_the_permalink( get_option('page_for_posts', true) ); ?>">Latest News</a>
  </h3>

  <?php $posts_query = new WP_Query( array('posts_per_page' => 4) ); ?>
  <?php if( $posts_query->have_posts() ): ?>
    <div class="item-column">
      <?php while( $posts_query->have_posts() ): ?>
        <?php
          $posts_query->the_post();
          get_template_part('templates/items/post-item', get_post_format());
        ?>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>
</div>
