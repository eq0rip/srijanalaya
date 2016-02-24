<?php
get_header('all');
wp_reset_query();
?>
<div class="page-wrapper">
	<div class="row">
		<?php 
		$bigimg = types_render_field('big-banner-imager', array('raw' => true));
		if($bigimg != '') {
		?>
		<div class="col-sm-12 wrapper banner" style="background-image: url(<?php echo $bigimg;?>);">
			<div class="banner-content">
			</div>
		</div>
		<?php } ?>
	</div>
	<div class="row">
		<div class="mid-nav">
			<span class="marquee-left"><img src="<?php echo get_template_directory_uri();?>/images/arrow-left.png" /></span>
			<span class="marquee-right"><img src="<?php echo get_template_directory_uri();?>/images/arrow-right.png" /></span>
			<div class="title col-xs-1"><?php echo ucwords($sri_locale['get updates'][$lang]);?></div>
			<?php            	
			$content = auto_id_headings_resource(get_the_content());
			?>
		</div>
		<div class="page-content project-inner-page-content">
			<div class="col-sm-7 col-sm-offset-1">
				<?php echo '<p class="text-content">' . $content . '</p>'; ?>
				<!-- missing code -->
			</div>
			<div class="col-sm-3 side-column">
				<div class="col-sm-10 sidebar no-padding">
					<div class="side-wrap">
						<h2><?php echo ucwords($sri_locale['resources'][$lang]);?></h2>
						<p><a href="<?php echo get_template_directory_uri();?>/gallery"><?php echo ucwords($sri_locale['view gallery'][$lang]);?></a></p>
						<p><a href="<?php echo get_template_directory_uri();?>/videos"><?php echo ucwords($sri_locale['view videos'][$lang]);?></a></p>
						<p><a href="#!"><?php echo ucwords($sri_locale['view related projects'][$lang]);?></a></p>
					</div>
					<div class="side-wrap last">
						<?php include('social.php');?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
	include('newsletter.php'); 
	if(is_mobile()) {
		include('quotewrap.php');
		get_footer('mobile');
	}
	else {
		get_footer('all');
		get_footer();
	}
?>	