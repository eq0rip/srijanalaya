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
			<div class="col-sm-7 col-sm-offset-1">
				<h2><?php echo get_the_title();?></h2>
				<?php echo '<p>' . nl2br(get_the_content()) . '</p>'; ?>
			</div>
			<div class="col-sm-3">
				<div class="col-sm-10 sidebar no-padding">
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