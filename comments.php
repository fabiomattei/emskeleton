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
            <img src="<?= URIMaker::fromBasePath($this->article->imagePath()) ?>" width="100" alt="<?= $this->article->getImgAlt()?>">
            <? if ($this->article->getImgCaption() != ''): ?>
            <div id="caption">
            <?= $this->article->getImgCaption() ?>
            </div>
            <? endif; ?>
            </div>
            <? endif; ?>
            <?= $this->article->getSummary() ?>
        </div>

        <p>Comments</p>
        
        <? if (isset($this->advice)) :?>
        <p class="advice"><?= $this->advice ?></p>
        <? endif; ?>

        <? foreach($this->article->commentsPublished()  as $comment) : ?>

        <p class="commentSignature"><?= $comment->getCreatedFormatted() ?> by
            <?= $comment->getSignature() ?>
        </p>

        <p class="commentTitle">
            <?= $comment->getTitle() ?>
        </p>
        <p class="commentBody">
            <?= $comment->getBody() ?>
        </p>

        <? endforeach; ?>

        <? if ($this->article->getCommentsallowed() && $this->article->number()->getCommentsallowed()): ?>
        <form name="newcomment" method="post" action="<?= URIMaker::comment($this->article) ?>">
            Title<br />
            <input type="text" name="Title" value=""/><br />
            Body<br />
            <textarea name="Body" rows="4" cols="40"></textarea><br />
            Signature<br />
            <input type="text" name="Signature" value=""/><br /><br />
            <!-- pass a session id to the query string of the script to prevent ie caching -->
            <img src="<?= URIMaker::fromBasePath('lib/securimage/securimage_show.php?sid='.md5(uniqid(time())))?>"><br />
            <input type="text" name="code" /><br /><br />
            <input type="submit" value="Ok" name="Ok" />
        </form>
        <? endif; ?>
    </div>
</div>