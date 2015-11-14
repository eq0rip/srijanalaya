<div style="width:100%:" id="filter_div<?php if(get_the_slug() != 'resources') {echo ' filter_div-no-tag';}?>">
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

	<form class="" action="<?php bloginfo('url'); ?>/" method="get">
		<?php
		$dropdown_args = array(
			'hide_empty'       => 0,
			'hide_if_empty'    => false,
			'taxonomy'         => 'videos_categories',
			'name'             => 'video-id',
			'orderby'          => 'name',
			'hierarchical'     => true,
			'show_option_none' => 'Type',
			);
		$dropdown_args = apply_filters( 'taxonomy_parent_dropdown_args', $dropdown_args, 'videos_categories', 'new' );
		$select=wp_dropdown_categories( $dropdown_args );
		?>
	</form>	
</div>
<?php if(get_the_slug() == 'resources') { ?>
<div class="col-sm-8" id="tag_filter_div">
	<span class="active-tags">ACTIVE TAGS: </span>
	<ul>

	</ul>
</div>
<br/>
<span class='tag-filter-title'>FILTER TAGS:</span>
<ul class="fetch_tag">			
	<?php 
	$tags = get_terms('resource_tags');
	foreach($tags as $tag) {
		?>
		<li class="col-sm-1"><a href="javascript:void(0)" onclick="resource_filter( '<?php echo $tag->slug ?>','tag_filter_div', 0)"><?php echo $tag->name;?></a></li>
		<?php }?>
	</ul>
	<?php } ?>
</div>