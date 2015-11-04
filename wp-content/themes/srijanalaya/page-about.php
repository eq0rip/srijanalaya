<?php
/**
Template Name: About 
 */

get_header('all');
get_header('mapbox'); 
wp_reset_query();
?>
<div class="page-wrapper wrapper">
	<div class="row map-wrap">
		<div id="map"></div>
	</div>
	<div class="row">
		<div class="mid-nav">
			<span class="marquee-left"><img src="<?php echo get_template_directory_uri();?>/images/arrow-left.png" /></span>
			<?php
			wp_reset_query();
			$pageTitle = get_the_title();
			$args = array( 'posts_per_page' => 10, 'post_type' => 'sri-menu' );
			$postslist = new WP_Query( $args );
			while ( $postslist->have_posts() ) : $postslist->the_post();
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
				echo '<p>' . the_content() . '</p>';
				endwhile;
				?>
			</div>
			<div class="col-sm-2">
				<h2>Resources</h2>
				<p><a href="#!">View Gallery</a></p>
				<p><a href="#!">View Videos</a></p>
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
$desc = types_render_field('short-description');
$url = types_render_field('url');
$lat = types_render_field('lat');
$long = types_render_field('longi');
$icon = get_template_directory_uri()."/icon.png";
$map[] = array(get_the_title(),$lat,$long,$url,$desc,$icon);
endwhile;
get_footer('all');
get_footer(); 
?>
<script>var mapdata=<?php echo json_encode($map); ?></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/map.js"></script>