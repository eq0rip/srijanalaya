<?php
/**
Template Name: Resource 
 */

get_header('all'); 
wp_reset_query();
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
	<?php include('gallery-filters.php');?>
</div>
<div class="row no-padding">
	<div class="col-sm-10 col-sm-offset-1 content-grid page-content">
		<?php
		if(isset($_GET['cat'])) {
			$cate = mysql_real_escape_string($_GET['cat']);
			$args=array('posts_per_page'=>20, 'post_type'=>'resource', 'orderby' => 'date', 'order' => 'DESC','tax_query' => array(
				array(
					'taxonomy' => 'resource-taxonomy',
					'field'    => 'slug',
					'terms'    => $cate,
					),
				),); 
		}
		else {
			$args=array('posts_per_page'=>20, 'post_type'=>'resource', 'orderby' => 'date', 'order' => 'DESC'); 
		}
		$postslist=new WP_Query($args);  
		while($postslist->have_posts()) : $postslist->the_post();
			$tags=get_the_terms( $post->id, 'resource_tags');//tag array

			$tag='';//tag string
			if(!empty($tags)) {
				foreach ($tags as $key=>$values){
					$tag.=' '.$values->slug;
				}
			}
			$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'large');
			if($imgsrc[0] == null || $imgsrc[0] == '')
				$image = '';
			else
				$image = $imgsrc[0];
			$cats = array();
			$args = array('orderby' => 'name', 'order' => 'ASC', 'fields' => 'all');
			$terms = wp_get_post_terms( get_the_id(), 'resource-taxonomy', $args );
			foreach($terms as $c)
			{
				$cat = $c;
				array_push($cats,$cat->name);
			}

			if(sizeOf($cats)>0)
			{
				$post_categories = implode(',',$cats);
			} else {
				$post_categories = "Not Assigned";
			}
			?>
			<div class="col-sm-4 content <?php echo $tag;?>">
				<div class="img-wrapper">
					<img src="<?php echo $image;?>" />
				</div>
				<h4><?php the_title(); ?></h4>
				<p><?php echo types_render_field('short-description'); ?></p>
				<a href="<?php echo get_the_permalink();?>">Read More</a>
				<p class='category'><?php echo $post_categories; ?></p>
			</div>
			<?php
			endwhile;
			?>
		</div>
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
		if(jQuery(this).hasClass('inactive'))
		{
			jQuery(this).removeClass("inactive");
			jQuery(this).addClass("active");
			var chooosen_tags=[];
			var query='#tag_filter_div' + ' ul li';
			jQuery(query).each(function(){
				if(jQuery(this).hasClass('active'))
				{	
					var tooPush=jQuery(this).text().replace(" x","");
					chooosen_tags.push(tooPush);
				}
				else {
				
				}
			});
			apply_filter(chooosen_tags,'.content');
		}
		else{
			jQuery(this).addClass('inactive');
			jQuery(this).removeClass('active');
			if(jQuery('#tag_filter_div').find('.active').length==0) {
				jQuery('.content').show(function (){

					//filter_timeline();
				});
			}
			else {

				var choosen_tags=[];
				var query='#tag_filter_div' +' ul li';
				jQuery(query).each(function () {
					if(jQuery(this).hasClass('active'))
					{
						var toPush=jQuery(this).text().replace(" x","");
						choosen_tags.push(toPush);
					}

				});
				apply_filter(choosen_tags,'.content');
			}
		}
	});// click end

</script>