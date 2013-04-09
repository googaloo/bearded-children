jQuery(document).ready(function($) {

	$('.home-tabs').on('click.beard', function(e) {

		$(this).siblings().removeClass('active-home-tab');
		$(this).addClass('active-home-tab');
		$(this).siblings().children().find('.tab-container').css('backgroundPosition', 0);
		$(this).children().find('.tab-container').css('backgroundPosition', -65);

	});

});