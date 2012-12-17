<?php 
	/*
    Template Name: content 
    
    */
    get_header();
    echo '<h3>'.$post->post_title.'</h3>';
    $meta=get_post_custom($post->ID);
    echo "<img src='{$meta[img][0]}' alt=''>";
    echo '<p>'.$post->post_content.'</p>';
	get_template_part('bottom');
	get_footer();
 ?>