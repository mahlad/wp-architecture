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

				pics.eq(indx).css({zindex:-3},400).animate({
					'z-index':'-3',
					opacity:0,
					//fadeOut
					},options.duration,ease);
				indx=indx<plen-1?indx+1:0;	
				pics.eq(indx).animate({
					'z-index':'1',
					opacity:1,
//					fadeIn,
					},options.duration,ease,function(){
						setTimeout(nextPic,options.delay);
				});
			})();
		}
	});
})($)