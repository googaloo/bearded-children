/* 
 * JS file for the Bearded Children Slider
 */

jQuery(document).ready(function($) {
	
	// Set the Current Slide
	var currentSlide = 1;
	// Count how many slides exist
	var numSlides = $('.slides-list > li').length;
	// Grab first slide HTML
	var firstSlide = '<li>'+$('.slides-list li').filter(':first').html()+'</li>';
	// Grab last slide HTML
	var lastSlide = '<li>'+$('.slides-list li').filter(':last').html()+'</li>';
	
	// Set up duplicates on startup
	// After Last
	$('.slides-list').append(firstSlide);
	// Before First
	$('.slides-list').prepend(lastSlide);
	
	// Timer for when slide is not engaged
	
	// Handle Navigation Buttons
	$('.bc-slider-nav-prev').click( function() {
		
		if(currentSlide == 1) {
			
		}
		
		$('ul.slides-list').animate({
			left: '+=890' },
			500
		);

	});
	
	$('.bc-slider-nav-next').click( function() {
		
		$('ul.slides-list').animate({
			left: '-=890' },
			500
		);

	});

});
