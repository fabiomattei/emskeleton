<div id="content">

	<!-- 3. Magazine Main Content -->

	<div id="main_content">
		<? foreach($this->people  as $user) : ?>
		<h1><a href="<?= URIMaker::articlesperson($user) ?>"><?= $user->getName() ?></a></h1>
		<p>
			<? if ($user->imageExists()) : ?>
        		<img src="<?= URIMaker::fromBasePath($user->imagePath()) ?>" width="60" align="left">
            <? endif; ?>
			<?= $user->getBody() ?>
		</p>
		<? endforeach; ?>
	</div>

<!-- 4. Sidebar -->

<?php include("sidebar.php");?>

</div>