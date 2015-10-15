

(function($) {
  $(window).load(function(){
    $('.loader').fadeOut(500);
  });
  $(document).ready(function($){


    $(document).on('click', '.yamm .dropdown-menu', function(e) {
      e.stopPropagation()
    });

//owl sync
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
  autoplay:true,
  autoplayTimeout:3000,
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

//nav icons
$('.nav-icons').hover(function() {
  $('.nav-links').stop(true,true).slideDown(100);
}, function() {
  $('.nav-links').stop(true,true).slideUp(100);
}
);


$(".dropdown").hover(            
  function() {
    if($(window).width() > 769)
      $(this).children('ul').slideDown(200);       
  },
  function() {
    if($(window).width() > 769)
      $(this).children('ul').fadeOut(100);               
  });


$("#right-col-first").hover(
  function() {
   $('.overlay11').css({ 'position': 'absolute','top': '0px','left': '0px','height': '100%','width': '100%','background-color': 'black','opacity': '0.5'});
 },
 function() {
   $('.overlay11').css({ 'position': 'absolute','top': '0px','left': '0px','height': '100%','width': '100%','background-color': '','opacity': ''});		   


 });

});

//Homepage hover 3rd section
$('.even, .odd').hover(function() {
  $(this).children('.img-wrap').fadeIn(200);
},
function() {
  $(this).children('.img-wrap').fadeOut(100);
});



})(jQuery);


