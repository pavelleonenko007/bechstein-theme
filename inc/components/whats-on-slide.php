<div class="slider-wvwnts_slide wo-slider_item wo-slide">
  <div class="link-block">
    <div class="slider-wvwnts_top">
      <?php $event_id = get_post_meta($post->ID, '_bechtix_event_relation', true);
      $event_url = get_the_permalink($event_id);
      $event_image = wp_get_attachment_image(get_post_meta($event_id, '_bechtix_event_image', true), 'large', false, [
        'class' => 'img-cover'
      ]);

      // echo $event_image;
      if (!empty($event_image)) : ?>
        <a href="<?php echo $event_url; ?>" class="wo-slide__image">
          <?php echo $event_image; ?>
        </a>
      <?php endif;  ?>

      <?php $term_query = wp_get_object_terms($post->ID, [
        'event_tag',
        'genres',
        'instruments'
      ]); ?>
      <div class="slider-wvwnts_top-cats">
        <?php foreach ($term_query as $term) : ?>
          <a href="#" class="slider-wvwnts_top-cats_a"><?php echo $term->name; ?></a>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="slider-wvwnts_bottom">
      <div class="p-20-30 w20"><?php echo date('d F', strtotime(get_post_meta($post->ID, '_bechtix_ticket_start_date', true))); ?></div>
      <a href="<?php echo $event_url; ?>" class="p-30-45 bold"><?php the_title(); ?></a>
      <div class="p-17-25 home-card"><?php the_content(); ?></div>
      <?php $purchase_urls = json_decode(get_post_meta($post->ID, '_bechtix_purchase_urls', true), true); ?>
      <a bgline="1" href="<?php echo $purchase_urls[0]['link']; ?>" class="booktickets-btn home-page">
        <strong>Book tickets</strong>
      </a>
    </div>
  </div>
</div>