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
</head>
<body>
<?php 
  $menu_name="menutop";
  $menu_store='';
  $items=wp_get_nav_menu_items($menu_name);
  foreach ((array) $items as $key=>$item){
    $parent=$item->menu_item_parent;
    $title=$item->title;
    $url=$item->url;
    $id=$item->ID;
    if($parent==0) {
      $key=$x++;
      $menu_store[$id]=array('title'=>$title,'url'=>$url);
            }
    if($parent!=0){
      $menu_store[$parent][]=array('title'=>$title,'url'=>$url);
             }
      
  }
?>
 <div id="fullpage" style="">
   <div class="section" id="section1" style="">
    <div style""><!--head div sart-->    
      <div class="container-fluid"><!--top buttons-->
        <img src="<?php echo get_template_directory_uri();?>/images/logo_c.png"  class="img-responsive logo" alt="">
        <div class="btn-group top-btn">
          <button type="button" class="btn btn-icon">Donate</button>
          <select class="btn-icon custom-dropdown">
            <option value="en">English</option>
            <option value="np">Nepali</option>
          </select>
        </div><!-- Top buttons-->
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
              <ul class="nav navbar-nav">
              <?php foreach ($menu_store as $key=>$value){?>

                <li class="dropdown yamm-fw first"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $value['title'];?><span class="caret" ></span></a>
                 <ul class="dropdown-menu">
                  <div class="yamm-content">
                    <ul class="col-sm-2 col-xs-4 list-unstyled">
                     <li><a href="<?php echo $value[0]['url']; ?>"> <?php echo $value[0]['title']; ?> </a></li>
                     <li><a href="<?php echo $value[1]['title']; ?>"> <?php echo $value[1]['title']; ?></a></li>
                    <li><a href="<?php echo $value[2]['title']; ?>"> <?php echo $value[2]['title']; ?></a></li>
                   </ul>
                   <ul class="col-sm-2 col-xs-4 list-unstyled">
                    <li><a href="<?php echo $value[3]['title']; ?>"> <?php echo $value[3]['title']; ?></a></li>
                    <li><a href="<?php echo $value[4]['title']; ?>"> <?php echo $value[4]['title']; ?></a></li>
                    <li><a href="<?php echo $value[5]['title']; ?>"> <?php echo $value[5]['title']; ?></a></li>
                  </ul>
                  <ul class="col-sm-2 col-xs-4 list-unstyled">
                    <li><a href="<?php echo $value[7]['title']; ?>"> <?php echo $value[6]['title']; ?></a></li>
                   <li><a href="<?php echo $value[6]['title']; ?>"> <?php echo $value[7]['title']; ?></a></li>
                    <li><a href="<?php echo $value[8]['title']; ?>"> <?php echo $value[8]['title']; ?></a></li>
                  </ul>
                  <ul class="col-sm-2 col-xs-4 list-unstyled">
                    <li><a href="<?php echo $value[9]['title']; ?>"> <?php echo $value[9]['title']; ?></a></li>
                    <li><a href="<?php echo $value[10]['title']; ?>"> <?php echo $value[10]['title']; ?></a></li>
                    <li><a href="<?php echo $value[11]['title']; ?>"> <?php echo $value[11]['title']; ?></a></li>
                  </ul>
                  <ul class="col-sm-2 col-xs-4 list-unstyled">
                    <li><a href="<?php echo $value[12]['title']; ?>"> <?php echo $value[12]['title']; ?></a></li>
                    <li><a href="<?php echo $value[13]['title']; ?>"> <?php echo $value[13]['title']; ?></a></li>
                    <li><a href="<?php echo $value[14]['title']; ?>"> <?php echo $value[14]['title']; ?></a></li>
                  </ul>
                </div>
              </ul>
            </li>

            <?php }?>
              
                                                                                                                                                                                       
</ul>
</div>
</div>
</div>
</nav>
</div><!--head div end -->    


<?php wp_head();?>


