<div class="article">
	<h2><?php echo $title; ?></h2>
	<p class="article_img">
		<img src="images/article_<?php echo $id;?>.png" alt="<?php echo $title; ?>">
	</p>
	<?php echo $intro_text;?>
	<p>
		<a href="article.php?id=<?php echo $id; ?>">Читать дальше...</a>
	</p>
</div>
<hr>