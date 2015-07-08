<?php function makeProfilePost ($url, $name, $date, $type, $desc) { ?>

<article class="resume_post medium-10 column right">
	<div class="row">
		<div class="column">
			<h3 class="resume_post__h3">
				<a class="resume_post__title" href="<?php echo $url; ?>" target="_blank"><?php echo $name; ?></a>
				<span class="resume_post__date"><?php echo $date; ?></span>
			</h3>
		</div>
	</div>
	<div class="row">
		<div class="resume_post__role column"><b><?php echo $type; ?></b></div>
		<p class="column"><?php echo $desc; ?></p>
	</div>
</article>

<?php } ?>
