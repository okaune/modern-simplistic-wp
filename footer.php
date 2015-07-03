<footer>
	<div class="wrapper">
		<div class="contact">
			Laget av <span class="primarytextcolor">Ole Kristian Aune</span> &copy; <?php echo date("Y"); ?>
		</div>
		<?php include_once('modules/module_social_buttons.php'); ?>
	</div>
</footer>

<?php wp_footer (); ?>
<script type="text/javascript">
/* Initialize foundation */
$(document).foundation();

/* Initialize justifiedGallery */
/**
$("#image-container").justifiedGallery({
	rowHeight : 200,
	lastRow : 'justify',
	captions : false,
	margins : 3,
	border : 0,
	waitThumbnailsLoad : false
});
*/
</script>

</body>
</html>
