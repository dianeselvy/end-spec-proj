<?php get_header(); ?>


<body>
  <div id="content">
  <div id="page-content">

  <div id="middle">
  <?php
echo do_shortcode( '[breadcrumb]' ); 
?>
<h2>Blog: Past Show Summaries</h2>
<br>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h2 id="blog-post"><a href="<?php the_permalink(); ?>">
<?php the_title(); ?></a></h2>
<?php the_excerpt(); ?>
<?php endwhile; endif; ?>

  </div> <!-- end middle -->
  </div> <!-- end page-content -->
  </div> <!-- end content-->
</body>
<p>index.php</p>



<?php get_footer(); ?>
