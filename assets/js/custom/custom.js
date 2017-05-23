/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

jQuery(document).ready(function ($) {
	
	/*
	*
	*	Current Page Active
	*
	------------------------------------*/
	$("[href]").each(function() {
    if (this.href == window.location.href) {
        $(this).addClass("active");
        }
	});

	/*
	*
	*	Responsive iFrames
	*
	------------------------------------*/
	var $all_oembed_videos = $("iframe[src*='youtube']");
	
	$all_oembed_videos.each(function() {
	
		$(this).removeAttr('height').removeAttr('width').wrap( "<div class='embed-container'></div>" );
 	
 	});
	
	/*
	*
	*	Flexslider
	*
	------------------------------------*/
	$('.flexslider').flexslider({
			animation: "fade",
			controlNav: true,
			directionNav: true,
			slideshow: false,
			// smoothHeight: true,
		     start: function(slider) { // Fires when the slider loads the first slide
				var slide_count = slider.count - 1;

			$(slider)
			.find('img.lazy:eq(0)')
			.each(function() {
			  var src = $(this).attr('data-src');
			  $(this).attr('src', src).removeAttr('data-src');
			});
			},
			before: function(slider) { // Fires asynchronously with each slider animation
			var slides     = slider.slides,
			  index      = slider.animatingTo,
			  $slide     = $(slides[index]),
			  $img       = $slide.find('img[data-src]'),
			  current    = index,
			  nxt_slide  = current + 1,
			  prev_slide = current - 1;

			$slide
			.parent()
			.find('img.lazy:eq(' + current + '), img.lazy:eq(' + prev_slide + '), img.lazy:eq(' + nxt_slide + ')')
			.each(function() {
			  var src = $(this).attr('data-src');
			  $(this).attr('src', src).removeAttr('data-src');
			});
			}
		}); // end register flexslider
	
	/*
	*
	*	Colorbox
	*
	------------------------------------*/
	$('a.gallery').colorbox({
		rel:'gal',
		width: '80%', 
		height: '80%'
	});

	$("a.inline").colorbox({
		inline:true, 
		width:"80%"})
	;
	
	/*
	*
	*	Isotope with Images Loaded
	*
	------------------------------------*/
	var $container = $('#container').imagesLoaded( function() {
  	$container.isotope({
    // options
	 itemSelector: '.item',
		  masonry: {
			gutter: 15
			}
 		 });
	});

	/*
	*
	*	Smooth Scroll to Anchor
	*
	------------------------------------*/
	 $('a').click(function(){
	    $('html, body').animate({
	        scrollTop: $('[name="' + $.attr(this, 'href').substr(1) + '"]').offset().top
	    }, 500);
	    return false;
	});

	
	
	
	/*
	*
	*	Equal Heights Divs
	*
	------------------------------------*/
	$('.js-blocks').matchHeight();

	/*
	*
	*	Wow Animation
	*
	------------------------------------*/
	new WOW().init();

});// END #####################################    END