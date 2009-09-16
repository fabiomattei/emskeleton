<div id="content">

	<!-- 3. Magazine Main Content -->

	<div id="main_content">
		<h1><a href="<?=URIMaker::page($this->page)?>" rel="bookmark"><?= $this->page->getTitle() ?></a></h1>
		<p>
			<? if ($this->page->imageExists()) : ?>
			<img src="<?= URIMaker::fromBasePath($this->page->imagePath()) ?>" width="100" align="left">
			<? endif; ?>
			<?= $this->page->getSummary() ?>
		</p>
		<p>
            <?= $this->page->getBody() ?>
        </p>
	</div>

<!-- 4. Sidebar -->

<?php include("sidebar.php");?>

</div>