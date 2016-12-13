jQuery(window).load(function(){

	var speed = 7000; 

	var slidespeed = 600;

	jQuery('#flexslider1 .flexslider').flexslider({

		animation: "fade", // fade
		slideshow: true,
		slideshowSpeed:speed,
		animationSpeed:slidespeed,
		prevText:"<em class='fa fa-long-arrow-up'></em>",
		nextText:"<em class='fa fa-long-arrow-down'></em>",
		start: function(slider) {
			jQuery('.flexslider').fadeIn();
		}

	});


//jQuery(window).load(function(){
	 jQuery('.our-sponcers .flexslider').flexslider({
		animation: "slide",
	 	itemWidth: 153,
		itemMargin: 5,
		start: function(slider) {
	  	jQuery('body').removeClass('loading');

	}
  });



  // $('#colorselector').change(function(){
  //   $('.colors').hide();
  //   $('#' + $(this).val()).show();
  // });


//   });

});

$(function() {
  $('#colorselector').change(function(){
    $('.colors').hide();
    $('#' + $(this).val()).show();
  });
});