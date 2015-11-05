<?php
get_header('all');
wp_reset_query();
?>
<div class="page-wrapper wrapper">
	<div class="row">
		<div class="col-sm-12 wrapper banner">
			<div class="banner-content">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="mid-nav">
			<span class="marquee-left"><img src="<?php echo get_template_directory_uri();?>/images/arrow-left.png" /></span>
			<?php
			
			while ( have_posts() ) : the_post();
			if(strtolower(get_the_title()) == strtolower($pageTitle)) {
				echo '<div class="title col-xs-1">' . get_the_title() . '</div>';
				$content=get_the_content();
				$contents=explode("\n",$content);
				echo '<div class="mid-nav-inner"><ul>';
				$j = 0;
				for ($i = 0; $i < count($contents); $i++) { 
					if(strlen($contents[$i]) > 1) {
						$class = ($j == 0) ? 'first' : '';
						echo '<li class="subpageMenu ' . $class . '" id="item' . $j++ . '">' . $contents[$i] . '</li>';
					}
				}
				echo '</ul></div>';
				break;
			}
			endwhile;
			?>
			<span class="marquee-right"><img src="<?php echo get_template_directory_uri();?>/images/arrow-right.png" /></span>
		</div>
		<div class="page-content">
			<div class="col-xs-7 col-xs-offset-1">
				<?php
				while ( have_posts() ) : the_post();
				echo '<h2>' . get_the_title() . '</h2>';
				?>
				<p class="small-text"><img align="middle" src="<?php echo get_template_directory_uri();?>/images/participant-icon.png" class="outimg" alt="">200 participants | <?php echo date('F Y',types_render_field('project-date', array('raw' => 'true')));?></p>
				<?php
				echo '<p>' . auto_id_headings(get_the_content(), 'Project Details') . '</p>';
				endwhile;
				?>
			</div>
			<div class="col-sm-2">
				<h2>Resources</h2>
				<p><a href="#!">View Gallery</a></p>
				<p><a href="#!">View Videos</a></p>
				<?php include('social.php');?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
get_footer('all');
?>
<script src="<?php echo get_template_directory_uri();?>/js/smooth.pack.js"></script> <!-- CLNDR jQuery -->