<?php get_header(); ?>


<body>
  <div id="content">
  <div id="page-content">
  <div id="middle">
  <?php
echo do_shortcode( '[breadcrumb]' ); 
?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(''); ?>
	<?php endwhile; endif; ?>  

  </div> <!-- end middle -->
  </div> <!-- end page-content -->
  </div> <!-- end content-->
</body>
<p>single.php</p>



<?php get_footer(); ?>
