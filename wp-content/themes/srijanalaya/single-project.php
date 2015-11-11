<?php
get_header('all');
get_header('mapbox');
wp_reset_query();
$location = array();
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
				$count = 4;
				$addr = '';
				$connected = new WP_Query( array(
					'connected_type' => 'maps_to_project',
					'connected_items' => get_queried_object(),
					'nopaging' => true,
					) );
				if ( $connected->post ) :
					while ( $connected->post ) : $connected->the_post();
				global $location;
				$location =  get_field(  'maplatlng', $post->id );
				$addr = $location['address'];
				$count = $count + 2;
				endwhile;
				endif;

				echo $location . 'ASDzfg' . $count . ' ' . $addr;
				while ( have_posts() ) : the_post();
				
				// wp_reset_postdata();
				
				echo '<h2>' . get_the_title() . '</h2>';
				?>
				<p class="small-text"><img align="middle" src="<?php echo get_template_directory_uri();?>/images/participant-icon.png" class="outimg" alt="">Date: <span class="col2"><?php echo parseDate(date('Y-F-d',types_render_field('project-date', array('raw' => 'true')))) . ' ' . date('F Y',types_render_field('project-date', array('raw' => 'true')));?></span></p>
				<p class="small-text"><img align="middle" src="<?php echo get_template_directory_uri();?>/images/participant-icon.png" class="outimg" alt="">Time: <span class="col2"><?php echo date('h:i A',types_render_field('project-date', array('raw' => 'true')));?></span></p>
				<p class="small-text"><img align="middle" src="<?php echo get_template_directory_uri();?>/images/participant-icon.png" class="outimg" alt="">Location: <span class="col2"><?php echo $location['address'];?></span></p>
				<p class="small-text"><img align="middle" src="<?php echo get_template_directory_uri();?>/images/participant-icon.png" class="outimg" alt="">Participants: <span class="col2"><?php echo date('F Y',types_render_field('project-date', array('raw' => 'true')));?></span></p>
				<?php
				echo '<p>' . auto_id_headings(get_the_content(), 'Project Details') . '</p>';
				endwhile;
				?>
			</div>
			<div class="col-sm-2">
				<div class="side-wrap">
					<h2>Resources</h2>
					<p><a href="#!">View Gallery</a></p>
					<p><a href="#!">View Videos</a></p>
				</div>
				<div class="side-wrap">
					<h2>Find Us</h2>
					<div id="project-map"></div>
				</div>
				<div class="side-wrap">
					<?php include('social.php');?>
					<div class="side-wrap">
					</div>
				</div>
			</div>
		</div>
		<?php
		$connected = new WP_Query( array(
			'connected_type' => 'maps_to_project',
			'connected_items' => get_queried_object(),
			'nopaging' => true,
			) );
		if ( $connected->post ) :
			while ( $connected->post ) : $connected->the_post();
		$latlng = get_field(  'maplatlng', $post->ID );
		echo '<script>var lat = ' .$latlng['lat'] . '</script>';
		echo '<script>var lng = ' .$latlng['lng'] . '</script>';
		endwhile;
		endif;
		wp_reset_query();
		?>
		<?php
		get_footer();
		get_footer('all');
		?>
		
		<script type="text/javascript">
			var map = L.map('project-map').setView([lat,lng], 7);
			L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
				maxZoom: 24,
				id: 'eq0rip.no3hg91b',
				accessToken: 'pk.eyJ1IjoiZXEwcmlwIiwiYSI6ImNpZncycDR4bTJpN3B1d2tyaGRwM3NrN3IifQ.xOe7qWLwCDbVr-edpprcdg'
			}).addTo(map);
			var iconurl = 'http://localhost/srijanalaya/wp-content/themes/srijanalaya/icon.png';
			var greenIcon = L.icon({
				iconUrl: iconurl,
    iconSize:     [32, 32], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});
			L.marker([lat,lng], {icon: greenIcon}).addTo(map);

		</script>