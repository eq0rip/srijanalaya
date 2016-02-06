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

	<?php include('gallery-new-filter.php');?>
</div>
<div class="row no-padding">
	<div class="col-sm-10 col-sm-offset-1 content-grid page-content">
		<div class="grid-gallery-overview" id="ngg-gallery-316-1" data-featherlight-gallery data-featherlight-filter="a">
			<div class="ng-wrap hidden">
				<?php
				// while ( have_posts() ) : the_post();
				// echo '<h2>' . get_the_title() . '</h2>';
				// echo '<p>' . the_content() . '</p>';
				// endwhile;
				?>
			</div>
			<?php 

			
			
			wp_reset_query();
			$args = array('posts_per_page'=>20,'post_type'=>'sri-gallery');
			$postslist = new WP_Query($args);
			while( $postslist->have_posts() ) : $postslist->the_post();
			$album = get_post_meta(get_the_ID(),'Image-meta',true);
			?>
			<div id="grid-gallery-image-0" class="grid-gallery-thumbnail-box col-md-6 col-lg-4 ">
				<div class="sri-album" data-albumId="<?php echo get_the_ID();?>">

					<img alt="" src="<?php echo wp_get_attachment_image($album[0]['image'], array(380,225), false, false );?>" width="380" height="225">

					<h2>
						<?php echo get_the_title();?>
					</h2>
				</div>
			</div> 
			<?php
			endwhile;
			

			?>

			<?php
			?>
			<!-- Pagination -->
			<div class="row navigation"><?php echo easy_wp_pagenavigation( $postslist ); ?>
				<div class="ngg-clear"></div>	</div>
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
		<script type="text/javascript">
			var resourceDropdown = document.getElementById("resource-id");
			var galleryDropdown = document.getElementById("gallery");
			var videoDropdown = document.getElementById("video-id");
			resourceDropdown.onchange = onCatChange;
			videoDropdown.onchange = onVidCatChange;

			function onCatChange() {
				if ( resourceDropdown.selectedIndex > 0 ) {
					location.href = "<?php echo esc_url( home_url( '/' ) ); ?>resources?cat="+resourceDropdown.options[resourceDropdown.selectedIndex].value;
				}
				else {
					location.href = "<?php echo esc_url( home_url( '/' ) ); ?>resources";
				}
			}

			function onVidCatChange() {
				if ( videoDropdown.selectedIndex > 0 ) {
					location.href = "<?php echo esc_url( home_url( '/' ) ); ?>videos/?cat="+videoDropdown.options[videoDropdown.selectedIndex].value;
				}
				else {
					location.href = "<?php echo esc_url( home_url( '/' ) ); ?>videos";
				}
			}
	//Transform
	jQuery('#resource-id').transformSelect({
		dropDownClass: "transformSelect transformSelect1",
	});
	
	jQuery('#video-id').transformSelect({
		dropDownClass: "transformSelect transformSelect33",
	});
	jQuery(document).ready(function(){
		jQuery('.sri-album').click(function(){
			location.href="<?php echo site_url();?>/gallery/album/?id="+jQuery(this).attr('data-albumId');
		});
	});
</script>
<script>
	new WOW().init();
</script>
