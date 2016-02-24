<?php
/**
Template Name: News 
 */

get_header('all'); ?>

<div class="page-wrapper wrapper mobile-no-padding"> 
	<?php $args=array('posts_per_page'=>-1,'post_type'=>'banner');
	$postslist=new WP_Query($args);
	while($postslist->have_posts() ) : $postslist->the_post();
	if(strtolower(trim(get_the_title()))=='news') :
		?>
	<div class="topbanner banner" style="background:url(<?php echo types_render_field('banner-image',array('raw'=>'true'));?>">
		<div class="col-md-12 col-lg-3 header-text">
			<h2><?php echo types_render_field('banner-title')?></h2>
			<p><?php  echo get_the_content();?></p>
			<a class="btn btn-default btn-lg vid-btn" href="<?php echo types_render_field('redirect-link');?>">View News</a>
		</div>
	</div>
<?php endif;endwhile;?>
<div class="row">
	<div class="mid-nav hidden-sm hidden-md hidden-xs">
		<span class="marquee-left"><img src="<?php echo get_template_directory_uri();?>/images/arrow-left.png" /></span>
		<span class="marquee-right"><img src="<?php echo get_template_directory_uri();?>/images/arrow-right.png" /></span>
		<div class="title col-xs-1">All News</div>
		<div class="mid-nav-inner">
			<ul>
				<li class="subpageMenu first <?php if(!isset($_GET['news_type']) ||  $_GET['news_type'] == 'latest') {echo 'active';}?>" ><a href="<?php echo site_url();?>/news">Latest</a></li>
				<li style="margin-left: -6px;" class="subpageMenu <?php if( trim(strtolower($_GET['news_type'])) == 'recommended') { echo 'active';}?>" ><a href="<?php echo site_url();?>/news?news_type=recommended">Recommended</a></li>
				<li style="margin-left: -6px;" class="subpageMenu <?php if( trim(strtolower($_GET['news_type'])) == 'popular') { echo 'active';}?>" ><a href="<?php echo site_url();?>/news?news_type=popular">Most Popular</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="row">
	<div class="mobile-mid-nav hidden-lg">
		<div class="mobile-mid-nav-inner mobile-text-center">
			<li class="mobile-filter-active"><span class='caret'></span>All News</li>
			<ul class="mobile-filter-dropdown">
				<li class="mobile-filter-item <?php if(!isset($_GET['news_type']) ||  $_GET['news_type'] == 'latest') {echo 'active';}?>" ><a href="<?php echo site_url();?>/news">Latest</a></li>
				<li style="margin-left: -6px;" class="mobile-filter-item <?php if( trim(strtolower($_GET['news_type'])) == 'recommended') { echo 'active';}?>" ><a href="<?php echo site_url();?>/news?news_type=recommended">Recommended</a></li>
				<li style="margin-left: -6px;" class="mobile-filter-item <?php if( trim(strtolower($_GET['news_type'])) == 'popular') { echo 'active';}?>" ><a href="<?php echo site_url();?>/news?news_type=popular">Most Popular</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12 col-lg-10 col-lg-offset-1 content-grid page-content mobile-no-margin">
		<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		if(isset($_GET['news_type']) && $_GET['news_type'] != 'latest') {
			$gid = mysql_real_escape_string($_GET['news_type']);
			if( trim(strtolower($gid)) == 'recommended') {
				$args=array('posts_per_page'=>20, 'post_type'=>'news-post', 'orderby' => 'date', 'order' => 'DESC', 'meta_query' => array(array('key' => 'wpcf-recommended-news', 'value' => 'yes', 'compare' => '=')),
					'paged' => $paged,); 
			}
			elseif( trim(strtolower($gid)) == 'popular') {
				$args=array('posts_per_page'=>20, 'post_type'=>'news-post', 'orderby' => 'meta_value_num','meta_key' => 'wpb_post_views_count', 'order' => 'DESC',
					'paged' => $paged,); 
			}
		}
		else {
			$args=array('posts_per_page'=>20, 'post_type'=>'news-post', 'orderby' => 'date', 'order' => 'DESC',
				'paged' => $paged,); 
		}
		$postslist=new WP_Query($args);  
		while($postslist->have_posts()) : $postslist->the_post();
		$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'large');
		if($imgsrc[0] == null || $imgsrc[0] == '')
			$image = '';
		else
			$image = $imgsrc[0];
		?>
		<div class="col-sm-4 content">
			<div class="img-wrapper">
				<img src="<?php echo $image;?>" />
			</div>
			<h4><?php the_title(); ?></h4>
			<p><?php echo types_render_field('short-description'); ?></p>
			<a href="<?php echo get_the_permalink();?>" class="news-btn">Read More</a>
		</div>
		<?php
		endwhile;
		?>
	</div>
	<div class="row navigation"><?php echo easy_wp_pagenavigation( $postslist ); ?>
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