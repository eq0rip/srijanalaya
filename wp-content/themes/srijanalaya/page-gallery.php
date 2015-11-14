<?php
/**
Template Name: Gallery 
 */

get_header('all');
?>
<div class="row">

	<div class="col-sm-12 wrapper banner">
		<div class="banner-content">
			<h2>Current Event Promotion Phare</h2>
			<p>Suspendisse ultricies vel liberoisporta.Ut pharetra endisse ultricies vel libre</p>
			<button type="button" class="btn btn-default btn-lg vid-btn">View Project</button>
		</div>
	</div>
</div>
<div class="row" >

	<div style="width:100%:" id="filter_div filter_div-no-tag">
		<div id="custom_filters">
			<form class="" action="<?php bloginfo('url'); ?>/" method="get">
				<?php
				$dropdown_args = array(
					'hide_empty'       => 0,
					'hide_if_empty'    => false,
					'taxonomy'         => 'resource-taxonomy',
					'name'             => 'resource-id',
					'orderby'          => 'name',
					'hierarchical'     => true,
					'show_option_none' => 'Type',
					);
				$dropdown_args = apply_filters( 'taxonomy_parent_dropdown_args', $dropdown_args, 'resource-taxonomy', 'new' );
				$select=wp_dropdown_categories( $dropdown_args );
				?>
			</form>
			
			<select id="gallery">
				<option selected value="Location">Gallery</option>
				<?php 
				global $nggdb;
				$galleries = $nggdb->find_all_galleries();
				foreach ($galleries as $gallery):
					?>
				<option value="<?php echo $gallery->gid;?>"><?php echo $gallery->title;?></option>
			<?php endforeach; ?>
		</select>

		<ul class="transformSelect trans-element transformSelect3">
			<li class="">
				<span id='date_value_main'>
					<?php if(isset($_GET['from'])){
						echo $_GET['from'].' to '.$_GET['to'];
					}
					else {
						echo 'By Date';
					}
					?>

				</span>
				<ul style="display: none;" class="transformSelectDropdown">
					<li data-settings="" class="selected open"><span><a href="javascript:void(0)" onclick="apply_date_filter('week')">This Week</a></span></li>
					<li data-settings="" class="open"><span><a href="javascript:void(0)" onclick="apply_date_filter('Lweek')">Last Week</a></span></li>
					<li data-settings="" class="open"><span><a href="javascript:void(0)" onclick="apply_date_filter('month')">This month</a></span></li>
					<li data-settings="" class="open"><span><a href="javascript:void(0)" onclick="apply_date_filter('Lmonth')">Last Month</a></span></li>
					<li data-settings="" class="open"><span><a href="javascript:void(0)" onclick="apply_date_filter('year')">This year</a></span></li>
					<li data-settings="" class="open"><span><span>From:</span><input type="text" id="fromDate" value="" class="dropdate"><br/>
						<span>To:</span><input type="text" id="toDate" value="" class="dropdate"><br/>
						<button onclick="apply_date_filter('custom')" class="btn">Apply</button></span></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="row no-padding">
	<div class="col-sm-10 col-sm-offset-1">
		<div class="ngg-galleryoverview" id="ngg-gallery-316-1">
			<div class="ng-wrap hidden">
				<?php
				while ( have_posts() ) : the_post();
				echo '<h2>' . get_the_title() . '</h2>';
				echo '<p>' . the_content() . '</p>';
				endwhile;
				?>
			</div>
			<?php 
			global $nggdb;
			if(isset($_GET['gallery_id'])) {
				$gid = mysql_real_escape_string($_GET['gallery_id']);
				$galleries = $nggdb->get_gallery($gid);
				if(count($galleries) == 0) {
					$galleryColl = $nggdb->find_all_galleries();
					foreach ($galleryColl as $galleries) {
						$galleries = $nggdb->get_gallery($galleries->gid);
						get_gallery($galleries);
					}
				}
				else {
					get_gallery($galleries);
				}
			}
			else {
				$galleryColl = $nggdb->find_all_galleries();
				foreach ($galleryColl as $galleries) {
					$galleries = $nggdb->get_gallery($galleries->gid);
					get_gallery($galleries);
				}
			}

			?>

			<?php
			?>
			<!-- Pagination -->
			<div class="ngg-clear"></div>	</div>
		</div>
	</div>
	<?php 
	get_footer('all');
	get_footer(); 
	?>
	<script type="text/javascript">
	var resourceDropdown = document.getElementById("resource-id");
	var galleryDropdown = document.getElementById("gallery");
	resourceDropdown.onchange = onCatChange;
	galleryDropdown.onchange = onGalCatChange;

	function onCatChange() {
		if ( resourceDropdown.selectedIndex > 0 ) {
			location.href = "<?php echo esc_url( home_url( '/' ) ); ?>resources?cat="+resourceDropdown.options[resourceDropdown.selectedIndex].value;
		}
		else {
			location.href = "<?php echo esc_url( home_url( '/' ) ); ?>resources";
		}
	}
	function onGalCatChange() {
		if ( galleryDropdown.selectedIndex > 0 ) {
			location.href = "<?php echo esc_url( home_url( '/' ) ); ?>gallery/?gallery_id="+galleryDropdown.options[galleryDropdown.selectedIndex].value;
		}
		else {
			location.href = "<?php echo esc_url( home_url( '/' ) ); ?>gallery";
		}
	}

	//Transform
	jQuery('#resource-id').transformSelect({
		dropDownClass: "transformSelect transformSelect1",
	});
	jQuery('#gallery').transformSelect({
		dropDownClass: "transformSelect transformSelect2",
	});
</script>