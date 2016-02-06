<?php
/*
Template Name: Album
 */

get_header('all');
?>

<div class="row" >

	<?php include('gallery-new-filter.php');?>
</div>
<div class="row no-padding">
	<div class="col-sm-10 col-sm-offset-1 content-grid page-content">
		<div class="grid-gallery-overview" id="ngg-gallery-316-1">
			<div class="ng-wrap ">
				<?php
				if(isset($_GET['id'])) {
					$aid = $_GET['id'];
					while ( have_posts() ) : the_post();
					echo '<h2>' . get_the_title($aid) . '</h2>';
					echo '<p>' . the_content() . '</p><hr><br/>';
					endwhile;
					?>
				</div>
				<?php 

				$album=get_post_meta($aid,'Image-meta',true);
				?>
				<div id="grid-gallery-image-0" class="grid-gallery-thumbnail-box">
					<div class="sri-album " data-albumId="<?php echo get_the_ID();?>">
						<?php
						$i=0;
						foreach($album as $albm){
							$imgId = $albm['image'];
							if($i==0) 
							{
								$animation = "slideInUp";
								$i++;
							}
							else if($i==1) 
							{
								$animation = "slideInUp";
								$i++;
							}
							else if($i==2) 
							{
								$animation = "slideInUp";
								$i=0;
							}
							?>
							<div class="col-lg-4 col-md-6 image_wrapper <?php echo $animation;?>" >
								<a href="<?php echo wp_get_attachment_url($imgId);?>"  title="<?php echo $albm['description'];?>" class="swipebox"><img src="<?php echo wp_get_attachment_image($imgId, array(380,225), false, false);?>" width="380" height="225" alt=""/></a>
								<h2><?php echo $albm['title'];?></h2>
							</div>
							<?php 

						}?>


					</div>
				</div> 
				<?php
			}
			else {


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
		<script>
			new WOW().init();
		</script>
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
		jQuery( '.swipebox' ).swipebox({
			useCSS : true, // false will force the use of jQuery for animations
		useSVG : true, // false to force the use of png for buttons
		hideBarsDelay : false, // delay before hiding bars on desktop
	});
		
	});
</script>
