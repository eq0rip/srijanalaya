
<ul class="nav navbar-nav">

<?php

$args = array( 'posts_per_page' => 10, 'post_type' => 'sri-menu' );
$postslist = new WP_Query( $args );
while ( $postslist->have_posts() ) : $postslist->the_post();

$content=get_the_content();
$contents=explode("\n",$content);
$menu_head=get_the_title();
$ownUrl = types_render_field('url-slug');
$ownUrl = (trim(strtolower($ownUrl)) == 'home') ? site_url() : site_url() . '/' . $ownUrl;
if(lowertrim(types_render_field('url-slug'))=='project')
{
 $menu_head=get_the_title();
 $contents=get_menu_post('project');
}
elseif(lowertrim(types_render_field('url-slug'))=='resources')
{
 $menu_head=get_the_title();
 $contents=get_menu_post('resource');
}
elseif(lowertrim(types_render_field('url-slug'))=='news')
{
 $menu_head=get_the_title();
 $contents=get_menu_post('news-post');
} 
elseif(lowertrim(types_render_field('url-slug'))=='shop')
{
 $menu_head=get_the_title();
 $contents=get_menu_post('product');
} 

$j = 0;


?>

<li class="dropdown yamm-fw first"><a class="dropdown-toggle topMenu" href="<?php echo $ownUrl;?>"><?php echo $menu_head; ?>
  <?php if(count($contents) > 1) {?><span class="caret" ></span><?php } ?></a>
  <?php if(count($contents) > 1) { ?>
  <ul class="dropdown-menu">
    <div class="yamm-content">
      <?php for ($i = 0; $i < count($contents); $i++) { 
        if(strlen($contents[$i]) > 1) {
          if($j % 2 == 0) {
            echo '<ul class="col-sm-2 col-xs-4 list-unstyled">';
          }
          echo '<li>' . $contents[$i] . '</li>';
          if($j % 2 == 1) { 
            echo '</ul>';
          }
          $j++;
        }
      }
      ?>  

    </div>
  </ul>
  <?php } ?>
</li>

<?php endwhile;?>
<?php 
$current_page="http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI'];
$lang = 'en';
if(strstr($current_page,'/ne/'))
  $lang = 'ne';
?>
</ul>
<div class="right-menu pull-right">
  <div class="nav-right fmenu"><a href="<?php echo WC()->cart->get_cart_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/images/shop-icon.png" class="shop-icon-menu" width="20px" height="20px"/>&nbsp;<span class="item-count">(<?php echo sprintf (_n( '%d', '%d', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?>)</span></a></div>
  <div class="nav-right smenu"><a href="#!">Donate</a></div>
  <div class="nav-right tmenu">
  
  <li onclick="change_language('<?php if($lang=='ne'){echo 'en';}else {echo 'ne';}?>','<?php echo $current_page;?>')" class="language_li"><?php if($lang=='en'){echo 'नेपाली';}else echo 'English';?></li>
  </div>
</div>