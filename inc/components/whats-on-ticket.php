<?php
global $post;
$post = !empty($args['ticket']) ? get_post($args['ticket']) : $post;
$event = get_post(get_post_meta($post->ID, '_bechtix_event_relation', true));
$purchase_urls = get_post_meta($post->ID, '_bechtix_purchase_urls', true);
$purchase_urls_normal = json_decode($purchase_urls, true);
$benefits_json = get_post_meta($post->ID, '_bechtix_ticket_benefits', true);
$benefits = _wp_specialchars($benefits_json, ENT_QUOTES, 'UTF-8', true);
?>
<div class="cms-li" data-ticket_benefits="<?php echo $benefits; ?>">
  <div class="cms-li_mom-img">
    <?php echo wp_get_attachment_image(
      get_post_meta($event->ID, '_bechtix_event_image', true),
      'medium',
      false,
      [
        'class' => 'cms-li_img',
        'style' => 'max-height: 270rem'
      ]
    ); ?>
    <?php $sale_status = get_post_meta($post->ID, '_bechtix_sale_status', true);
    $sale_statuses = [
      'No Status',
      'Few tickets',
      'Sold out',
      'Cancelled',
      'Not scheduled'
    ];
    if ($sale_status === '2' || $sale_status === '3') :
    ?>
      <div class="cms-li_sold-out-banner"><?php echo $sale_statuses[intval($sale_status)]; ?></div>
    <?php endif; ?>
  </div>
  <div class="cms-li_content">
    <div class="cms-li_time-div">
      <div class="p-30-45"><?php echo bech_get_ticket_times($post->ID); ?></div>
      <div class="p-17-25 italic"><?php echo get_post_meta($post->ID, '_bechtix_duration', true); ?></div>
    </div>
    <div class="p-20-30 title-event"><?php echo get_the_title($post); ?></div>
    <p class="p-17-25"><?php echo get_field('event_subheader', $post->ID); ?></p>
    <div class="cms-li_tags-div">
      <?php $tags = wp_get_object_terms($post->ID, ['event_tag', 'genres', 'instruments']);
      foreach ($tags as $tag) : ?>
        <a href="#" class="cms-li_tag-link"><?php echo $tag->name; ?></a>
      <?php endforeach; ?>
    </div>
    <div class="cms-li_actions-div">
      <?php
      if ($sale_status === '' || $sale_status === '0' || $sale_status === '1') : ?>
        <a bgline="1" href="<?php echo $purchase_urls_normal[0]['link']; ?>" class="booktickets-btn">
          <strong>Book tickets</strong>
        </a>
      <?php else : ?>
        <a bgline="2" href="#" class="booktickets-btn sold-out">
          <strong><?php echo $sale_statuses[intval($sale_status)]; ?></strong>
        </a>
      <?php endif; ?>
      <a href="<?php echo get_the_permalink($event->ID); ?>" class="readmore-btn w-inline-block">
        <div>read more</div>
        <div> →</div>
      </a>
    </div>
    <?php if ($sale_status === '' || $sale_status === '0') : ?>
      <div class="cms-li_price"><?php echo bech_get_ticket_from_to_price($post->ID); ?></div>
    <?php elseif ($sale_status === '1') : ?>
      <div class="cms-li_price" style="color: #B47171;"><?php echo $sale_statuses[intval($sale_status)]; ?></div>
    <?php endif; ?>
  </div>
  <div class="cms-li_actions-div biger">
    <a bgline="1" href="<?php echo $purchase_urls_normal[0]['link']; ?>" class="booktickets-btn">
      <strong>Book tickets</strong>
    </a>
    <?php if ($sale_status === '' || $sale_status === '0') : ?>
      <div class="cms-li_price"><?php echo bech_get_ticket_from_to_price($post->ID); ?></div>
    <?php elseif ($sale_status === '1') : ?>
      <div class="cms-li_price" style="color: #B47171;"><?php echo $sale_statuses[intval($sale_status)]; ?></div>
    <?php endif; ?>
  </div>
</div>