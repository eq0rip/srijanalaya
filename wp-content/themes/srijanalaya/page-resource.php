<?php
/**
Template Name: Resource 
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

	<div style="width:100%:" id="filter_div">
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
		<div class="col-sm-8" id="tag_filter_div">
			<span class="active-tags">ACTIVE TAGS: </span>
			<ul>

			</ul>
		</div>
		<br/>
		<span class='tag-filter-title'>FILTER TAGS:</span>
		<ul class="fetch_tag">			
			<?php 
			$tags = get_terms('project_tags');
			foreach($tags as $tag) {
				?>
				<li class="col-sm-1"><a href="javascript:void(0)" onclick="add_filter( '<?php echo $tag->slug ?>' ,'tag_filter_div',0 )"><?php echo $tag->name;?></a></li>
				<?php }?>
			</ul>
		</div>
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
			<div class="col-sm-4 content">
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