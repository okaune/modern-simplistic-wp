<?php
if ( has_post_thumbnail() ) {
	$img_id = get_post_thumbnail_id(get_the_ID()); // Get image ID
	$thumb = wp_get_attachment_image_src($img_id,'post_image'); // Get pageImage
} else {
	$thumb = array(get_template_directory_uri() . '/img/background-large.jpg');
}
?>

<div class="feautured_image" style="background-image: url(<?php echo $thumb['0']; ?>)">
	<div class="row">
		<a href="<?php echo get_permalink(); ?>" class="column medium-6 large-4 feautured_image_content">
			<h2 class="feautured_image_content__h2"><?php the_title(); ?></h2>
			<?php the_excerpt(); ?>
		</a>
	</div>
</div>
