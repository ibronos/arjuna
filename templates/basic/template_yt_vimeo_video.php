<?php
	/*
		Resources Available:
		$page_header = Page Header - Text
		$page_content = Page Content - HTML Area
		$photo_file = Photo - Upload
		$photo_caption = Photo Caption - Text
		$hicn_video = Video - YT Vimeo Video
	*/
if ($hicn_video["type"] == "youtube") {
	$videoLink = youTubeEmbed($hicn_video["id"]);
} else if ($hicn_video["type"] == "vimeo") { 
	$videoLink = vimeoEmbed($hicn_video["id"]);		
}

?>
<div class="fs-row page_row">
	<div class="fs-cell fs-lg-8">
		<div class="typography">
			<h1><?php echo $page_header; ?></h1>
		</div>
	</div>
	<div class="fs-cell-right fs-lg-4 fs-xl-3">
		<?php include SERVER_ROOT."templates/layouts/_subnav.php"; ?>
	</div>
	<div class="fs-cell fs-lg-8 page_content">
		<div class="typography">
			<?php echo $page_content; ?>
			<iframe width="100%" height="500" src="<?php echo $videoLink; ?>" frameborder="0" allowfullscreen></iframe>
		</div>
		<?php include SERVER_ROOT."templates/layouts/_callouts-content.php"; ?>
	</div>
	<div class="fs-cell-right fs-lg-4 fs-xl-3">
		<?php include SERVER_ROOT."templates/layouts/_callouts-sidebar.php"; ?>
	</div>
</div>
<?php include SERVER_ROOT."templates/layouts/_callouts-full.php"; ?>
