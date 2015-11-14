<?php
get_header('all');
wp_reset_query();
?>
<div class="page-wrapper">
	<div class="row">
		<div class="col-sm-12 wrapper banner">
			<div class="banner-content">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="mid-nav">
			<span class="marquee-left"><img src="<?php echo get_template_directory_uri();?>/images/arrow-left.png" /></span>
			<span class="marquee-right"><img src="<?php echo get_template_directory_uri();?>/images/arrow-right.png" /></span>
			<div class="title col-xs-1">Levels</div>
			<?php            	
			$content = auto_id_headings_resource(get_the_content());
			?>
		</div>
		<div class="page-content project-inner-page-content">
			<div class="col-sm-7 col-sm-offset-1">
				<?php echo '<p class="text-content">' . $content . '</p>'; ?>
			</div>
			<div class="col-sm-3">
				<div class="col-sm-10 sidebar no-padding">
					<div class="side-wrap">
						<h2>Resources</h2>
						<p><a href="#!">View Gallery</a></p>
						<p><a href="#!">View Videos</a></p>
						<p><a href="#!">View Related Project</a></p>
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
get_footer();
get_footer('all');
?>	