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

	////////////////////////////////////////////////////////////////
	// Timer for when slide is not engaged ///
	////////////////////////////////////////////////////////////////

	var bcSliderTimer = setInterval(function(){

			if(currentSlide == numSlides) {
				currentSlide = 1;
				// Append copy of slides to end of slides list
				$('.slides-list').append(slidesHTML);
				// Reset position of the current slide
				$('ul.slides-list').animate({
				left: '-=890' },
				500,
				function() { // Remove extra / duplicate slides
					var numSlidesIndex = numSlides -1;
					$('.slides-list li:lt('+numSlides+')').remove();
					$('.slides-list').css("left", '0px');
				}
				);

			} else {

				$('ul.slides-list').animate({
					left: '-=890' },
					500
				);
				currentSlide++;
			}

	}, 5000);


	//////////////////////////////////////////////////////////////////
	// Handle Navigation Buttons ////////////////////
	// ///////////////////////////////////////////////////////////////

	// Handle Previous Button
	$('.bc-slider-nav-prev').click( function() {

		// Stop timer
		clearInterval(bcSliderTimer);

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
			500,
			function() { // Remove extra / duplicate slides
				var numSlidesIndex = numSlides -1;
				$('.slides-list li:gt('+numSlidesIndex+')').remove();
			}
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
	// Append the slides on the end for infinite scrolling through slides
	$('.bc-slider-nav-next').click( function() {

		// Stop timer
		clearInterval(bcSliderTimer);

		if(currentSlide == numSlides) {
			currentSlide = 1;
			// Append copy of slides to end of slides list
			$('.slides-list').append(slidesHTML);
			// Reset position of the current slide
			$('ul.slides-list').animate({
			left: '-=890' },
			500,
			function() { // Remove extra / duplicate slides
				var numSlidesIndex = numSlides -1;
				$('.slides-list li:lt('+numSlides+')').remove();
				$('.slides-list').css("left", '0px');
			}
			);

		} else {

			$('ul.slides-list').animate({
				left: '-=890' },
				500
			);
			currentSlide++;
		}

	});

	/////////////////////////////////////////////////////
	// Handle circle buttons ////////////////
	/////////////////////////////////////////////////////

	$('.nav-circle').click( function() {

		// Stop timer
		clearInterval(bcSliderTimer);

		// Grab the slide number of the button we clicked
		var toGoSlide = $(this).data('seq');

		$('ul.slides-list').animate({
			left: (toGoSlide-1) *-890 },
			500
		);
		currentSlide = toGoSlide;

	});

});