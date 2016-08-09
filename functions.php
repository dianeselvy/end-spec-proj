<?php





register_nav_menus(array(
'main-menu' => __( 'Main' ),
'foot-left' => __( 'Foot-left' ),
'foot-mid' => __( 'Foot-mid' ),
'foot-right' => __( 'Foot-right' ),
'foot-buttons' => __( 'Foot-buttons' ),
));


add_theme_support( 'post-thumbnails' ); 




function get_banner(){
    
    global $post;
    $attachments = get_children(array('post_parent'=> $post->ID, 'order' => 'ASC', 'orderby' => 'menu_order', 'post_type' => 'attachment', 'post_mime_type'=> 'image'));
    
    if ($attachments) {
        
         echo '<div class="banner">';
    
foreach($attachments as $attachment ){
    echo '<div>';
    echo '<a href="'.wp_get_attachment_image_src( $attachment_id, 'medium' ).'">';
        echo wp_get_attachment_image($attachment->ID);
        echo '</a>';
        echo '</div>';
    
}
    
       
    echo '</div>';
       
    }
    

    
    
}