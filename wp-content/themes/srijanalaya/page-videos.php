<?php
/**
Template Name: Video 
 */

get_header('all'); 
?>
<div class="row">
 	<?php $args=array('posts_per_page'=>-1,'post_type'=>'banner');
 	$postslist=new WP_Query($args);
 	while($postslist->have_posts() ) : $postslist->the_post();
 	if(strtolower(trim(get_the_title()))=='videos') :
 		?>
 	<div class="col-sm-12 wrapper banner" style="background:url(<?php echo types_render_field('banner-image',array('raw'=>'true'));?>">
 		<div class="banner-content">
 			<h2><?php echo types_render_field('banner-title')?></h2>
 			<p><?php  echo get_the_content();?></p>
 			<a class="btn btn-default btn-lg vid-btn" href="<?php echo types_render_field('redirect-link');?>">View Video</a>
 		<?php endif;endwhile;?>
 	</div>
 </div>
</div><div class="row" >
	<?php include('gallery-filters.php');?>
</div>
<div class="row no-padding">
	<div class="col-sm-10 col-sm-offset-1 content-grid page-content">
		<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		if(isset($_GET['cat'])) {
			$cate = mysql_real_escape_string($_GET['cat']);
			$args=array('posts_per_page'=>20, 'post_type'=>'video', 'orderby' => 'date', 'order' => 'DESC','tax_query' => array(
				array(
					'taxonomy' => 'videos_categories',
					'field'    => 'slug',
					'terms'    => $cate,
					),
				),'paged' => $paged,); 
		}
		else {
			$args=array('posts_per_page'=>20, 'post_type'=>'video', 'orderby' => 'date', 'order' => 'DESC','paged' => $paged,); 
		}
		$postslist=new WP_Query($args);  
		while($postslist->have_posts()) : $postslist->the_post();
		$urlvid = types_render_field('video-url',array('raw' => 'true'));
		$title = get_the_title();
		$title = str_replace('#', ' ', $title);
		$description = get_the_content();
		?>
		<div class="col-sm-4 content">
			<div class="img-wrapper">
				<iframe src="https://player.vimeo.com/video/<?php  echo $urlvid;?>" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
			<h4><?php echo $title; ?></h4>
			<p><?php echo $description; ?></p>
			<a href="https://vimeo.com/<?php echo $urlvid;?>" target="_blank">Watch Video</a>
		</div>
		<?php
		endwhile;
		?>
	</div>
	<div class="row navigation"><?php echo easy_wp_pagenavigation( $postslist ); ?>
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