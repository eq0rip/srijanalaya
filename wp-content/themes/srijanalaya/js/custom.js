

(function($) {

  $(document).ready(function($){


    $(document).on('click', '.yamm .dropdown-menu', function(e) {
      e.stopPropagation()
    })
    // $('.slider-caption').height($(window).height() - 125);
    $('#fullpage').fullpage({
      scrollBar:true,
      fitToSection:false
    });
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
  autoplay:false,
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
    if($(window).width() > 769)
      $(this).children('ul').slideDown(200);
               // $('b', this).toggleClass("caret caret-up");                
             },
             function() {
              if($(window).width() > 769)
                $(this).children('ul').fadeOut(100);
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

//Homepage hover 3rd section
$('.even, .odd').hover(function() {
  $('.transparent').fadeIn(500);
  $(this).children('.img-wrap').show();
},
function() {
  $('.transparent').fadeOut(100);
  $(this).children('.img-wrap').hide();
});

$('.odd').hover(function() {
  $(this).parent().children('.even').width('40.001%');
},
function() {
  $(this).parent().children('.even').attr("style", "");;
});


})(jQuery);


