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

<div id="content">

    <!-- 3. Sidebar -->

    <?php include("sidebar.php");?>
    <!-- 4. Magazine Main Content -->

    <div id="main_content">
        <h2><?= $this->category->getName() ?></h2>
        <div class="categoryDescription"><?= $this->category->getDescription() ?></div>
        <? foreach($this->articles as $article) : ?>
        <h4><a href="<?=URIMaker::article($article)?>" rel="bookmark"><?= $article->getTitle() ?></a></h4>

        <div id="articleSummary">
                <?= $article->getCreatedFormatted() ?>  by
                <?
                foreach ($article->users() as $user) :
                    echo $user->getName().' ';
                endforeach;
                ?> |
                <? echo '<a href="'.URIMaker::comment($article).'"> comments ('.count($article->commentsPublished()).') </a>'; ?>
        </div>

        <div id="articleBody">
                <? if ($article->imageExists()) : ?>
            <img src="<?= URIMaker::fromBasePath($article->imagePath()) ?>" width="100" align="left" alt="<?= $article->getImgdescription()?>">
                <? endif; ?>
                <?= $article->getSummary() ?>
        </div>
        <? endforeach; ?>

        <div id="paginator">
            <?= $this->paginator->renderFullNav(URIMaker::category($this->category))  ?>
        </div>
    </div>

</div>