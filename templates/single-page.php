<!-- article -->
<article id="post post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <!-- post meta -->
  <ul class="meta inline-meta meta--before">
    <li><?php the_category(', '); ?></li>
    <li><?php the_time('F j, Y'); ?></li>
  </ul>

  <!-- post title -->
  <h1 class="headline">
    <?php if( get_post_format() == 'link' ): ?>
      <a href="<?php echo get_url_in_content(get_the_content()); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
    <?php else: ?>
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
    <?php endif; ?>
  </h1>
  <!-- /post title -->

  <!-- post thumbnail -->
  <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
    <div class="post__image">
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php the_post_thumbnail('large'); ?>
      </a>
      <p class="caption">
        <?php the_post_thumbnail_caption(); ?>
      </p>
    </a>
    </div>
  <?php endif; ?>
  <!-- /post thumbnail -->

  <!-- post content -->
  <div class="entry">
    <?php if(get_post_format() == 'link'): ?>
      <?php the_content(); ?>
    <?php else: ?>
      <?php html5wp_excerpt('html5wp_index'); ?>
    <?php endif; ?>
  </div>

  <!-- post meta -->
  <ul class="meta inline-meta meta--after">
    <?php if(get_post_format() == 'link'): ?><li><a href="<?php the_permalink(); ?>">Permalink</a></li><?php endif; ?>
    <li>Posted by <?php the_author(); ?></li>
  </ul>

</article>
<!-- /article -->
