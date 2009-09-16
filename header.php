<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="keywords" content="<?= $this->metakeywords; ?>" />
        <meta name="description" content="<?= $this->metadescritpion; ?>" />
        <title><?= Magazine::getMagazineTitle() ?></title>
        <link rel="stylesheet" href="<?= URIMaker::fromBasePath('contents/templates/scheleton/clean.css') ?>" type="text/css" media="screen" />
		<style type="text/css">
		@import url("<?= URIMaker::fromBasePath('contents/templates/skeleton/layout.css') ?>");
		@import url("<?= URIMaker::fromBasePath('contents/templates/skeleton/color.css') ?>");
		@import url("<?= URIMaker::fromBasePath('contents/templates/skeleton/typography.css') ?>");
		</style>
    </head>

    <body id="easymagazine" class="magazine">

		<!-- 1. Magazine Header -->

        <div id="header">
            <a href="<?= URIMaker::fromBasePath('index.php') ?>/"><?= Magazine::getMagazineTitle() ?></a><br />
			<?= Magazine::getMagazineDescription() ?>
        </div>

		<!-- 2. Magazine Navigation Bar -->

        <div id="navigation_bar">
            <ul>
                <li><a href="<?= URIMaker::fromBasePath('index.php') ?>">Home</a></li>
                <li><a href="<?= URIMaker::people() ?>">People</a></li>
                <?
                foreach ($this->pages as $page) {
                    echo '<li><a href="'.URIMaker::page($page).'">'.$page->getTitle().'</a></li>';
                }
                ?>
            </ul>
        </div>