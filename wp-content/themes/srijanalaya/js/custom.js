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

var current = 'item0';
var firstID = $('.mid-nav-inner ul').children("li").first().attr('id');
var lastID = $('.mid-nav-inner ul').children("li").last().attr('id');
$('.marquee-right').click(function() {
  if(current != lastID) {
    $('#' + current).animate({
      opacity: 0.25,
      width: "toggle"
    }, 200, function() {
      $('#' + current).removeClass('first');
      current = $('#' + current).next().attr('id');
      $('#' + current).addClass('first'); 
    });
  }
});
$('.marquee-left').click(function() {
  if(current != firstID) {
    $('#' + current).removeClass('first');
    current = $('#' + current).prev().attr('id');
    $('#' + current).animate({
      opacity: 1,
      width: "toggle"
    }, 200, function() {
      $('#' + current).addClass('first'); 
    });
  }
});

})(jQuery);
function change_language(x,y) {
  var n = y.search("/srijanalaya/ne"); 
  if(n<0)
  {
  //alert('ne not found');
  if(x=='ne')
  {
    link=y.replace('/srijanalaya/','/srijanalaya/ne');
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
//alert(link);
window.location=link;
}
var prev_class = '';
function filter_timeline(x) {
  if(x == prev_class){
    return;
  }
  else {
    prev_class = x;

    jQuery('.cd-timeline-block').hide();
    x="."+x;
    jQuery(x).show();
    var sort=0;
    jQuery('#cd-timeline').find('.cd-timeline-block').filter(':visible').each(function (){
     if(sort==0){


     // alert(jQuery(this).attr('class'))
     if(jQuery(this).find('.cd-timeline-content').hasClass('project-wrapper-left-wrap')){
      jQuery(this).find('cd-timeline-content').removeClass('project-wrapper-left-wrap').addClass('project-wrapper-right-wrap');
    }
    if(jQuery(this).find('.project-wrapper').hasClass('project-wrapper-left')){
      jQuery(this).find('.project-wrapper').removeClass('project-wrapper-left').addClass('project-wrapper-right');
    }
    jQuery(this).find('.cd-timeline-content').css({'float':'right','margin-top':'0px'});
    sort=1;
  }
  else {
   if(jQuery(this).find('.cd-timeline-content').hasClass('project-wrapper-right-wrap')){
    jQuery(this).find('cd-timeline-content').removeClass('project-wrapper-right-wrap').addClass('project-wrapper-left-wrap');
  }
  if(jQuery(this).find('.project-wrapper').hasClass('project-wrapper-right')){
    jQuery(this).find('.project-wrapper').removeClass('project-wrapper-right').addClass('project-wrapper-left');
  }
  jQuery(this).find('.cd-timeline-content').css({'float':'left','margin-top':'0px'});
  sort=0;
}
    //alert(sort);
  });
}
}




