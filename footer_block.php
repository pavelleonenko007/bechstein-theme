
		<?php wp_footer(); ?>
		<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/main.js?ver=1657717607"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/front.js?ver=1657717607"></script>
		<?php if(file_exists(dirname( __FILE__ ).'/mailer.php')){ include_once 'mailer.php'; } ?>
		<?php if(function_exists('the_field')) { the_field('footer_code', 'option'); } ?>
		<?php if(file_exists(dirname( __FILE__ ).'/footer_code.php')){ include_once 'footer_code.php'; } ?>
	</body>
</html>
