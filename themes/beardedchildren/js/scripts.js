jQuery(document).ready(function($) {

	$('.home-tabs').on('click.beard', function(e) {

		$(this).siblings().removeClass('active-home-tab');
		$(this).siblings().addClass('inactive-home-tab');
		$(this).removeClass('inactive-home-tab');
		$(this).addClass('active-home-tab');
		$(this).siblings().children().find('.tab-container').css('backgroundPosition', 0);
		$(this).children().find('.tab-container').css('backgroundPosition', -65);

	});

	// TOOLTIP

	$('a[rel=tooltip]').mouseover(function(e) {

		// Get the title
		var tip = $(this).attr('title');

		// Remove the title for take away the default browser tooltip
		$(this).attr('title', '');

		// Append the div to the element
		$(this).parent().parent().append('<div id="my-tooltip">' + tip + '</div>');
		// Set X and Y of tooltip
		$('#tooltip').css('top', e.pageY + 10);
        $('#tooltip').css('left', e.pageX + 10);

	}).mousemove(function(e) {

        // Fancy hover effect
        $('#my-tooltip').css('top', e.pageY + 10);
        $('#my-tooltip').css('left', e.pageX + 10);

    }).mouseout(function() {

		//Put back the title attribute's value
        $(this).attr('title',$('#my-tooltip').html());

        //Remove the appended tooltip template
        $(this).parent().parent().children('div#my-tooltip').remove();

	});

	// MORE BUTTON

	$('.tabs').on("mouseleave", function(e) {

		$('.more-box-top').animate({marginTop: '-64px'}, 200);

	});

	$('.tabs').on("mouseenter", function(e) {

		$('.more-box-top').animate({marginTop: '-25px'}, 200);

	});

});