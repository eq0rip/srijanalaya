<?php
/**
Template Name: Gallery 
 */

get_header('all');
?>
<div class="row">
	<?php $args=array('posts_per_page'=>-1,'post_type'=>'banner');
	$postslist=new WP_Query($args);
	while($postslist->have_posts() ) : $postslist->the_post();
	if(strtolower(trim(get_the_title()))=='gallery') :
		?>
	<div class="col-sm-12 wrapper banner" style="background:url(<?php echo types_render_field('banner-image',array('raw'=>'true'));?>">
		<div class="banner-content">
			<h2><?php echo types_render_field('banner-title')?></h2>
			<p><?php  echo get_the_content();?></p>
			<a class="btn btn-default btn-lg vid-btn" href="<?php echo types_render_field('redirect-link');?>">View Gallery</a>
		<?php endif;endwhile;?>
	</div>
</div>
</div>
<div class="row" >

	<?php include('gallery-filters.php');?>
</div>
<div class="row no-padding">
	<div class="col-sm-10 col-sm-offset-1 content-grid page-content">
		<div class="ngg-galleryoverview" id="ngg-gallery-316-1" data-featherlight-gallery data-featherlight-filter="a">
			<div class="ng-wrap hidden">
				<?php
				while ( have_posts() ) : the_post();
				echo '<h2>' . get_the_title() . '</h2>';
				echo '<p>' . the_content() . '</p>';
				endwhile;
				?>
			</div>
			<?php 

			if(isset($_GET['gallery_id'])) {
				$gid = $_GET['gallery_id'];
				$args=array('posts_per_page' => -1, 'post_type'=>'sri-gallery',
					'tax_query' => array(
						array(
							'taxonomy' => 'gallery_categories',
							'field'    => 'slug',
							'terms'    => $gid							)
						)
					);
				wp_reset_query(); 
				$postslist = new WP_Query($args);
				while( $postslist->have_posts() ) : $postslist->the_post();
				$imgsrc_thumbnail=wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'thumbnail');
				$imgsrc_large=wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'large');
				?>
				<div id="ngg-image-0 col-sm-4" class="ngg-gallery-thumbnail-box">
					<div class="ngg-gallery-thumbnail">
						<a href="<?php echo $imgsrc_large[0];?>" title="<?php echo get_the_content();?>" 	>
							<img title="<?php echo get_the_title();?>" alt="" src="<?php echo $imgsrc_thumbnail[0]?>" width="380" height="225" style="max-width:none;">
						</a>


					</div>
				</div> 
				<?php
				endwhile;
			}
			else {
				wp_reset_query();
				$args = array('posts_per_page'=>20,'post_type'=>'sri-gallery','order'=>'rand');
				$postslist = new WP_Query($args);
				while( $postslist->have_posts() ) : $postslist->the_post();
				$imgsrc_thumbnail=wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'thumbnail');
				$imgsrc_large=wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'large');
				?>
				<div id="ngg-image-0 col-sm-4" class="ngg-gallery-thumbnail-box">
					<div class="ngg-gallery-thumbnail">
						<a href="<?php echo $imgsrc_large[0];?>" title="<?php echo get_the_content();?>" 	>
							<img title="<?php echo get_the_title();?>" alt="" src="<?php echo $imgsrc_thumbnail[0]?>" width="380" height="225" style="max-width:none;">
						</a>
					</div>
				</div> 
				<?php
				endwhile;
			}

			?>

			<?php
			?>
			<!-- Pagination -->
			<div class="row navigation"><?php echo easy_wp_pagenavigation( $postslist ); ?>
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
			var videoDropdown = document.getElementById("video-id");
			resourceDropdown.onchange = onCatChange;
			galleryDropdown.onchange = onGalCatChange;
			videoDropdown.onchange = onVidCatChange;

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
			function onVidCatChange() {
				if ( galleryDropdown.selectedIndex > 0 ) {
					location.href = "<?php echo esc_url( home_url( '/' ) ); ?>videos/?cat="+galleryDropdown.options[galleryDropdown.selectedIndex].value;
				}
				else {
					location.href = "<?php echo esc_url( home_url( '/' ) ); ?>videos";
				}
			}

	//Transform
	jQuery('#resource-id').transformSelect({
		dropDownClass: "transformSelect transformSelect1",
	});
	jQuery('#gallery').transformSelect({
		dropDownClass: "transformSelect transformSelect2",
	});
	jQuery('#video-id').transformSelect({
		dropDownClass: "transformSelect transformSelect3",
	});

	jQuery("#tag_filter_div ul").on("click",'li', function(){
		jQuery(this).remove();
		var hide_project=jQuery(this).text().replace(" x","");
		hide_project='.'+hide_project;
		jQuery(hide_project).hide('fast');
		if(jQuery('#tag_filter_div ul').children().length == 0) {
			jQuery('.ccontent').show('fast');
		}
		else {
			var choosen_tags=[];
			var query='#tag_filter_div' +' ul li';
			jQuery(query).each(function () {
				var toPush=jQuery(this).text().replace(" x","");
				choosen_tags.push(toPush);
				apply_filter(choosen_tags,'.content');
			});
		}
	});
</script>