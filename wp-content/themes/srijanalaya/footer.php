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

</body>

<script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.min.js"></script>
<?php if(( is_home() || is_front_page() )) { //not working on desktop ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fullpage/jquery.fullPage.js"></script>
<script>
	jQuery('#fullpage').fullpage({
      scrollBar:true,
      fitToSection:false
    });
</script>
<?php } ?>
<script src="<?php echo get_template_directory_uri();?>/js/custom.js"></script>

</html>
