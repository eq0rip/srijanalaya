<?php
/**
Template Name: Timeline
 */

get_header(); ?>

<script src='https://api.mapbox.com/mapbox.js/v2.2.2/mapbox.js'></script>
<link href='https://api.mapbox.com/mapbox.js/v2.2.2/mapbox.css' rel='stylesheet' />
 <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.css" />
 <script src="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/0.4.0/MarkerCluster.Default.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/0.4.0/MarkerCluster.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/0.4.0/leaflet.markercluster-src.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/0.4.0/leaflet.markercluster.js"></script>

<style type="text/css">
	#map { height: 700px;width:100%; }

</style>
<?php
	$args=array('posts_per_page'=>10,'post_type'=>'maps');
	$postlist=new WP_Query($args);
	while ($postlist->have_posts()):$postlist->the_post();
	$desc=types_render_field('short-description');
	$url=types_render_field('url');
	$lat=types_render_field('lat');
	$long=types_render_field('longi');
	$icon=get_template_directory_uri()."/icon.png";
	$map[]=array(get_the_title(),$lat,$long,$url,$desc,$icon);
	endwhile;
?>
<script>var mapdata=<?php echo json_encode($map); ?></script>
 <div id="map"></div>
 <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/map.js"></script>


 