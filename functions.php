<?php





register_nav_menus(array(
'main-menu' => __( 'Main' ),
'foot-left' => __( 'Foot-left' ),
'foot-mid' => __( 'Foot-mid' ),
'foot-right' => __( 'Foot-right' ),
'foot-buttons' => __( 'Foot-buttons' ),
'h-buttons' => __( 'H-buttons' ),
));


add_theme_support( 'post-thumbnails' ); 




function get_banner(){
    
    global $post;
    $attachments = get_children(array('post_parent'=> $post->ID, 'order' => 'ASC', 'orderby' => 'menu_order', 'post_type' => 'attachment', 'post_mime_type'=> 'image'));
    
    if ($attachments) {
        
         echo '<div class="banner">';
    
foreach($attachments as $attachment ){
    echo '<div>';
        echo wp_get_attachment_image($attachment->ID, 'large');
        
        echo '</div>';
    
}
    
       
    echo '</div>';
       
    }
    

    
    
}



function get_child_pages() {
	
	global $post;
	
	rewind_posts(); // stop any previous loops 
	query_posts(array('post_type' => 'page', 'posts_per_page' => -1, 'post_status' => publish,'post_parent' => $post->ID,'order' => 'ASC','orderby' => 'menu_order')); // query and order child pages
    
	while (have_posts()) : the_post(); 
	
		$childPermalink = get_permalink( $post->ID ); // post permalink
		$childID = $post->ID; // post id
		$childTitle = $post->post_title; // post title
		$childExcerpt = $post->post_excerpt; // post excerpt
        
		echo '<article id="page-excerpt-'.$childID.'" class="page-excerpt">';
		echo '<h3><a href="'.$childPermalink.'">'.$childTitle.' &raquo;</a></h3>';
		echo '<p>'.$childExcerpt.' <a href="'.$childPermalink.'">Read More&nbsp;&raquo;</a></p>';
		echo '</article>';
        
	endwhile;
	
	wp_reset_query(); // reset query
        
}