(function($) {
  $(window).load(function(){
    $('.loader').fadeOut(500);
    
  });
  $(document).ready(function($){
    

    $('[data-toggle="tooltip"]').tooltip();   
    


    $('#left-col-first').height($(window).height() - 125);
    $('#right-col-first').height($(window).height() - 125);

    $('.video-wrap').click(function() {
      $('.bottom-container2 iframe').show();
      $(this).hide();
    });

    $('.back-to-top').click(function() {
      $('html,body').animate({
       scrollTop: $('body').offset().top
     }, 1500);
    }
    );

    $('.go-down').click(function() {
      $('html,body').animate({
       scrollTop: $('#section2').offset().top
     }, 1000);
    }
    );

    if(!$('#shopwrap')) {
      var last = jQuery('.easy-wp-page-nav li').last().find('a').attr('href');
      if(last != undefined || last != null) {
        last = last.substring(last.lastIndexOf('/page/') + 6, last.lastIndexOf('/'));
        jQuery('.page-content').infinitescroll({
          navSelector  : ".navigation",            
                   // selector for the paged navigation (it will be hidden)
                   nextSelector : ".next",    
                   // selector for the NEXT link (to page 2)
                   itemSelector : ".content",      
                   // selector for all items you'll retrieve
                   loadingText  : "Loading more...", 
                   donetext     : "I think this is the end... :/" ,
                   animate      : true,      
                   bufferPx     : 40,
                   padding    : 0,
                   maxPage: last
                 });
      }

    }

    $('.drop').click(function() {
      if($('.navbar').hasClass( "nav-bar-fixed" )) {
        $('.navbar').removeClass('nav-bar-fixed');
        $(this).css({'top':'0'});
        $('.fa-caret-up').hide();
        $('.fa-caret-down').show();
      }
      else {
        $('.navbar').addClass('nav-bar-fixed');
        $('.navbar').css({'z-index':'11'});
        $(this).css({'top':'35px'});
        $('.fa-caret-up').show();
        $('.fa-caret-down').hide();
      }
    }
    );
    $(window).scroll(function() {
     $('.navbar').removeClass('nav-bar-fixed');
     $('.drop').css({'top':'0'});
     $('.fa-caret-up').hide();
     $('.fa-caret-down').show();
   });
    $('.social-expand-buttons').hover(function() {
      $('.social-expand-buttons .share-buttons').animate(1000).css('display','inline');
    },
    function() {
      $('.social-expand-buttons .share-buttons').animate(1000).css('display','none');
    });
    $('.lang-select').transformSelect({
      dropDownClass: "transformSelect languageSelector",
    });
    $('.newsletter').click(function() {
      $('.newsletter-popup').animate(1000).css('display','flex');
    });
    $('.close-newsletter').click(function() {
      $('.newsletter-popup').fadeOut();
    });
      //  $('.dropdate').dropdate({
      //   dateFormat:'mm/dd/yyyy'
      // });
var yesterdayDate = new Date();  

$( ".datepicker11" ).datepicker();
$(".datepicker11").datepicker("setDate",yesterdayDate);
$( ".datepicker11" ).datepicker("option", "dateFormat", 'yy/mm/dd');
var today=new Date();
var tempdate=today.getDate();
tempdate--;
today.setDate(tempdate);
$( ".datepicker12" ).datepicker();
$(".datepicker12").datepicker("setDate",today);
$( ".datepicker12" ).datepicker("option", "dateFormat", 'yy/mm/dd');



$(document).on('click', '.yamm .dropdown-menu', function(e) {
  e.stopPropagation()
});

      //category dropdown timeline page change
      var temp=1;
      $('#custom_filters select:first-child option').each(function (){

        if(temp==1){
          $(this).text('By Type');
          $(this).val('By Type');
          temp=2;
        }
        else{
          $(this).val($(this).text());
        }
      });

      $('.transformSelect li').addClass('open');
      $('.transformSelect').hover(function() {
        if($(this).hasClass('transformSelect3')){return;}
        $(this).children('li').addClass('open');
        $(this).children('li').children('.transformSelectDropdown').slideDown('fast');
        $(this).children('li').children('.transformSelectDropdown').css('zIndex','99');
      },
      function() {
        if($(this).hasClass('transformSelect3')){return;}

        $(this).children('li').children('.transformSelectDropdown').slideUp('fast');
        $(this).children('li').children('.transformSelectDropdown').css('zIndex','1');
        $(this).children('li').removeClass('open');

        //alert('ssss');
      });
      $('.subscribe-inner').click(function() {
        $('.side-transparent-block').css("display", "flex").hide().fadeIn(300);
      });
      $('.transformSelect3').hover(function(){
        $(this).find('.transformSelectDropdown').addClass('drop-on').removeClass('drop-off');
      },
      function(){

      });

//owl sync
var $owl1 = $("#slider-1"),
$owl2 = $("#slider-2"),
flag = false,
duration = 50;
var bar=2;
var car ='#bar1';
$('#bar1').css({'width':'100%','height':'100%'});
$owl1
.owlCarousel({
  items: 1,
  margin: 0,
  autoplay:true,
  autoplayTimeout:3500,
  // animateOut:'fadeOutLeftBig',
  animateIn: 'fadeIn',

    // animateIn: 'slideInLeft',//===one
 //animateOut: 'slideOutRight',

//animateIn: 'bounceInDown',

  //animateOut:'hinge',

// animateIn:'swing',
//animateIn:'fadeIn', //==2nd
//animateIn:'flip',
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
 // animateOut:'slideOutLeft',
 // animateIn: 'slideInRight',
 animateIn: 'fadeIn',
 animateOut: 'fadeOut',

})
.on('changed.owl.carousel', function (e) {
  if (!flag) {
    flag = true;    
    $owl1.trigger('to.owl.carousel', [e.page.index, duration, true]);
    flag = false;
  }
});

//nav icons
$('.nav-icons').hover(function() {
  $('.nav-links').stop(true,true).slideDown(500);
}, function() {
  $('.nav-links').stop(true,true).slideUp(500);
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
  $(this).children('.img-wrap').fadeIn(1);
},
function() {
  $(this).children('.img-wrap').fadeOut(1);
});

var current = 'item0';
var firstID = $('.mid-nav-inner ul').children("li").first().attr('id');
var lastID = $('.mid-nav-inner ul').children("li").last().attr('id');
$('.marquee-left').click(function() {
  if(current != lastID) {
    $('#' + current).animate({
      // opacity: 0.25,
      width: "toggle"
    }, 200, function() {
      $('#' + current).removeClass('first');
      current = $('#' + current).next().attr('id');
      $('#' + current).addClass('first'); 
    });
  }
});
$('.marquee-right').click(function() {
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
var prev_ids = '';
$('a[href*=#]').on('click', function(event){     
  event.preventDefault();
  var ids = $(this).attr('href');
  if(prev_ids != ids) {
    prev_ids = ids;
    $('.subhead').fadeOut(100);
    ids = ids.substring(1);
    $('#span' + ids).fadeIn(1000);
  }
});


})(jQuery);
function change_language(x,y) {
var link=y+'?lang='+x;

window.location=link;
}
//var prev_class = '';



function add_filter(x,div,r) {

  var query='#'+div+' ul li:contains("'+x+'")';

  var choosen_tags=[];
  if((jQuery(query).length)>0)
  {
    return;
  }
  div='#'+div+' ul';
  jQuery(div).append('<li class="remove-tag">'+x+'</li>');

  var query=div+' li';
  jQuery(query).each(function () {
    var toPush=jQuery(this).text().replace("","");
    choosen_tags.push(toPush );
  });

  if(r=='1'){
    return choosen_tags;
  }
  else {
    apply_filter(choosen_tags,'.cd-timeline-block');
  }
}
function apply_filter(choosen_tags,units){
  jQuery(units).filter(':visible').hide("fade",function (){
    for(var i=0;i<choosen_tags.length;i++)
    {
      x='.'+choosen_tags[i];
      jQuery(x).show("fade",function (){
        if(units == '.cd-timeline-block') {
          filter_timeline();
        }
      });
    }

  });
  if(jQuery(units).filter(':visible').length==0){
    for(var i=0;i<choosen_tags.length;i++)
    {
      x='.'+choosen_tags[i];
      jQuery(x).show("fade",function (){
        if(units == '.cd-timeline-block') {
          filter_timeline();
        }
      });
    }
  }

}


function resource_filter(x,div,r) {
  var query='#'+div+' ul li:contains("'+x+'")';
  var choosen_tags=[];
  if((jQuery(query).length)>0)
  {
    return;
  }
  div='#'+div+' ul';
  jQuery(div).append('<li class="remove-tag">'+x+'  x</li>');
  var query=div+' li';
  jQuery(query).each(function () {
    var toPush=jQuery(this).text().replace(" x","");
    choosen_tags.push(toPush);
  });
  if(r==1){
    return choosen_tags;
  }
  else {
    apply_filter(choosen_tags,'.content');
  }
}

function filter_timeline() {
  var sort=0;
  var first = 0;

  jQuery('#cd-timeline').find('.cd-timeline-block').filter(':visible').each(function (){
   if(sort==0){
    // jQuery(this).find('.alert-icon').css({'float':'right'}, {'left':'auto'});
    if(jQuery(this).find('.cd-timeline-content').hasClass('project-wrapper-left-wrap')){
      jQuery(this).find('.cd-timeline-content').removeClass('project-wrapper-left-wrap').addClass('project-wrapper-right-wrap');
    }
    if(jQuery(this).find('.project-wrapper').hasClass('project-wrapper-left')){
      jQuery(this).find('.project-wrapper').removeClass('project-wrapper-left').addClass('project-wrapper-right');
    }
    sort=1;
    if(first == 0) {
     jQuery(this).find('.cd-timeline-content').addClass('first');
     jQuery(this).addClass('first');
     first = 1;
     //alert('added class=first to'+jQuery(this).find('h2 a').text() )
   }
   else {
    jQuery(this).find('.cd-timeline-content').css({'margin-top':'0px'});
    if(jQuery(this).find('.cd-timeline-content').hasClass('first'))
    {
      jQuery(this).find('.cd-timeline-content').removeClass('first');
      jQuery(this).removeClass('first');
    }
  }
}
else {
  // jQuery(this).find('.alert-icon').css({'left':'19px'});
  if(jQuery(this).find('.cd-timeline-content').hasClass('first'))
  {
    jQuery(this).find('.cd-timeline-content').removeClass('first');
    jQuery(this).removeClass('first');
  }
  if(jQuery(this).find('.cd-timeline-content').hasClass('project-wrapper-right-wrap')){
    jQuery(this).find('.cd-timeline-content').removeClass('project-wrapper-right-wrap').addClass('project-wrapper-left-wrap');
  }
  if(jQuery(this).find('.project-wrapper').hasClass('project-wrapper-right')){
    jQuery(this).find('.project-wrapper').removeClass('project-wrapper-right').addClass('project-wrapper-left');
  }
  sort=0;
}
});
jQuery(window).scrollTop(jQuery(window).scrollTop() + 1);
}





function apply_date_filter(x) {
 // alert(x);
 var dslack;
 var mslack
 var from_Date='';
 var to_Date=''
 var current_Date=new Date();
 var day=current_Date.getDay();
 var dd=current_Date.getDate();
 var mm=current_Date.getMonth()+1;
 var yy=current_Date.getFullYear();
 var to_Date=yy+'/'+mm+'/'+dd;

 if(x=='week'){

  dd=dd-day;
}
if(x=='Lweek'){
  dd=dd-day-7;

}
if(x=='month'){
  dd=1;
}
if(x=='Lmonth'){
  dd=1;
  mm=mm-1;
}
if(x=='year'){
  dd=1;
  mm=1;
}
from_Date=yy+'/'+mm+'/'+dd;
if(x=='custom'){
  from_Date=jQuery('#fromDate').val();
  to_Date=jQuery('#toDate').val();
  if(Date.parse(from_Date)>Date.parse(to_Date) || Date.parse(from_Date)==Date.parse(to_Date) )
  {
    alert('Invalid Date range');
    return;
  }
  if(isNaN(Date.parse(from_Date)) || isNaN(Date.parse(to_Date))){
    alert('Invalid Date');
    return;
  }

}
jQuery('#date_value_main').text(from_Date+' to '+to_Date);
//jQuery('.date_value_dropdown').hide();
jQuery('.drop-on').addClass('drop-off').removeClass('drop-on');

}
function filter_projects () {
  var error='';
  var location=jQuery('#location_value_main').val();
  var date=jQuery('#date_value_main').text().split(' to ');
  var from=date[0];
  var to=date[1];
  var category=jQuery('#custom_filters select:first-child').val();
  if(jQuery('#location_value_main').val()=='Location' && jQuery('#date_value_main').text().trim()=='By Date' && jQuery('#custom_filters select:first-child').val()=='By Type'){
    alert('all field cant be empty');
    return;
  }
  if(jQuery('#location_value_main').val()=='Location'){
   location='nepal';
 }

 if(jQuery('#date_value_main').text().trim()=='By Date'){
  from='2010/1/1';
  to=jQuery.datepicker.formatDate('yy/mm/dd', new Date());
}
if(jQuery('#custom_filters select:first-child').val()=='By Type')
{
  window.location.href='http://localhost/srijanalaya/events'+'?location='+location+'&from='+from+'&to='+to;
  return;
}



window.location.href='http://localhost/srijanalaya/events'+'?category='+category+'&location='+location+'&from='+from+'&to='+to;
}
