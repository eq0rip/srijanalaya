<?php
/**
Template Name: About 
 */

get_header('all');
get_header('mapbox'); 
wp_reset_query();
?>


<div class="page-wrapper about-wrapper wrapper mobile-no-padding">
	<?php $args=array('posts_per_page'=>-1,'post_type'=>'banner');
	$postslist=new WP_Query($args);
	while($postslist->have_posts() ) : $postslist->the_post();
		if(strtolower(trim(get_the_title()))=='about') :
			?>
		<div class="topbanner banner" style="background:url(<?php echo types_render_field('banner-image',array('raw'=>'true'));?>">
			<div class="col-md-12 col-lg-3 header-text">
				<h2><?php echo types_render_field('banner-title')?></h2>
				<p><?php  echo get_the_content();?></p>
			</div>
		</div>
	<?php 
		endif;
	endwhile;
	?>
<div class="row">
	<div class="mid-nav hidden-sm hidden-md hidden-xs">
		<span class="marquee-left"><img src="<?php echo get_template_directory_uri();?>/images/arrow-left.png" /></span>
		<span class="marquee-right"><img src="<?php echo get_template_directory_uri();?>/images/arrow-right.png" /></span>
		<?php
		
		wp_reset_query();
		$pageTitle = get_the_title();
		if ($post->post_parent != 0){
			$ids = $post->post_parent;
		}
		else {
			$ids = get_the_id();
		}
		$args = array( 'posts_per_page' => 10, 'post_type' => 'sri-menu' );
		$postslist = new WP_Query( $args );
		while ( $postslist->have_posts() ) : $postslist->the_post();
		if(strtolower(get_the_title()) == strtolower('about')) {
			echo '<div class="title col-xs-1">' . get_the_title() . '</div>';
			$content= get_the_content();
			$contents= explode("\n",$content);
			
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
	</div>
	<div class="mobile-mid-nav hidden-lg">
		<?php
		wp_reset_query();
		$pageTitle = get_the_title();
		if ($post->post_parent != 0){
			$ids = $post->post_parent;
		}
		else {
			$ids = get_the_id();
		}
		$args = array( 'posts_per_page' => 10, 'post_type' => 'sri-menu' );
		$postslist = new WP_Query( $args );
		while ( $postslist->have_posts() ) : $postslist->the_post();
		if(strtolower(get_the_title()) == strtolower('about' )) {

			$content=get_the_content();
			$contents=explode("\n",$content);
		
			echo '<div class="mobile-mid-nav-inner mobile-text-center"><ul>';
			$j = 0;
			echo "<li class='mobile-filter-active'><span class='caret'></span>" . $pageTitle . "</li>
			<ul class='mobile-filter-dropdown'>";
			for ($i = 0; $i < count($contents); $i++) { 
				if(strlen($contents[$i]) > 1) {

					echo '<li class="mobile-filter-item" id="item' . $j++ . '">' . $contents[$i] . '</li>';
				}
			}
			echo '</ul></ul></div>';
			break;
		}
		endwhile;
		?>
	</div>

	<div class="page-content">
		<div class="col-lg-7 col-lg-offset-1 mobile-text-center mobile-no-padding mobile-para-padding-child-p">
			<?php
			while ( have_posts() ) : the_post();
			echo '<h2>' . get_the_title() . '</h2>';
			echo '<p>' . the_content() . '</p>';
			endwhile;
			?>
		</div>
		<div class="col-sm-3 hidden-md hidden-sm hidden-xs side-column">
			<div class="side-wrap">
				<h2>Resources</h2>
				<p><a href="<?php echo site_url().'/gallery';?>">View Gallery</a></p>
				<p><a href="<?php echo site_url().'/videos';?>">View Videos</a></p>
			</div>
			<div class="side-wrap last">
				<?php include('social.php');?>
			</div>
		</div>
	</div>
</div>
</div>
<?php 
//Get Map Data
wp_reset_query();
$args = array('posts_per_page' => -1,'post_type'=>'maps');
$postlist = new WP_Query($args);
// $map = "";
while ($postlist->have_posts()): 
	$postlist->the_post();
$location = get_field(  'maplatlng', $post->ID );
$desc = get_the_content();
$url = types_render_field('url');
$lat = $location['lat'];
$long = $location['lng'];
$icon = get_template_directory_uri()."/images/map_marker.png";
$map[] = array(get_the_title(),$lat,$long,$url,$desc,$icon);
endwhile;?>
<div class="row map-wrap">
	<div class="col-sm-10 col-sm-offset-1"><div id="map" ></div></div>
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
<script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>
<script type="text/javascript">
	function goTo(page) {
		if(!ValidURL(page))
			location.href = '<?php echo site_url();?>/' + page;
		else
			location.href = page;
	}
	function ValidURL(str) {
		var regex = /(http|https):\/\/(\w+:{0,1}\w*)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%!\-\/]))?/;
		if(!regex .test(str)) {
			return false;
		} else {
			return true;
		}
	}
	var player = $f(document.getElementById('player'));
	jQuery('.video-wrap').click(function() { 
		jQuery('.video-icon').hide();
		jQuery('#featured_video_wrapper iframe').show();
		jQuery('#featured_video_wrapper video-wrap').show();
		player.api('play');
	});
</script>







<script>var mapdata=<?php echo json_encode($map); ?></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/map.js"></script>