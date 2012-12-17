<?php
/*
    template name: صفحه اول
*/
    get_template_part('head');
    echo"<div class='welcom'>";
    	$aray=array(
		'numberposts' =>'3',
		'orderby '=> 'menu_order', // This ensures images are in the order set in the page media manager  
        'order'=> 'ASC',  
        'post_mime_type' => 'image', // Make sure it doesn't pull other resources, like videos  
        'post_parent' => $post->ID, // Important part - ensures the associated images are loaded 
        'post_status' => null, 
        'post_type' => 'attachment'
        );  
        $images = get_children($aray);
        
		if($images){
			
			foreach ($images as $img) {
			echo "<div class='step1' id='anihelper1'>";
				$img_full=wp_get_attachment_image_src($img->ID,'large');
				echo "<div class='cityimg' style='background-image:url({$img_full[0]})'>";
					
					//echo $img_full;
				echo"</div>";
			echo"</div>";
			}
			
		}else echo 'not';
?>
		<script type="text/javascript">
		var ah = document.getElementById('anihelper1');
		// function ani1step(n){
		// 	ah.className = 'step'+n;
		// }

		// aniStart = function(){
		// 	ani1step(2);
		// 	setTimeout(function(){
		// 		ani1step(3)
		// 	},5000);
			
		// }

		// window.onload = aniStart;
		(function($){
	$.extend($.fn,{
		fadeLoop :function(options){

			options=$.extend({
				duration : 2500,
				delay : 2000,
				startIndex : -1,
				fadeFirstImage : true
			},options);

			var nextPic,
				pics    =this,
				indx    =options.startIndex,
				plen    =this.length,
				fadeIn  ={opacity:1},
				fadeOut ={opacity:0},
				ease = !!window.Zepto ? 'ease-in-out' : 'swing';

			pics.css(fadeOut);
			options.fadeFirstImage || pics.eq(0).css(fadeIn);

			(nextPic=function(){
				pics.eq(indx).animate(fadeOut,options.duration,ease);
				indx=indx<plen-1?indx+1:0;
				pics.eq(indx).animate(fadeIn,options.duration,ease,function(){
					setTimeout(nextPic,options.delay);
				});
			})();
		}
	});
})($)

$(function(){
	//$('.rightext > div.rt-img').fadeLoop(1000);
	$('div.cityimg').fadeLoop(1500);
});
	</script>
<?php
		echo"<div class='bg-pattern'>";
			$args=array(
				'theme_location'  => 'firstMenu',
				'container'       => 'div', 
				'container_class' => 'firsmenu'
			);
			wp_nav_menu($args);
		echo"</div>";
		
		?>
</div>