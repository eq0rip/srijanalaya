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
		<div class="grid-gallery-overview" id="ngg-gallery-316-1" data-featherlight-gallery data-featherlight-filter="a">
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
				$i=0;
				while( $postslist->have_posts() ) : $postslist->the_post();
				$i++;
				$album = get_post_meta(get_the_ID(),'Image-meta',true);
				//$imgsrc_thumbnail=wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'thumbnail');
				//$imgsrc_large=wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'large');
				?>
				<div id="grid-gallery-image-0 col-sm-4" class="grid-gallery-thumbnail-box">
					<div class="col-sm-4 sri-album" data-albumId="<?php echo get_the_ID();?>">
						<ul class="photostack<?php echo $i;?>">
							<?php
							foreach($album as $albm){
								$imgId = $albm['image']; ?>
								<img src="<?php echo wp_get_attachment_url($imgId);?>" width="380" height="225" alt="img01"/>
								<?php 
							}?>
						</ul>
						<h2>
							<?php echo get_the_title();?>
						</h2>

					</div>
				</div> 
				<?php
				endwhile;
			}
			else {
				wp_reset_query();
				$args = array('posts_per_page'=>20,'post_type'=>'sri-gallery','order'=>'rand');
				$postslist = new WP_Query($args);
				$i = 0;
				while( $postslist->have_posts() ) : $postslist->the_post();
				$i++;
				$album = get_post_meta(get_the_ID(),'Image-meta',true);
				?>
				<div id="grid-gallery-image-0 col-sm-4" class="grid-gallery-thumbnail-box">
					<div class="col-sm-4 sri-album wow bounceInUp" data-albumId="<?php echo get_the_ID();?>">
						
						<ul class="photostack<?php echo $i;?>">
							<?php
							$j=0;
							foreach($album as $albm){
								if($j++==3){break;}
								$imgId = $albm['image']; ?>
								<li><img alt="" src="<?php echo wp_get_attachment_url($imgId);?>" width="380" height="225"></li>
								<?php 
							}?>
						</ul>
						<h2>
							<?php echo get_the_title();?>
						</h2>
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
	jQuery(document).ready(function(){
		<?php for($j=1;$j<=$i;$j++){?>
			jQuery(".photostack<?php echo $j;?>").Photostack({
				degFrom:-10,
				degTo:10,
				animation:"move",
				animationSpeed:500,
				timespan:0,
				auto:false,
				preventClick:true
			});
			<?php } ?>
			jQuery('.sri-album').click(function(){
				location.href="<?php echo site_url();?>/gallery/album/?id="+jQuery(this).attr('data-albumId');
			});
		});
</script>
<script>
	new WOW().init();
</script>
