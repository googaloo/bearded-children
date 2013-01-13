/* 
 * JS file for the Bearded Children Slider
 */

jQuery(document).ready(function($) {
	
	// Set the Current Slide
	var currentSlide = 1;
	// Count how many slides exist
	var numSlides = $('.slides-list > li').length;
	// Grab HTML for all slides
	var slidesHTML = $('.slides-list').html();	
	
	// Timer for when slide is not engaged

	// Handle Navigation Buttons
	// Handle Previous Button
	$('.bc-slider-nav-prev').click( function() {

		// Handle creating and prepending slides before current for infinite scrolling
		// through slides
		if(currentSlide == 1) {
			currentSlide = numSlides;
			// reset the slides to appear before current slide
			$('.slides-list').prepend(slidesHTML);
			// reset the position of the current slide
			var currentPos = -890 * numSlides;

			$('.slides-list').css("left", currentPos+'px');
			
			$('ul.slides-list').animate({
			left: '+=890' },
			500
			);

		} else {
			currentSlide--;
			$('ul.slides-list').animate({
			left: '+=890' },
			500
			);
		}
		

	});
	
	// Handle Next Button
	$('.bc-slider-nav-next').click( function() {
		
		$('ul.slides-list').animate({
			left: '-=890' },
			500
		);

	});

});
