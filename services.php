<?php 
	/*
    Template Name: فعالیت ها و خدمات
    
    */
    get_header();
 ?>
 <div class="floor">
	<nav class="w6 right project">
		<ul>
		<?php 
			$test=$post->post_title;
			dynamic_sidebar('فعالیت ها و خدمات');
		?>
		 </ul>
	</nav>
    <div class="w18 right" >
			
	<?php
	$metas=get_post_custom($post->ID);
	if($metas['img']){
		foreach ($metas['img'] as $meta) {
			echo '<h4>'.$post->post_title.'</h4>';
			echo"<div class='fram-once'>";
				echo wp_get_attachment_image($meta,'full');
			echo"</div>";
		}
	}
	    echo '<p>'.$post->post_content.'</p>';
	?>
		
    </div>
</div>
<div class="clear"></div>

<?php 
	get_template_part('bottom');
	get_footer();
 ?>