<!DOCTYPE html>
<html lang="en">
<head>
  <title>Endangered Species Theatre Project</title>
  <meta charset="utf-8">
  <meta name="robots" content="noindex">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
  <link rel="script" href="<?php bloginfo('template_directory');?>/functions.php"/>

    <!--Google Fonts-->
  <link href='https://fonts.googleapis.com/css?family=Cutive+Mono|Khula:400,600,300' rel='stylesheet' type='text/css'>
    
  
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/slick/slick-theme.css"/>

</head>
<header>
<a href="http://estp.dianeselvy.com"><img src="<?php bloginfo('template_directory'); ?>/images/estp-2.png" /></a>

<div id="h-buttons">
<?php wp_nav_menu( array( 'theme_location' => 'h-buttons', 'container' => 'div','container_id' => 'h-buttons', ) ); ?>
<ul>
	<li><a href="#">Buy Tickets</a></li>
	<li><a href="#">Donate</a></li>
	<li><a href="#">Subscribe</a></li>
</ul>
</div>

<div id="navigation">
	<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div','container_id' => 'navigation', ) ); ?>
</div>

</header>
