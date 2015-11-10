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
<?php if((!is_mobile() && ( is_home() || is_front_page()) )) { //not working on desktop ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fullpage/jquery.fullPage.js"></script>

<script>
	jQuery('#fullpage').fullpage({
      scrollBar:true,
      fitToSection:false,
      onLeave:function(index,nextIndex,direction){
      
      	// if(nextIndex==1)
      	// 	jQuery('.nav-icons').hide(10);
      	// else {
      	// 	jQuery('.nav-icons').show(10);
      	// }
      }
    });
</script>
<?php } ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-dropdate.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/date.format.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/custom.js"></script>

</html>
