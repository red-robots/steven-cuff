// JavaScript Document


jQuery(document).ready(function ($) {
	
		// Colorbox. 
	//The first variable is the click class the linked 
	// element is triggering. Just make sure it matches.
	
	$(".group1").colorbox({rel:'group1'});
	
	$(".iframe").colorbox({iframe:true, width:"85%", height:"95%", initialWidth:"100", initialHeight:"100"});
		
//   Isotope with images loaded
	// __________________________________________
	
	var $container = $('#container').imagesLoaded( function() {
	$container.isotope({
	// options
	itemSelector: '.item',
		 masonry: {
			gutter: 15
			}
		});
	}); // end Isotope
	
	
	//   Flexsliders
	// __________________________________________
	
  
  // flexslider 2  
  $('.thumbslider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: true,
	directionNav: true
  });
  
  $('.flexslider').flexslider({
    animation: "fade",
    animationLoop: true,
    itemWidth: 1000,
	itemHeight: 575,
    itemMargin: 0,
    minItems: 1,
    maxItems: 1,
	directionNav: false
  });
// End Flexsliders


 


	
});// END ########  END documet ready function

