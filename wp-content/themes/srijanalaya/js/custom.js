

(function($) {

$(document).ready(function($){

	 $('#fullpage').fullpage();
	 //$('#section1').function({paddingTop:0px;});
   
//owl sync
var $owl1 = $("#slider-1"),
        $owl2 = $("#slider-2"),
        flag = false,
        duration = 300;

      $owl1
        .owlCarousel({
          items: 1,
          margin: 0,
              autoplay:true,
    autoplayTimeout:3000,
    loop:true
        })
        .on('changed.owl.carousel', function (e) {
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
          animateOut: 'fadeOut',
        })
        .on('changed.owl.carousel', function (e) {
          if (!flag) {
            flag = true;    
            $owl1.trigger('to.owl.carousel', [e.page.index, duration, true]);
            flag = false;
          }
        });
//====owl sync end


 	$(".dropdown").hover(            
            function() {
                //$('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
               // $('b', this).toggleClass("caret caret-up");                
            },
            function() {
               // $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                //$('b', this).toggleClass("caret caret-up");                
            });

							
	$("#right-col-first").hover(
				function() {
					$('.overlay11').css({ 'position': 'absolute','top': '0px','left': '0px','height': '100%','width': '100%','background-color': 'black','opacity': '0.5'});
						   },
				function() {
					$('.overlay11').css({ 'position': 'absolute','top': '0px','left': '0px','height': '100%','width': '100%','background-color': '','opacity': ''});		   


		});
  $("#left-col-first").hover(
        function() {
          $(this).css({'background-image':'url(/srijanalaya/wp-content/themes/srijanalaya/images/bgs1_flip.svg)'});  
               },
        function() {
          $(this).css({'background-image':'url(/srijanalaya/wp-content/themes/srijanalaya/images/bgs1.svg)'});       


    });
});
})(jQuery);


