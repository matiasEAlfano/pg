/*(function($){
	$('a.scroll').click(function(e){
		e.preventDefault();	
		var href = $(this).attr('href');		
		$('html, body').stop().animate({scrollTop: $(href).offset().top-30}, 500);		
	});
})(jQuery)
*/
$('html').css({display: 'none'});
(function($){
	var smoothScrollTo = function(anchor) {
				var duration = 300; //time (milliseconds) it takes to reach anchor point
				var targetY = $(anchor).offset().top+100;
				$("html, body").animate({
					"scrollTop" : targetY
				}, duration, 'easeInOutCubic');
			}
	var displayit = function () {
				var hashURL = location.hash;
				if(hashURL != '' && hashURL.length > 1){
					$('html, body').scrollTop(0);
					$('html').css({display: 'block'});
					smoothScrollTo(hashURL);
				} else {
					$('html').css({display: 'block'});
				}
	}
	

	$('a[href^="#"]').bind('click', function(event){
		var anchor = $(this).attr('href');
		smoothScrollTo(anchor);
		return false;
	});
	
	displayit();
	
})(jQuery)