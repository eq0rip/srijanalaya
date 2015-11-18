(function($) {

	$(document).ready(function(){
		var $owl1 = $("#slider-1"),
		$owl2 = $("#slider-2"),
		flag = false,
		duration = 300;
		var bar=2;
		var car ='#bar1';
		$('#bar1').css({'width':'100%','height':'100%'});
		$owl1
		.owlCarousel({
			items: 1,
			margin: 0,
			//autoplay:true,
			autoplayTimeout:2000,
			animateIn:'fadeIn',
  //animateIn: 'fadeIn',
  loop:true
})
		.on('changed.owl.carousel', function (e) {
			$(car).css({'width':'0px','height':'0px'});
			if(bar==4)
				bar=1;
			car='#bar'+bar;
			$(car).css({'width':'100%','height':'100%'});
			bar++;
			if (!flag) {
				flag = true;

				$owl2.trigger('to.owl.carousel', [e.page.index, duration, true]);

				flag = false;
			}
		});

		$owl2
		.owlCarousel({
			margin: 0,
			items: 1,
			loop:true,
			animateOut:'slideOutLeft',
			animateIn: 'slideInRight',
		})
		.on('changed.owl.carousel', function (e) {
			if (!flag) {
				flag = true;    
				$owl1.trigger('to.owl.carousel', [e.page.index, duration, true]);
				flag = false;
			}
		});
//====owl sync end

});
})(jQuery);