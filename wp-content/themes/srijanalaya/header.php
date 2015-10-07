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

      <nav class="navbar yamm"><!--navbar-->
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
                <li class="dropdown yamm-fw first"><a class="dropdown-toggle" data-toggle="dropdown" href="#">HOME<span class="caret" ></span></a>
                 <ul class="dropdown-menu">
                  <div class="yamm-content">
                    <ul class="col-sm-4 list-unstyled">
                     <li><a href="#"> Link Item </a></li>
                     <li><a href="#"> Link Item </a></li>
                     <li><a href="#"> Link Item </a></li>
                   </ul>
                   <ul class="col-sm-4 list-unstyled">
                    <li><a href="#"> Link Item </a></li>
                    <li><a href="#"> Link Item </a></li>
                    <li><a href="#"> Link Item </a></li>
                  </ul>
                  <ul class="col-sm-4 list-unstyled">
                    <li><a href="#"> Link Item </a></li>
                    <li><a href="#"> Link Item </a></li>
                    <li><a href="#"> Link Item </a></li>
                  </ul>
                </div>
              </ul>
            </li>
            <li class="dropdown yamm-fw"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ABOUT<span class="caret" ></span></a>
             <ul class="dropdown-menu">
              <div class="yamm-content">
                <ul class="col-sm-4 list-unstyled">
                 <li><a href="#"> Link Item </a></li>
                 <li><a href="#"> Link Item </a></li>
                 <li><a href="#"> Link Item </a></li>
               </ul>
               <ul class="col-sm-4 list-unstyled">
                <li><a href="#"> Link Item </a></li>
                <li><a href="#"> Link Item </a></li>
                <li><a href="#"> Link Item </a></li>
              </ul>
              <ul class="col-sm-4 list-unstyled">
                <li><a href="#"> Link Item </a></li>
                <li><a href="#"> Link Item </a></li>
                <li><a href="#"> Link Item </a></li>
              </ul>
            </div>
          </ul>
        </li>  
        <li class="dropdown yamm-fw"><a class="dropdown-toggle" data-toggle="dropdown" href="#">PROJECTS<span class="caret" ></span></a>
          <ul class="dropdown-menu">
            <div class="yamm-content">
              <ul class="col-sm-4 list-unstyled">
               <li><a href="#"> Link Item </a></li>
               <li><a href="#"> Link Item </a></li>
               <li><a href="#"> Link Item </a></li>
             </ul>
             <ul class="col-sm-4 list-unstyled">
              <li><a href="#"> Link Item </a></li>
              <li><a href="#"> Link Item </a></li>
              <li><a href="#"> Link Item </a></li>
            </ul>
            <ul class="col-sm-4 list-unstyled">
              <li><a href="#"> Link Item </a></li>
              <li><a href="#"> Link Item </a></li>
              <li><a href="#"> Link Item </a></li>
            </ul>
          </div>
        </ul>
      </li>
      <li class="dropdown yamm-fw"><a class="dropdown-toggle" data-toggle="dropdown" href="#">NEWS<span class="caret" ></span></a>
        <ul class="dropdown-menu">
          <div class="yamm-content">
            <ul class="col-sm-4 list-unstyled">
             <li><a href="#"> Link Item </a></li>
             <li><a href="#"> Link Item </a></li>
             <li><a href="#"> Link Item </a></li>
           </ul>
           <ul class="col-sm-4 list-unstyled">
            <li><a href="#"> Link Item </a></li>
            <li><a href="#"> Link Item </a></li>
            <li><a href="#"> Link Item </a></li>
          </ul>
          <ul class="col-sm-4 list-unstyled">
            <li><a href="#"> Link Item </a></li>
            <li><a href="#"> Link Item </a></li>
            <li><a href="#"> Link Item </a></li>
          </ul>
        </div>
      </ul>
    </li>
    <li class="dropdown yamm-fw"><a class="dropdown-toggle" data-toggle="dropdown" href="#">RESOURCES<span class="caret" ></span></a>
     <ul class="dropdown-menu">
      <div class="yamm-content">
        <ul class="col-sm-4 list-unstyled">
         <li><a href="#"> Link Item </a></li>
         <li><a href="#"> Link Item </a></li>
         <li><a href="#"> Link Item </a></li>
       </ul>
       <ul class="col-sm-4 list-unstyled">
        <li><a href="#"> Link Item </a></li>
        <li><a href="#"> Link Item </a></li>
        <li><a href="#"> Link Item </a></li>
      </ul>
      <ul class="col-sm-4 list-unstyled">
        <li><a href="#"> Link Item </a></li>
        <li><a href="#"> Link Item </a></li>
        <li><a href="#"> Link Item </a></li>
      </ul>
    </div>
  </ul>
</li> 
<li class="dropdown yamm-fw"><a class="dropdown-toggle" data-toggle="dropdown" href="#">NEWS<span class="caret" ></span></a>
  <ul class="dropdown-menu">
    <div class="yamm-content">
      <ul class="col-sm-4 list-unstyled">
       <li><a href="#"> Link Item </a></li>
       <li><a href="#"> Link Item </a></li>
       <li><a href="#"> Link Item </a></li>
     </ul>
     <ul class="col-sm-4 list-unstyled">
      <li><a href="#"> Link Item </a></li>
      <li><a href="#"> Link Item </a></li>
      <li><a href="#"> Link Item </a></li>
    </ul>
    <ul class="col-sm-4 list-unstyled">
      <li><a href="#"> Link Item </a></li>
      <li><a href="#"> Link Item </a></li>
      <li><a href="#"> Link Item </a></li>
    </ul>
  </div>
</ul>
</li> 
<li class="dropdown yamm-fw"><a class="dropdown-toggle" data-toggle="dropdown" href="#">SHOP<span class="caret" ></span></a>
 <ul class="dropdown-menu">
  <div class="yamm-content">
    <ul class="col-sm-4 list-unstyled">
     <li><a href="#"> Link Item </a></li>
     <li><a href="#"> Link Item </a></li>
     <li><a href="#"> Link Item </a></li>
   </ul>
   <ul class="col-sm-4 list-unstyled">
    <li><a href="#"> Link Item </a></li>
    <li><a href="#"> Link Item </a></li>
    <li><a href="#"> Link Item </a></li>
  </ul>
  <ul class="col-sm-4 list-unstyled">
    <li><a href="#"> Link Item </a></li>
    <li><a href="#"> Link Item </a></li>
    <li><a href="#"> Link Item </a></li>
  </ul>
</div>
</ul>
</li>  
<li class="dropdown yamm-fw"><a class="dropdown-toggle" data-toggle="dropdown" href="#">CONTACT<span class="caret" ></span></a>
 <ul class="dropdown-menu">
  <div class="yamm-content">
    <ul class="col-sm-4 list-unstyled">
     <li><a href="#"> Link Item </a></li>
     <li><a href="#"> Link Item </a></li>
     <li><a href="#"> Link Item </a></li>
   </ul>
   <ul class="col-sm-4 list-unstyled">
    <li><a href="#"> Link Item </a></li>
    <li><a href="#"> Link Item </a></li>
    <li><a href="#"> Link Item </a></li>
  </ul>
  <ul class="col-sm-4 list-unstyled">
    <li><a href="#"> Link Item </a></li>
    <li><a href="#"> Link Item </a></li>
    <li><a href="#"> Link Item </a></li>
  </ul>
</div>
</ul>
</li>                                                                                                                                                                                  
</ul>
</div>
</div>
</div>
</nav>
</div><!--head div end -->    


<?php wp_head();?>


