<div class="rightext">
<?php 
	$args=array(
		'numberposts' => '4',
		'post_type'   => 'page', 
		'post_status' => 'publish',
		'post_parent' =>'101'
		);
	$subpages=get_children($args);
	if($subpages){
		foreach ($subpages as $page ) {
            $meta=get_post_custom($page->ID);
            ?>
            	<script type="text/javascript">
            		if(test)
            	</script>
            <?
            //echo $page->ID;
            echo "<div class='rt-img'>";
                foreach ($meta['slideImg'] as $imag) {
                    echo wp_get_attachment_image($imag,'full');
                }
                  echo '<h4>'.$page->post_title.'</h4>';
                  echo '<p>'.$page->post_content.'</p>';

            echo "</div>";
            
        }
        // echo"<ul class='navFirst'>";
        // foreach ($subpages as $page ) {
        		
        //        	echo"<li></li>";
        //          }
        //     echo"</ul>";

       
	}
?>
    		
		<div class="clear"></div>
</div>