<?php function makeProfilePost ($url, $name, $date, $type, $desc) { ?>

<article class="resume_post medium-10 column right">
	<div class="row">
		<div class="medium-8 column">
			<h3>
				<a href="<?php echo $url; ?>" target="_blank"><?php echo $name; ?></a>
			</h3>
		</div>
		<div class="resume_post__date medium-4 column medium-text-right"><?php echo $date; ?></div>
	</div>
	<div class="row">
		<div class="resume_post__role column"><b><?php echo $type; ?></b></div>
		<p class="column"><?php echo $desc; ?></p>
	</div>
</article>

<?php } ?>
