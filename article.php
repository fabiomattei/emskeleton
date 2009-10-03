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
        <h2><a href="<?=URIMaker::article($this->article)?>" rel="bookmark"><?= $this->article->getTitle() ?></a></h2>

        <div id="articleHead">
            <?= $this->article->getCreatedFormatted() ?>  by
            <?
            foreach ($this->article->users() as $user) :
                echo $user->getName().' ';
            endforeach;
            ?> |
            <? echo '<a href="'.URIMaker::comment($this->article).'"> comments ('.count($this->article->commentsPublished()).') </a>'; ?>
        </div>

        <div id="articleSummary">
            <? if ($this->article->imageExists()) : ?>
            <div id="image">
                <img src="<?= URIMaker::fromBasePath($this->article->imagePath()) ?>" width="200" alt="<?= $this->article->getImgAlt()?>">
                <? if ($this->article->getImgCaption() != ''): ?>
                    <div id="caption">
                    <?= $this->article->getImgCaption() ?>
                    </div>
                <? endif; ?>
            </div>
            <? endif; ?>
            <?= $this->article->getSummary() ?>
        </div>

        <div id="articleBody">
            <?= $this->article->getBody() ?>
        </div>
    </div>

</div>