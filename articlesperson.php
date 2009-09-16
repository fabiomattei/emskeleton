<div id="content">

    <!-- 3. Sidebar -->

    <?php include("sidebar.php");?>

    <!-- 4. Magazine Main Content -->

    <div id="main_content">
        <h2>All articles by <?= $this->person->getName() ?></h2>
        <? foreach($this->person->articles() as $article) : ?>
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
            <img src="<?= URIMaker::fromBasePath($article->imagePath()) ?>" width="100" align="left" alt="<?= $article->getImgdescription()?>">
                <? endif; ?>
                <?= $article->getSummary() ?>
        </p>
        <p>
                <?= $article->getBody() ?>
        </p>
        <? endforeach; ?>
    </div>

</div>
