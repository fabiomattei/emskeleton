<?php

/*
    Copyright (C) 2009  Fabio Mattei

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

?>
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
                <li><a href="<?= URIMaker::numberslist() ?>">Numbers</a></li>
                <?
                foreach ($this->pages as $page) {
                    echo '<li><a href="'.URIMaker::page($page).'">'.$page->getTitle().'</a></li>';
                }
                ?>
            </ul>
        </div>