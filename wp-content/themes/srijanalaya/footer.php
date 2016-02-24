<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nirmal
 */

?>



<?php wp_footer(); ?>
<?php get_template_part('navigation');?>
</body>

<script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/jquery-ui.min.js"></script>
<?php if((( is_home() || is_front_page()) )) { //not working on desktop ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fullpage/jquery.fullPage.js"></script>

<script>
	jQuery('#fullpage').fullpage({
            scrollBar:true,
            fitToSection:false,
            onLeave:function(index,nextIndex,direction){
                //   console.log(index);
                //   if(index==1 || (index == 2 && direction == 'up')) {
                //       jQuery('.drop').hide();
                //       console.log(direction);
                // }
                // else {
                //       jQuery('.drop').show();
                // }
          }
    });
</script>
<?php } ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-dropdate.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/date.format.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.Photostack.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.swipebox.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancyform.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.infinitescroll.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/custom.js"></script>
<script type="text/javascript">
      jQuery(window).scroll(function() { 
           if(jQuery(window).scrollTop() > 570) {
            jQuery('.drop').show();
      }
      else {
            jQuery('.drop').hide();
      }
});
      
(function(){
  wow = new WOW({
    mobile: false
  });
  wow.init(); 
})();
</script>
</html>
