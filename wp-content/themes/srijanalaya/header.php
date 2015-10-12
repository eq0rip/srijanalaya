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
            <?php

                $args = array( 'posts_per_page' => 5, 'post_type' => 'sri-menu' );
                $postslist = new WP_Query( $args );
                while ( $postslist->have_posts() ) : $postslist->the_post();
                  $content=get_the_content();
                  $contents=explode("\n",$content);
                


            ?>

                <li class="dropdown yamm-fw first"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php the_title();?><span class="caret" ></span></a>
                 <ul class="dropdown-menu">
                  <div class="yamm-content">
                    <ul class="col-sm-2 col-xs-4 list-unstyled">
                          <?php echo $contents[0];?>
                           <?php echo $contents[1];?>
                           <?php echo $contents[2];?>
                   </ul>
                   <ul class="col-sm-2 col-xs-4 list-unstyled">
                    <?php echo $contents[3];?>
                    <?php echo $contents[4];?>
                    <?php echo $contents[5];?>
                  </ul>
                  <ul class="col-sm-2 col-xs-4 list-unstyled">
                    <?php echo $contents[6];?>
                    <?php echo $contents[7];?>
                    <?php echo $contents[8];?>
                  </ul>
                 
                </div>
              </ul>
            </li>

       <?php endwhile;?>
              
                                                                                                                                                                                       
</ul>
</div>
</div>
</div>
</nav>
</div><!--head div end -->    


<?php wp_head();?>


