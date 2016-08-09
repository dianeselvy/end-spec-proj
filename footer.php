<?php wp_footer(); ?> 

<footer>

<div id="foot-left">
		<?php wp_nav_menu( array( 'theme_location' => 'foot-left', 'container' => 'div','container_id' => 'foot-left', ) ); ?>
	<!--<ul>
		<li><a href="#">About</a></li>
		<li><a href="#">History</a></li>
		<li><a href="#">Staff</a></li>
		<li><a href="#">Gallery</a></li>
	</ul>-->
</div> <!-- end foot-left -->

<div id="foot-mid">
		<?php wp_nav_menu( array( 'theme_location' => 'foot-mid', 'container' => 'div','container_id' => 'foot-mid', ) ); ?>
	<!--<ul>
		<li><a href="#">Shows</a></li>
		<li><a href="#">Calendar</a></li>
		<li><a href="#">Blog</a></li>
		<li><a href="#">FAQ</a></li>
		<li><a href="#">Contact</a></li>
	</ul>-->
</div> <!-- end foot-mid-->

<div id="foot-right">
		<?php wp_nav_menu( array( 'theme_location' => 'foot-right', 'container' => 'div','container_id' => 'foot-right', ) ); ?>
	<!--<ul>
		<li><a href="#">Recent Performances</a></li>
		<li><a href="#">Dear Ruth</a></li>
		<li><a href="#">God's Country</a></li>
		<li><a href="#">The Greater Good</a></li>
		<li><a href="#">The Marriage of Figaro</a></li>
		<li><a href="#">The Chalk Garden</a></li>
	</ul>-->
</div> <!-- end foot-right-->

<div id="f-buttons">
		<?php wp_nav_menu( array( 'theme_location' => 'foot-buttons', 'container' => 'div','container_id' => 'f-buttons', ) ); ?>
<!--<ul>
	<li><a href="#">Buy Tickets</a></li>
	<li><a href="#">Donate</a></li>
	<li><a href="#">Subscribe</a></li>
</ul>-->
</div>
</footer>