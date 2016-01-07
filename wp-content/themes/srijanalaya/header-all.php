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
  <link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri();?>/css/jquery-ui.min.css" >
  <link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri();?>/css/transform.css" >
  <link href="<?php echo get_template_directory_uri();?>/css/fontawesome.css"  rel="stylesheet">
</head>
<body <?php body_class();?>>
  <?php wp_head();?>
<!--<div class="loader">
  <img src="<?php echo get_template_directory_uri()?>/images/logo_c.png">
  <div class="transbg"></div>
</div>-->

<div class="hidden-sm hidden-md hidden-xs" style""><!--head div sart-->    
  <div class="container-fluid head_div"><!--top buttons-->
    <a href="<?php echo site_url();?>"><img src="<?php echo get_template_directory_uri();?>/images/logo_c.png"  class="img-responsive logo" alt="" /></a>
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
</div><!--head div end -->    
<?php flush(); ?>
<div class="drop hidden-sm hidden-md hidden-xs"><img src="<?php echo get_template_directory_uri();?>/images/dropdown_arrow.png"></div>
 <div class="container-fluid head_section hidden-lg"><!--top buttons-->
    <a href="<?php echo site_url();?>"><img src="<?php echo get_template_directory_uri();?>/images/logo_c.png"  class="img-responsive logo" alt="" /></a>
  </div>
<div class="page-wrap">
 

