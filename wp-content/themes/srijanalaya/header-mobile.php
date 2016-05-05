<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>



  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">-->


  <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
  

  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/fullpage/jquery.fullPage.css" />
  <link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri();?>/css/animate.css" >
  <link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri();?>/css/jquery-ui.min.css" >
  <link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri();?>/css/transform.css" >
  <link href="<?php echo get_template_directory_uri();?>/css/fontawesome.css"  rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/less/mobile_custom.less" rel="stylesheet/less">
    <link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri();?>/css/owl.carousel.css" >
  <script src="<?php echo get_template_directory_uri();?>/js/less-1.7.5.js"></script>
  <?php wp_head();?>
</head>
<body <?php body_class();?>>
  <?php flush(); ?>
<div id="fullpage" style="">
  <div class="section" id="section1">  
    <div class="section-wrapper fullheight"> 
      <div class="container-fluid head_section <?php echo ( is_home() ) ? 'fixed-header-nav' : null ?> "><!--top buttons-->
        <a href="<?php echo site_url();?>"><img src="<?php echo get_template_directory_uri();?>/images/logo_c.png"  class="img-responsive logo" alt="" /></a>
      </div>





