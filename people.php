<div id="content">

    <!-- 3. Sidebar -->

    <?php include("sidebar.php");?>
    <!-- 4. Magazine Main Content -->

    <div id="main_content">
        <? foreach($this->people  as $user) : ?>
        <h1><a href="<?= URIMaker::articlesperson($user) ?>"><?= $user->getName() ?></a></h1>
        <p>
                <? if ($user->imageExists()) : ?>
            <img src="<?= URIMaker::fromBasePath($user->imagePath()) ?>" width="60" align="left" alt="<?= $user->getImgdescription()?>">
                <? endif; ?>
                <?= $user->getBody() ?>
        </p>
        <? endforeach; ?>
    </div>

</div>