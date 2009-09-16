<div id="content">

    <!-- 3. Sidebar -->

    <?php include("sidebar.php");?>

    <!-- 4. Magazine Main Content -->

    <div id="main_content">
        <h2><a href="<?=URIMaker::article($this->article)?>" rel="bookmark"><?= $this->article->getTitle() ?></a></h2>
        <p>
            <?= $this->article->getCreatedFormatted() ?>  by
            <?
            foreach ($this->article->users() as $user) :
                echo $user->getName().' ';
            endforeach;
            ?> |
            <? echo '<a href="'.URIMaker::comment($this->article).'"> comments ('.count($this->article->commentsPublished()).') </a>'; ?>
        </p>
        <p>
            <? if ($this->article->imageExists()) : ?>
            <img src="<?= URIMaker::fromBasePath($this->article->imagePath()) ?>" width="100" align="left" alt="<?= $this->article->getImgdescription()?>">
            <? endif; ?>
            <?= $this->article->getSummary() ?>
        </p>
        <p>
            <?= $this->article->getBody() ?>
        </p>
    </div>

</div>