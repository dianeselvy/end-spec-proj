<?php get_header(); ?>


<body>
  <div id="content">
  <div id="page-content">	
  <div id="middle">
  
<?php if( is_page() && !is_page(11)):  ?> 
  	<div id="middle-right">
	<?php get_sidebar(); ?>
	</div> <!--end middle-right -->
<?php endif; ?>	
	
	<div id="middle-left">
  	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
    <?php the_content(''); ?>
	
	<?php endwhile; endif; ?>  
	</div> <!-- end middle-left -->
  
  

	</div> <!--end middle-->
  </div> <!-- end page-content -->
  </div> <!-- end content-->
</body>
<p>page.php</p>



<?php get_footer(); ?>
