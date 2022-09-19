<?php
$card = $args['card'];
?>
<div class="ui-about">
    <div class="ui-about_mom-div">
		<?php echo wp_get_attachment_image( $card['image']['ID'], 'large', false, [
			'class' => "img-cover"
		] ); ?>
    </div>
    <div class="ui-yourvisit_content">
        <div class="p-25-40 bold">
			<?php echo $card['header']; ?>
        </div>
        <div class="html-embed-4 w-embed">
            <svg width="91" height="16" viewbox="0 0 91 16" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"
                      fill="#030E14"></path>
                <path d="M27 0L28.7961 5.52786H34.6085L29.9062 8.94427L31.7023 14.4721L27 11.0557L22.2977 14.4721L24.0938 8.94427L19.3915 5.52786H25.2039L27 0Z"
                      fill="#030E14"></path>
                <path d="M45 0L46.7961 5.52786H52.6085L47.9062 8.94427L49.7023 14.4721L45 11.0557L40.2977 14.4721L42.0938 8.94427L37.3915 5.52786H43.2039L45 0Z"
                      fill="#030E14"></path>
                <path d="M64 0L65.7961 5.52786H71.6085L66.9062 8.94427L68.7023 14.4721L64 11.0557L59.2977 14.4721L61.0938 8.94427L56.3915 5.52786H62.2039L64 0Z"
                      fill="#030E14"></path>
                <path d="M83 0L84.7961 5.52786H90.6085L85.9062 8.94427L87.7023 14.4721L83 11.0557L78.2977 14.4721L80.0938 8.94427L75.3915 5.52786H81.2039L83 0Z"
                      fill="#030E14"></path>
            </svg>
        </div>
        <div class="p-17-25 mar20">
			<?php echo $card['description']; ?>
        </div>
        <a rel="nofollow"
           href="<?php echo $card['link']; ?>"
           target="_blank"
           class="ui-about_link"><?php echo $card['link']; ?></a>
    </div>
</div>
