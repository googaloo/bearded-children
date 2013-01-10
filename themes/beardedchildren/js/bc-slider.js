/* 
 * JS file for the Bearded Children Slider
 */

jQuery(document).ready(function($) {
	
	$('.bc-slider-nav-prev').click( function() {
		
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
//
//
//function bcChangeSlide(bam) {
//
//	
//	$('ul.slides-list').animate({
//		left: '-890' },
//		5000
//	);
//		alert(bam);
//
//}
