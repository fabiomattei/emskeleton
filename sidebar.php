<div id="sidebar">
	<ul id="sidebarwidgeted">
		<li id="Search">
        	<h4>Search</h4>
	   		<form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="text" name="s" id="s" size="30" value="search this site..."/></form>
		</li>
		
		<li id="Numbers">
			<h4>Last Numbers</h4>
			<ul>
	        	<? foreach ($this->numbers as $num) : ?>
	         		<li><a href="<?= URIMaker::number($num) ?>"><?= $num->getTitle() ?></a></li>
	       	    <? endforeach; ?>
	    	</ul>
		</li>

		<li id="Admin">
			<h4>Admin</h4>
			<ul>
			hello admin register
			<li>login logout</li>
			<li><a href="http://www.wordpress.org/">hello</a></li>
			<li><a href="http://validator.w3.org/check?uri=referer">hello</a></li>
			</ul>
		</li>
		
		<li id="Links">
		<h4>Interesting links</h4>
		<ul>
		<li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
		</ul>
		</li>
	</ul>	
</div>