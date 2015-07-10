jQuery(document).ready(function($){

	/* Initialize foundation */
	$(document).foundation();

	/* Initialize justifiedGallery */
	/**
	$("#image-container").justifiedGallery({
		rowHeight : 200,
		lastRow : 'justify',
		captions : false,
		margins : 3,
		border : 0,
		waitThumbnailsLoad : false
	});
	*/

	// Animated scroll on hash linking

	var $root = $('html, body');
	// Get the height of the header
	var headerHeight = $("header.mainheader").height();

	// Attach the click event
	if ($('a.more').length) {
		$('a.more').click(function(e) {
		    e.preventDefault();

		    var target = $(this).attr("href"); //Get the target
		    var scrollToPosition = $(target).offset().top - headerHeight;

		    $root.animate({ scrollTop: scrollToPosition }, 500, function(){
		        window.location.hash = "" + target;
		        // This hash change will jump the page to the top of the div with the same id
		        // so we need to force the page to back to the end of the animation
		        $root.animate({ scrollTop: scrollToPosition }, 0);
		    });
		});
	}



	// PARRALAX
	// Cache the Window object
	/* global $window: true */
	$window = $(window);

	$('section[data-type="background"]').each(function(){
		var $bgobj = $(this); // assigning the object

		$(window).scroll(function() {

			// Scroll the background at var speed
			// the yPos is a negative value because we're scrolling it UP!
			var yPos = -($window.scrollTop() / $bgobj.data('speed'));

			// Put together our final background position
			var coords = '50% '+ yPos + 'px';

			// Move the background
			$bgobj.css({ backgroundPosition: coords });

		}); // window scroll Ends

	});


	//CSS CHANGE ON SCROLL POSITION
	function scroll_style() {
	   var window_top = $(window).scrollTop();
	   var div_top = $('#profile').offset().top + 30 - headerHeight;

	   if (window_top > div_top){
		  $('header').css({"box-shadow":"1px 1px 10px #aaaaaa"});
		  $('header a').css({"line-height":"60px"});
	   } else {
		  $('header').css({"box-shadow":"none"});
		  $('header a').css({"line-height":"90px"});
	   }
	}

	//On start scroll
	if ($('#profile').length !== false) {
		$(window).scroll(function(){
			scroll_style();
		});
	} else {
		$(window).scroll(function() {
	    	if( $(this).scrollTop() >= 30 ) {
	    		$('header').css({"box-shadow":"1px 1px 10px #aaaaaa"});
		    	$('header a').css({"line-height":"60px"});
	    	} else {
				$('header').css({"box-shadow":"none"});
				$('header a').css({"line-height":"90px"});
			}
		});
	}

});
