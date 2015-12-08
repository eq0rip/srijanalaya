<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">-->



  <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/less/custom.less" rel="stylesheet/less">
  <script src="<?php echo get_template_directory_uri();?>/js/less-1.7.5.js"></script>
  <link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri();?>/css/owl.carousel.css" >
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/fullpage/jquery.fullPage.css" />
  <link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri();?>/css/animate.css" >
  <link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri();?>/css/transform.css" >
  <link href="<?php echo get_template_directory_uri();?>/css/fontawesome.css"  rel="stylesheet">
</head>
<body class="home">
<!--<div class="loader">
  <img src="<?php echo get_template_directory_uri()?>/images/logo_c.png">
  <div class="transbg"></div>-->
</div>
<div id="fullpage" style="">
 <div class="section" id="section1" style="">
  <div style""><!--head div sart-->    
    <div class="container-fluid"><!--top buttons-->


      <div id="sliderEffects" style="">
        <div style="position:absolute;right:25%;">
          <div>
            Sider 1:<select id="slider1effect">
            <option value="slideInLeft">slideFromLeft</option>
            <option value="fadeIn">fadeIn</option>
            <option value="slideInRight">slideFromRight</option>
            <option value="fadeOut">fadeOut</option>
            <option value="flipInX">flipIn</option>
            <option value="lightSpeedIn">lightSpeedIn</option>
            <option value="rollIn">rotateIn</option>
          </select>
        </div>

        <div >
          slider 2:<select id="slider2effect">
          <option value="slideInLeft">slideFromLeft</option>
          <option value="fadeIn">fadeIn</option>
          <option value="slideInRight">slideFromRight</option>
          <option value="fadeOut">fadeOut</option>
          <option value="flipInX">flipIn</option>
          <option value="lightSpeedIn">lightSpeedIn</option>
          <option value="rollIn">rotateIn</option>
        </select>
      </div>

    </div>
    <div class="duration_div" style="">
     Slide Change Interval:
     <input id="interval" type="text" value='<?php if(isset($_GET['slider1In'])){echo $_GET['interval'];}else {echo 3;}?>' />
     <button class="btn interval_up" type="button">+</button>
     <button class="btn interval_down" type="button">-</button>
     <br/>
     Animation Duration:
     <input id="duration" type="text" value='<?php if(isset($_GET['slider1In'])){echo $_GET['duration'];}else {echo 2.5;}?>' />
     <button type="button" class="btn duration_up" type="button">+</button>
     <button class="btn duration_down" type="button">-</button>
   </div>

 </div>
 <button class="btn" style="position:absolute;top:20px;right:15%;background-color:#E91F4A !important;color:#ffffff;" type="button" onclick="animationChange(document.getElementById('slider1effect').value,document.getElementById('slider2effect').value,document.getElementById('duration').value,document.getElementById('interval').value)">Apply</button>



 <a href="<?php echo site_url();?>"><img src="<?php echo get_template_directory_uri();?>/images/logo_c.png"  class="img-responsive logo" alt="" /></a>
      <!-- <div class="btn-group top-btn">
        <button type="button" class="btn btn-icon">Donate</button>
        <?php 
        $current_page="http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI'];
        $lang = 'en';
        if(strstr($current_page,'ne'))
          $lang = 'ne';
        ?>
        <select class="btn-icon custom-dropdown" id="language-btn" onchange="change_language(this.value,'<?php echo $current_page;?>');">
          <option  <?php if($lang == 'en') echo 'selected';?> value="en" >English</option>
          <option <?php if($lang == 'ne') echo 'selected';?> value="ne">Nepali</option>
        </select>
      </div>-->
    </div>

    <nav class="navbar yamm hidden-xs"><!--navbar-->
      <div class="navbar-inner">
        <div class="cointainer">

          <button type="button" class="navbar-toggle menubutton" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <a class="brand" href="#"> Menu </a>
          </button>
          <div class="access">
          </div>
          <div class="collapse navbar-collapse" id="myNavbar" >
            <?php include('menu.php');?>
          </div>
        </div>
      </div>
    </nav>
    <div class="drop"><i class="fa fa-caret-down"></i><i class="fa fa-caret-up"></i></div>
  </div><!--head div end -->    
  <?php wp_head();?>
  <?php flush(); ?>