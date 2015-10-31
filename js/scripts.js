(function($, Materialize){

	$('a.scroll').click(function(e){
		e.preventDefault();
		$('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 1000);
	});
	
	$(".button-collapse").sideNav();

	$('#ddwn-btn').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
    //  belowOrigin: true, // Displays dropdown below the button
   //   alignment: 'right' // Displays dropdown with edge aligned to the left of button
    }
  );
    
     $('.materialboxed').materialbox();
    
    $('.slider').slider({       
        height:460
    });
    
    //$('slider').slider({height:600});
      //$('#element').pluginName({'foo': 'bar'});
   
    
})(jQuery, Materialize);

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>