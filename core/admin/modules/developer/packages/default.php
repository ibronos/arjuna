<?php
	$packages = $admin->getPackages();
?>
<div class="table">
	<summary><h2>Packages</h2></summary>
	<header>
		<span class="developer_templates_name">Package Name</span>
		<span style="width: 80px;">Actions</span>
	</header>
	<ul>
		<?php foreach ($packages as $package) { ?>
		<li>
			<section class="developer_templates_name">
				<?=BigTree::safeEncode($package["name"])?> <?=BigTree::safeEncode($package["version"])?>
			</section>
			<section class="view_action">
				<a href="<?=DEVELOPER_ROOT?>packages/edit/<?=$package["id"]?>/" class="icon_edit"></a>
			</section>
			<section class="view_action">
				<a href="<?=DEVELOPER_ROOT?>packages/delete/?id=<?=$package["id"]?><?php $admin->drawCSRFTokenGET(); ?>" class="icon_delete"></a>
			</section>
		</li>
		<?php } ?>
	</ul>
</div>
<script>
	$(".icon_delete").click(function() {
		BigTreeDialog({
			title: "Uninstall Package",
			content: '<p class="confirm">Are you sure you want to uninstall this package?<br /><br />Related components, including those that were added to this package will also <strong>completely deleted</strong> (including related files).</p>',
			icon: "delete",
			alternateSaveText: "Uninstall",
			callback: $.proxy(function() {
				window.location.href = $(this).attr("href");
			},this)
		});
		
		return false;
	});
</script>