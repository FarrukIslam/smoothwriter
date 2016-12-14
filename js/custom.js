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

//facebook group widget
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));


});

