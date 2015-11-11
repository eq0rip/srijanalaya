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
			<?php
			$categories = get_terms('project_categories');
			$cats = array();
			foreach ( $categories  as $category ) {
				array_push($cats, $category->term_id);
			}
			$ids = get_the_id();
			$args=array('posts_per_page' => 7, 'post_type'=>'project', 'meta_key' => 'wpcf-project-date','orderby' => 'meta_value', 'order' => 'DESC', array( 'category__in' => array($cats)),  'post__not_in' => array($ids)); 
			$postslist=new WP_Query($args);              
			echo '<div class="title col-xs-1">More Projects</div>';
			echo '<div class="mid-nav-inner"><ul>';
			$j = 0;
			while($postslist->have_posts()) : $postslist->the_post();
			$class = ($j == 0) ? 'first' : '';
			echo '<li class="subpageMenu ' . $class . '" id="item' . $j++ . '"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
			endwhile;
			echo '</ul></div>';
			?>
		</div>
		<div class="page-content">
			<div class="col-xs-7 col-xs-offset-1">
				<?php
				while ( have_posts() ) : the_post();
				echo '<h2>' . get_the_title() . '</h2>';
				?>
				<p class="small-text"><img align="middle" src="<?php echo get_template_directory_uri();?>/images/participant-icon.png" class="outimg" alt="">Date: <span class="col2"><?php echo parseDate(date('Y-F-d',types_render_field('project-date', array('raw' => 'true')))) . ' ' . date('F Y',types_render_field('project-date', array('raw' => 'true')));?></span></p>
				<p class="small-text"><img align="middle" src="<?php echo get_template_directory_uri();?>/images/participant-icon.png" class="outimg" alt="">Time: <span class="col2"><?php echo date('h:i A',types_render_field('project-date', array('raw' => 'true')));?></span></p>
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