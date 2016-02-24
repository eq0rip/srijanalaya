<?php
get_header('all');
get_header('mapbox');
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
				<?php
				$categories = wp_get_post_terms(get_the_id(),'project_categories');
				$cats = '';
				foreach ( $categories  as $category ) {
					$cats = $category->term_id;
				}
				$ids = get_the_id();
				$args=array('posts_per_page' => 10, 'post_type'=>'project', 'meta_key' => 'wpcf-project-date','orderby' => 'meta_value', 'order' => 'DESC', 'tax_query' => array(
					array(
						'taxonomy' => 'project_categories',
						'field' => 'id',
						'terms' => $cats
						)
					),
				'post__not_in' => array($ids)); 
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
			<div class="page-content project-inner-page-content">
				<div class="col-sm-7 col-sm-offset-1">
					<?php
					$location_addresss='';
					while ( have_posts() ) : the_post();
					$args = array('orderby' => 'name', 'order' => 'ASC', 'fields' => 'all');
					$terms = wp_get_post_terms( get_the_id(), 'project_categories', $args );
					foreach ($terms as $term) {
						$tax_term_id = $category->term_taxonomy_id;
						echo '<div class="resource-logo hidden-sm"><img src="' .z_taxonomy_image_url( $tax_term_id, NULL, TRUE ) .'" alt=""></div>';
						break;
					}
					echo '<h2>' . get_the_title() . '</h2>';
					?>
					<div class="info-wrap">
						<p class="small-text"><img align="middle" src="<?php echo get_template_directory_uri();?>/images/cal.png" class="outimg" alt="">
						<span class="bold">
							<?php echo ucwords($sri_locale['date'][$lang]);?>:
						</span>

						 <span class="col2"><?php $project_date=parseDate(date('Y-F-d',types_render_field('project-date', array('raw' => 'true')))) . ' ' . date('F Y',types_render_field('project-date', array('raw' => 'true')));echo $project_date;?></span></p>
						<p class="small-text"><img align="middle" src="<?php echo get_template_directory_uri();?>/images/time.png" class="outimg" alt="">
						<span class="bold">
							<?php echo ucwords($sri_locale['time'][$lang]);?>:
						</span>
						 <span class="col2"><?php $project_time=date('h:i A',types_render_field('project-date', array('raw' => 'true')));echo $project_time;?></span></p>
						<p class="small-text"><img align="middle" src="<?php echo get_template_directory_uri();?>/images/loc.png" class="outimg" alt="">
						<span class="bold">
							<?php echo ucwords($sri_locale['location'][$lang]);?>:
						</span>

							<span class="col2" id="locAdd"><?php 
								$connected = new WP_Query( array(
									'connected_type' => 'maps_to_project',
									'connected_items' => get_queried_object(),
									'nopaging' => true,
									) );
								if ( $connected->post ) :
									while ( $connected->post ) : $connected->the_post();
								$location =  get_field(  'maplatlng', $post->id );
								$location_address=$location['address'];
								echo $location_address;
								endwhile;
								endif;
								wp_reset_query();?>
							</span>
						</p>
						<p class="small-text"><img align="middle" src="<?php echo get_template_directory_uri();?>/images/age.png" class="outimg" alt="">
						<span class="bold">
							<?php echo ucwords($sri_locale['age group'][$lang]);?>:
						</span>
						 <span class="col2"><?php echo types_render_field('age-group');?></span></p>
						<?php
						if(strtolower(types_render_field('project-type')) == 'public') {?>
						<p class="small-text"><img align="middle" src="<?php echo get_template_directory_uri();?>/images/user.png" class="outimg" alt="">
						<span class="bold">
							<?php echo ucwords($sri_locale['participants'][$lang]);?>:
						</span>

						<span class="col2"><?php echo types_render_field('participants');?></span></p>
						<?php
					}
					echo '</div>'; 
					echo '<p class="text-content">' . auto_id_headings(get_the_content(), 'Project Details') . '</p>';
					endwhile;
					?>
				</div>
				<div class="col-sm-3 side-column">
					<div class="col-sm-10 sidebar no-padding">
						<div class="side-wrap no-padding">
							<h2><?php echo ucwords($sri_locale['get updates'][$lang]);?></h2>
							<p><a id="add_to_cal_submit" href="javascript:void(0)">Add to Calendar Sync with iCal, outlook, google calendar</a></p>
							<p class="subscribe-inner"><a href="#!">Alert for any updates</a></p>
							<form class="hidden" action="" method="GET">
								<input id="start_date" type="text" name="start" value="<?php echo $project_date.' '.$project_time;?>"/>
								<input id="end_date" type="text" name="end" value="<?php echo $project_date.' '.'6:00 PM';?>" />
								<input id="project_title" type="text" name="title" value="<?php echo get_the_title();?>" />
								<input id="project_description" type="text"  name="description" value="<?php echo types_render_field('summary');?>"/>
								<input id="project_location" type="text" name="venue" value="<?php echo $location_addresss; ?>" />

							</form>
						</div>
						<div class="side-transparent-block">
							<div class="close-info" onclick="close_msg();">X</div>
							<div class="content">
								<form action="" method="POST">
									<input id="p_id" type="hidden" name="post_id" value="<?php echo $ids;?>" />
									<input id="email" type="email" name="subscriber_email" placeholder="Enter your Email" />
									<input type="button" id="submit" class="btn" name="subscribe" value="Subscribe" />
								</form>
							</div>
						</div>
					</div>
					<div class="side-wrap">
						<h2><?php echo ucwords($sri_locale['resources'][$lang]);?></h2>
						<?php //view gallery
						$connected = new WP_Query( array(
							'connected_type' => 'gallery_to_project',
							'connected_items' => get_queried_object(),
							'nopaging' => true,
							) );
						if ( $connected->post ) :
							while ( $connected->post ) : $connected->the_post();
						$album_name =  get_the_title();
						$album_id = get_the_ID();
						echo '<p><a href="'.site_url().'/gallery/album/?id='.$album_id.'">'.ucwords($sri_locale['view gallery'][$lang]).'</a></p>';

						if($album_id!=" ") 
							break;
						endwhile;
						endif;
						?>
						<?php //view resource
						$connected = new WP_Query( array(
							'connected_type' => 'resource_to_project',
							'connected_items' => get_queried_object(),
							'nopaging' => true,
							) );
						if ( $connected->post ) :
							while ( $connected->post ) : $connected->the_post();
						$resource_link = get_the_permalink();
						echo '<p><a href="'.$resource_link.'">'.ucwords($sri_locale['view resource'][$lang]).'</a></p>';

						if($album_id!=" ") 
							break;
						endwhile;
						endif;
						?>

						<p><a href="<?php echo get_template_directory_uri();?>/videos"><?php echo ucwords($sri_locale['view videos'][$lang]);?></a></p>
					</div>
					<div class="side-wrap">
						<h2><?php echo ucwords($sri_locale['find us'][$lang]);?></h2>
						<div id="project-map"></div>
					</div>
					<div class="side-wrap last">
						<?php include('social.php');?>
					</div>
				</div>
			</div>
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
if($latlng['lat'] != null && $latlng['lat'] != '') {
	echo '<script>var lat = ' .$latlng['lat'] . '</script>';
	echo '<script>var lng = ' .$latlng['lng'] . '</script>';
}
endwhile;
endif;
wp_reset_query();
?>
<?php
get_footer();
get_footer('all');
?>

<script type="text/javascript">
	var map = L.map('project-map', {
		center: [lat,lng],
		zoom: 13
	});
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
	function close_msg() {
		jQuery('.side-transparent-block').fadeOut(300);
	}
	jQuery(document).ready(function(){
		jQuery('#project_location').val(jQuery('#locAdd').html());
		jQuery("#submit").click(function(){
			var p_id = jQuery("#p_id").val();
			var email = jQuery("#email").val();
			var dataString = 'p_id='+ p_id + '&email='+ email;
			if(email=='')
			{
				alert("Please enter email");
			}
			else
			{

				jQuery.ajax({
					type: "POST",
					url: "<?php echo get_template_directory_uri();?>/subscribe_user.php",
					data: dataString,
					cache: false,
					success: function(result){
						alert(result);
					}
				});
			}
			return false;

		});
		jQuery("#add_to_cal_submit").click(function(){
			var start=jQuery('#start_date').val();
			var end=jQuery('#end_date').val();
			var title=jQuery('#project_title').val();
			var description =jQuery('#project_description').val();
			var venue=jQuery('#project_location').val();
			var dataString = 'start='+start+'&end='+end+'&title='+title+'&description='+description+'&venue='+venue;
			jQuery.ajax({
				type: "GET",
				url: "<?php echo get_template_directory_uri();?>/add_to_cal.php",
				data: dataString,
				cache: false,
				success: function(result){
					window.location.href="<?php echo get_template_directory_uri();?>/add_to_cal.php?"+dataString;
				}
			});
			return false;
		});
	});
</script>