<?php if(( !is_mobile() )) { 
  $class = 'hideme';
}
else {
  $class = '';
}
?>

<nav class="nav-icons fixed <?php echo $class;?>">
  <ul class="nav-links" style="display:none;">
    <li class="message"><a href="<?php echo site_url();?>/creatives"><span>Contact</span></a></li>
    <li class="bag"><a href="<?php echo site_url();?>/about"><span>Shop</span></a></li>
    <li class="bag"><a href="<?php echo site_url();?>/service"><span>Resources</span></a></li>
    <li class="message"><a href="<?php echo site_url();?>/contact"><span>Projects</span></a></li>
    <li class="pencil"><a href="#!"><span>News</span></a></li>
  </ul>
  <ul>
    <li class="plus"><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/icon-plus.png"><span></span></a></li>
  </ul>
</nav>
