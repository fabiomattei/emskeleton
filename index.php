<div id="content">

	<!-- 3. Magazine Main Content -->

	<div id="main_content">
		<? foreach($this->number->articlesPublished()  as $article) : ?>
		<h1><a href="<?=URIMaker::article($article)?>" rel="bookmark"><?= $article->getTitle() ?></a></h1>
		<p>
			<?= $article->getCreatedFormatted() ?>  by
			<?
			foreach ($article->users() as $user) :
			echo $user->getName().' ';
			endforeach;
			?> |
			<? echo '<a href="'.URIMaker::comment($article).'"> comments ('.count($article->commentsPublished()).') </a>'; ?>
		</p>
		<p>
			<? if ($article->imageExists()) : ?>
			<img src="<?= URIMaker::fromBasePath($article->imagePath()) ?>" width="100" align="left">
			<? endif; ?>
			<?= $article->getSummary() ?>
		</p>
		<? endforeach; ?>
	</div>

<!-- 4. Sidebar -->

<?php include("sidebar.php");?>

</div>