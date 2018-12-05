<article class="search-result">

  <!-- post meta -->
  <ul class="meta inline-meta meta--before">
    <li class="meta--post-type"><?php echo get_post_type(); ?></li>
    <li><?php the_time('F j, Y'); ?></li>
  </ul>

  <h1 class="headline">
    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
  </h1>

  <div class="entry">
    <?php html5wp_excerpt(255, false); ?>
  </div>
</article>
