$(function(){

	var openModal=function(url){
		var opciones="toolbar=no,location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=yes, width=508, height=365, top=100, left=230"; 
		window.open(url,"",opciones); 
	} 

	
	
	$(".radio-online").click(function( event ){
		event.preventDefault();	
		openModal('http://alsolnet.com/stream/radiogeo');
	});
	
	
		
	

    $('.modal-trigger').leanModal();
	 $('.datepicker').pickadate({
		min: new Date(1901,3,20),
		max: new Date(2015,10,30),
		monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
		weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
		today: 'hoy',
		clear: 'limpiar',
		formatSubmit: 'dd/mm/yyyy',
		close: 'cerrar',
		selectMonths: true, // Creates a dropdown to control month
		selectYears: 100 // Creates a dropdown of 15 years to control year
  });
        
		
    var window_width = $(window).width();

    // convert rgb to hex value string
    function rgb2hex(rgb) {
      if (/^#[0-9A-F]{6}$/i.test(rgb)) { return rgb; }

      rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);

      if (rgb === null) { return "N/A"; }

      function hex(x) {
          return ("0" + parseInt(x).toString(16)).slice(-2);
      }

      return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
    }

    $('.dynamic-color .col').each(function () {
      $(this).children().each(function () {
        var color = $(this).css('background-color'),
            classes = $(this).attr('class');
        $(this).html(rgb2hex(color) + " " + classes);
        if (classes.indexOf("darken") >= 0 || $(this).hasClass('black')) {
          $(this).css('color', 'rgba(255,255,255,.9');
        }
      });
    });

				

    // Floating-Fixed table of contents

    if ($('nav').length) {
        var navh = $('#nav-ppal').height()+$('.container-tit').height();
        console.log(navh);
        var bot = $('body').height() - $('.page-footer').height() - $(window).height();
		var bodyh = $('body').height();
		var pagefooterh = $('.page-footer').height();
		var windowh = $(window).height();
		
		console.log("bot " + bot);
	    console.log("body " +bodyh);
		console.log("pagefooter " +pagefooterh);
		console.log("window " + windowh);
		
      $('.toc-wrapper').pushpin({
	  /*top: $('nav').height(),*/
      top: navh,
	  bottom: bot			  
	  });	  
	  
	  
    }
    else if ($('#index-banner').length) {
      $('.toc-wrapper').pushpin({ top: $('#index-banner').height() });
	  
    }
    else {
      $('.toc-wrapper').pushpin({ top: 0 });	  
        
    }



    // BuySellAds Detection
    var $bsa = $(".buysellads"),
        $timesToCheck = 3;
    function checkForChanges() {
        if (!$bsa.find('#carbonads').length) {
          $timesToCheck -= 1;
          if ($timesToCheck >= 0) {
            setTimeout(checkForChanges, 500);
          }
          else {
            var donateAd = $('<div id="carbonads"><span><a class="carbon-text" href="#!" onclick="document.getElementById(\'paypal-donate\').submit();"><img src="img/cambio.jpg" /> Help support us by turning off adblock. If you still prefer to keep adblock on for this page but still want to support us, feel free to donate. Any little bit helps.</a></form></span></div>');

            $bsa.append(donateAd);
          }
        }

    }
    checkForChanges();


    // Github Latest Commit
    if ($('.github-commit').length) { // Checks if widget div exists (Index only)
      $.ajax({
        url: "https://api.github.com/repos/dogfalo/materialize/commits/master",
        dataType: "json",
        success: function (data) {
          var sha = data.sha,
              date = jQuery.timeago(data.commit.author.date);
          if (window_width < 1120) {
            sha = sha.substring(0,7);
          }
          $('.github-commit').find('.date').html(date);
          $('.github-commit').find('.sha').html(sha).attr('href', data.html_url);
        }
      });
    }

    // Toggle Flow Text
    var toggleFlowTextButton = $('#flow-toggle');
    toggleFlowTextButton.click( function(){
      $('#flow-text-demo').children('p').each(function(){
          $(this).toggleClass('flow-text');
        });
    });

//    Toggle Containers on page
    var toggleContainersButton = $('#container-toggle-button');
    toggleContainersButton.click(function(){
      $('body .browser-window .container, .had-container').each(function(){
        $(this).toggleClass('had-container');
        $(this).toggleClass('container');
        if ($(this).hasClass('container')) {
          toggleContainersButton.text("Turn off Containers");
        }
        else {
          toggleContainersButton.text("Turn on Containers");
        }
      });
    });

    // Detect touch screen and enable scrollbar if necessary
    function is_touch_device() {
      try {
        document.createEvent("TouchEvent");
        return true;
      } catch (e) {
        return false;
      }
    }
    if (is_touch_device()) {
      $('#nav-mobile').css({ overflow: 'auto'});
    }

    // Set checkbox on forms.html to indeterminate
    var indeterminateCheckbox = document.getElementById('indeterminate-checkbox');
    if (indeterminateCheckbox !== null)
      indeterminateCheckbox.indeterminate = true;


	 // vertical scroll
/*
	 $('a.scroll').click(function(e){
		e.preventDefault();	
		var href = $(this).attr('href');
		var file, n;

		file = window.location.pathname;
		n = file.lastIndexOf('/');
		file = file.substring(n + 1);
		if (file!="index2.php"){			
			 $('html, body').scrollTop(0).show();
			$('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top-70}, 500);
		}
	});
	
	*/
	
	
	
	
	
	
	
	
	
	


	 
	  
    // Plugin initialization
    $('.slider').slider({
		height:460,
		full_width: true
	});
	
	$('.materialboxed').materialbox();
      
  $('.button-collapse').sideNav({
      menuWidth: 240, // Default is 240
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    }
  );

	

	
	/*
	$('.parallax').parallax();
    $('.modal-trigger').leanModal();
    $('.scrollspy').scrollSpy();
    $('.datepicker').pickadate({selectYears: 20});
    $('select').not('.disabled').material_select();
	*/

	
	/*
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
  */


(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));

});