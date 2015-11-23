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
$('#slider-3').owlCarousel({
	margin:0,
	items:1,
	dots:true,
	nav:false,
	loop:true
});//slider3 end
$('#slider-4').owlCarousel({
	margin:0,
	items:1,
	dots:true,
	loop:true
});// slider4 end
$('#slider-5').owlCarousel({
	margin:0,
	items:1,
	dots:true,
	loop:true
});// slider5 end
// $('.video-icon').click(function (){
// 	$(this).fadeOut(function(){
// 		$('#featured_video_wrapper iframe').show();
// 		$('#featured_video_wrapper video-wrap').show();
// 	});
	// });

});// ready end
})(jQuery);
function change_language(x,y) {
	alert(x);
  var n = y.search("/srijanalaya/ne"); 
  if(n<0)
  {
  //alert('ne not found');
  if(x=='ne')
  {
    link=y.replace('/srijanalaya/','/srijanalaya/ne/');
  }
  else
  {
    link=y;
  }
}
else {
 // alert('ne found');
 if(x=='ne')
 {
  link=y;
}
else
{
  link=y.replace('/ne/','/en/');
}
}

window.location=link;
}
//var prev_class = '';

