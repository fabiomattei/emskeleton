<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="keywords" content="<?= $this->metakeywords; ?>" />
        <meta name="description" content="<?= $this->metadescritpion; ?>" />
        <title><?= $this->title?></title>
        <link rel="stylesheet" href="<?= URIMaker::fromBasePath('contents/templates/skeleton/css/clean.css') ?>" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?= URIMaker::fromBasePath('contents/templates/skeleton/css/layout.css') ?>" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?= URIMaker::fromBasePath('contents/templates/skeleton/css/color.css') ?>" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?= URIMaker::fromBasePath('contents/templates/skeleton/css/typography.css') ?>" type="text/css" media="screen" />
    </head>

    <body>
        <div id="centered">
            
		<!-- 1. Magazine Header -->

        <div id="header">
            <a href="<?= URIMaker::fromBasePath('index.php') ?>/"><?= Magazine::getMagazineTitle() ?></a>
            <p><?= Magazine::getMagazineDescription() ?></p>
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