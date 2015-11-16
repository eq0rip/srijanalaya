<?php //if(( is_mobile() )) { 
  $menu_icons=get_menu_icons();
  print_r($menu_icons);
  ?> 
  <nav class="nav-icons">


    <ul class="nav-links" style="display:none;">
     <?php foreach($menu_icons as $key=>$values){
      $pagelocation=$key;
      $icons=explode('##',$values);
      $default_icon=$icons[0];
      $hover_icons=$icons[1];

      if($key=='home'){

        $pagelocation='';
      }
      ?>
      <li hoverimage="<?php echo $hover_icons;?>" class="<?php echo $key.'-menu-icon';?>"><a style="background-image:url(<?php echo $default_icon;?>);" href="<?php echo site_url();?>/<?php echo $pagelocation;?>"><span><?php echo $key;?></span></a></li>
      <?php } ?>
    </ul>
    <ul>
      <li class="plus"><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/icon-plus.png"><span></span></a></li>
    </ul>
  </nav>
<script>
var temp1, temp2;
var test=jQuery('.nav-icons .nav-links li').hover(function() {
  temp1="url("+jQuery(this).attr('hoverimage')+")";
  temp2= jQuery(this).find('a').css('background-image');
  jQuery(this).find('a').css({'background-image':temp1});
  //console.log();
},
  function() {
 jQuery(this).find('a').css({'background-image':temp2});
  });


</script>
  <?php 
//}
  ?>


