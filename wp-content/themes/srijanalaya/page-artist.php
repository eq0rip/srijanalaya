<?php
/*
Template Name: Artist
 */

get_header('all'); ?>

<div class="page-wrapper wrapper">
	<?php $args=array('posts_per_page'=>-1,'post_type'=>'banner');
	$postslist=new WP_Query($args);
	while($postslist->have_posts() ) : $postslist->the_post();
	if(strtolower(trim(get_the_title()))=='artist') :
		?>
	<div class="topbanner banner" style="background:url(<?php echo types_render_field('banner-image',array('raw'=>'true'));?>">
		<div class="col-xs-6 col-md-3 header-text">
			<h2><?php echo types_render_field('banner-title')?></h2>
			<p><?php  echo get_the_content();?></p>
			<a class="btn btn-default btn-lg vid-btn" href="<?php echo types_render_field('redirect-link');?>">View News</a>
		</div>
	</div>
<?php endif;endwhile;?>
<div class="row">
	<div class="mid-nav">
		<span class="marquee-left"><img src="<?php echo get_template_directory_uri();?>/images/arrow-left.png" /></span>
		<span class="marquee-right"><img src="<?php echo get_template_directory_uri();?>/images/arrow-right.png" /></span>
		<div class="title col-xs-1">All News</div>
		<div class="mid-nav-inner">
			<ul>
				<li class="subpageMenu first <?php if(!isset($_GET['news_type']) ||  $_GET['news_type'] == 'latest') {echo 'active';}?>" ><a href="<?php echo site_url();?>/artist">Latest</a></li>
				<li style="margin-left: -6px;" class="subpageMenu <?php if( trim(strtolower($_GET['artist_type'])) == 'recommended') { echo 'active';}?>" ><a href="<?php echo site_url();?>/srijanalaya-artist?artist_type=recommended">Recommended</a></li>
				<li style="margin-left: -6px;" class="subpageMenu <?php if( trim(strtolower($_GET['artist_type'])) == 'popular') { echo 'active';}?>" ><a href="<?php echo site_url();?>/srijanalaya-artist?artist_type=popular">Most Popular</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-10 col-sm-offset-1 content-grid page-content">
		<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		if(isset($_GET['news_type']) && $_GET['artist_type'] != 'latest') {
			$gid = mysql_real_escape_string($_GET['artist_type']);
			if( trim(strtolower($gid)) == 'recommended') {
				$args=array('posts_per_page'=>20, 'post_type'=>'sri-artist', 'orderby' => 'date', 'order' => 'DESC', 'meta_query' => array(array('key' => 'wpcf-recommended-news', 'value' => 'yes', 'compare' => '=')),
					'paged' => $paged,); 
			}
			elseif( trim(strtolower($gid)) == 'popular') {
				$args=array('posts_per_page'=>20, 'post_type'=>'sri-artist', 'orderby' => 'meta_value_num','meta_key' => 'wpb_post_views_count', 'order' => 'DESC',
					'paged' => $paged,); 
			}
		}
		else {
			$args=array('posts_per_page'=>20, 'post_type'=>'sri-artist', 'orderby' => 'date', 'order' => 'DESC',
				'paged' => $paged,); 
		}
		$postslist=new WP_Query($args);  
		while($postslist->have_posts()) : $postslist->the_post();
		$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large');
		if($imgsrc[0] == null || $imgsrc[0] == '')
			$image = '';
		else
			$image = $imgsrc[0];
		?>
		<div class="col-sm-4 content">
			<div class="img-wrapper">
				<img src="<?php echo $image;?>" />
			</div>
			<h4><?php echo get_the_title().'<span class="sub-title">'.types_render_field("artist-type").'</span>'; ?></h4>
			<p><?php echo types_render_field('short-description'); ?></p>
			<span class="social-buttons">
			<span class="font-11">Follow Artist</span>
				<ul class="share-buttons">
					<li><a href="" target="_blank" title="Share on Facebook"><img src="<?php echo get_template_directory_uri();?>/images/fb-g.png" alt=""></a></li>
					<li><a href="https://twitter.com/intent/tweet?source=http%3A%2F%2Fsrijanalaya.saediworks.com&text=Srijanalaya:%20http%3A%2F%2Fsrijanalaya.saediworks.com" target="_blank" title="Tweet"><img src="<?php echo get_template_directory_uri();?>/images/tw-g.png" alt=""></a></li>
					<li><a href="https://plus.google.com/share?url=http%3A%2F%2Fsrijanalaya.saediworks.com" target="_blank" title="Share on Google+"><img src="<?php echo get_template_directory_uri();?>/images/gp-g.png" alt=""></a></li>
					<li><a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fsrijanalaya.saediworks.com&description=" target="_blank" title="Pin it"><img src="<?php echo get_template_directory_uri();?>/images/pin-g.png" alt=""></a></li>
				</ul>
			</span>
			<br/>
			<a class="mt10" href="<?php echo get_the_permalink();?>">Read More</a>
		</div>
		<?php
		endwhile;
		?>
	</div>
	<div class="row navigation"><?php echo easy_wp_pagenavigation( $postslist ); ?>
	</div>
</div>
<?php 
get_footer('all');
get_footer(); 
?>