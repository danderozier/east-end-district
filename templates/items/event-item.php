<!-- event -->
<a href="<?php the_permalink(); ?>" id="event-<?php the_ID(); ?>" <?php post_class('item event-item'); ?>>

  <div class="event-item__date">
    <span class="day">
      <?php echo tribe_get_start_date( $post, false, 'l,' ); ?>
    </span>
    <span class="month">
      <?php echo tribe_get_start_date( $post, false, 'F' ); ?>
    </span>
    <span class="date">
      <?php echo tribe_get_start_date( $post, false, 'j' ); ?>
    </span>
  </div>
  <!-- /event-item__date -->

  <div class="event-item__body">
    <h2 class="headline">
      <?php echo "$post->post_title"; ?>
    </h2>

    <p class="meta">
      <span class="meta__time">
        <?php echo tribe_get_start_date( $post, true, 'g:ia' ); ?>
        <?php echo tribe_get_end_date( $post, true, '-g:ia' ); ?>
      </span>
      <span class="meta__location">
        <?php echo tribe_get_venue( $post ); ?>
      </span>
    </p>
  </div>
  <!-- /event-item__body -->

</a>
<!-- /event -->
