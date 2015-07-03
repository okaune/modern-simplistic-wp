<?php function makeSocielButton($id, $url, $icon) { ?>

<a id="<?php echo $id; ?>" href="<?php echo $url; ?>">
	<svg class="<?php echo $icon; ?>"><use xlink:href="#<?php echo $icon; ?>"></use></svg>
</a>

<?php } ?>