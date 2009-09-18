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

<div id="sidebar">
    <ul id="sidebarwidgeted">
        <li id="Search">
            <h5>Search</h5>
            <form id="searchform" method="post" action="<?= URIMaker::result() ?>">
                <input type="text" name="s" id="s" size="30" value="search this site..."/>
                <input type="submit" value="Search" name="Search" />
            </form>
        </li>

        <li id="Number">
            <h5><?= $this->number->getTitle() ?></h5>
            <h6><?= $this->number->getSubtitle() ?></h6>
            <div id="numberDescription">
                <? if ($this->number->imageExists()) : ?>
                <img src="<?= URIMaker::fromBasePath($this->number->imagePath()) ?>" width="200" alt="<?= $this->number->getImgdescription()?>">
                <? endif; ?>
                <?= $this->number->getSummary() ?>
            </div>
        </li>

        <li id="Numbers">
            <h5>Last Numbers</h5>
            <ul>
                <? foreach ($this->numbers as $num) : ?>
                <li><a href="<?= URIMaker::number($num) ?>"><?= $num->getTitle() ?></a></li>
                <? endforeach; ?>
            </ul>
        </li>

        <li id="Categories">
            <h5>Categories</h5>
            <ul>
                <? foreach ($this->categories as $cat) : ?>
                <li><a href="<?= URIMaker::category($cat) ?>"><?= $cat->getName() ?></a></li>
                <? endforeach; ?>
            </ul>
        </li>

        <li id="Admin">
            <h5>Admin</h5>
            <ul>
			hello admin register
                <li>login logout</li>
                <li><a href="http://www.wordpress.org/">hello</a></li>
                <li><a href="http://validator.w3.org/check?uri=referer">hello</a></li>
            </ul>
        </li>
    </ul>
</div>