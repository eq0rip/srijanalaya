<?php
/**
Template Name: About 
 */

get_header('all');
get_header('mapbox'); ?>
<div class="page-wrapper wrapper">
	<div class="row map-wrap">
		<div id="map"></div>
		<div class="mid-nav"></div>
	</div>
	<div class="row">
		<div class="bar"></div>
		<div class="page-content">
			<div class="col-sm-7 col-sm-offset-1">
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
$args = array('posts_per_page'=>10,'post_type'=>'maps');
$postlist = new WP_Query($args);
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
<script>var mapdata = '<?php echo json_encode($map); ?>'; </script>
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/map.js"></script>