<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<div class="footer">
	<? // echo do_shortcode(''); ?>
</div>

<script src="<?=get_template_directory_URI()?>/app/app.js" type="module"></script>
<script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>

<?php wp_footer(); ?>
    
</body>
</html>