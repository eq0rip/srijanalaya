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
			<div class="title col-xs-1">Other News</div>
			<div class="mid-nav-inner"><ul>
				<?php            	
				$ids = get_the_id();
				$args=array('posts_per_page'=>10, 'post_type'=>'news-post', 'orderby' => 'date', 'order' => 'DESC', 'post__not_in' => array($ids)); 
				$postslist=new WP_Query($args);  
				while($postslist->have_posts()) : $postslist->the_post();
				echo '<li class="subpageMenu"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
				endwhile;
				wp_reset_query();
				?>
			</ul></div>
		</div>
		<div class="page-content project-inner-page-content">
			<div class="col-sm-7 col-sm-offset-1 paragraph">
				<h2><?php echo get_the_title();?></h2>
				<?php echo '<p class="text-content">' . nl2br(get_the_content()) . '</p>'; ?>
			</div>
			<div class="col-sm-3 side-column">
				<div class="col-sm-10 sidebar no-padding">
					<div class="side-wrap">
						<h2>Recommended News</h2>
						<?php 
						$args=array('posts_per_page' => 5,'post_type' => 'news-post','meta_query' => array(array('key' => 'wpcf-recommended-news', 'value' => 'yes', 'compare' => '=')), 'orderby' => 'date', 'order' => 'DESC');
						$postslist = new WP_Query($args);
						while($postslist->have_posts()):$postslist->the_post();
						echo '<p><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></p>';
						endwhile;
						?>
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