(function($, Materialize){

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
       
        height:320
    });
    
    //$('slider').slider({height:600});
      //$('#element').pluginName({'foo': 'bar'});
     
})(jQuery, Materialize);