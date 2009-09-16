<div id="content">

    <!-- 3. Sidebar -->

    <?php include("sidebar.php");?>
    <!-- 4. Magazine Main Content -->

    <div id="main_content">
        <h1>#<?= $this->number->getIndexnumber() ?>. <?= $this->number->getTitle() ?></h1>
        <h3><?= $this->number->getSubtitle() ?></h3>
        <? foreach($this->number->articlesPublished()  as $article) : ?>
        <h2><a href="<?=URIMaker::article($article)?>" rel="bookmark"><?= $article->getTitle() ?></a></h2>
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
        <? endforeach; ?>
    </div>

</div>