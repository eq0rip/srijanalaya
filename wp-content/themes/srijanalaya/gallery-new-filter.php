<div class="hidden-sm hidden-xs hidden-md" style="width:100%:" id="filter_div<?php if(get_the_slug() != 'resources') {echo ' filter_div-no-tag';}?>">
	<div id="custom_filters">
		<span class="filter_by">Filter By:</span>

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
<ul class="transformSelect transformSelect2 trans-element">
	<li><a href="<?php echo site_url();?>/gallery"><span>Gallery</span></a></li>
</ul>
	

		<?php
		$dropdown_args = array(
			'hide_empty'       => 0,
			'hide_if_empty'    => false,
			'taxonomy'         => 'videos_categories',
			'name'             => 'video-id',
			'orderby'          => 'name',
			'hierarchical'     => true,
			'show_option_none' => 'Video',
			);
		$dropdown_args = apply_filters( 'taxonomy_parent_dropdown_args', $dropdown_args, 'videos_categories', 'new' );
		$select=wp_dropdown_categories( $dropdown_args );
		?>
		<a href="<?php echo site_url();?>/srijanalaya-artist" class="artist-filter">Artist</a>
	</div>
	<?php if(get_the_slug() == 'resources') { ?>
	<div class="col-sm-8" id="tag_filter_div">
		<span class="active-tags">ACTIVE TAGS: </span>
		<ul>
			<?php 
			$tags = get_terms('resource_tags');
			foreach($tags as $tag){
				?>

				<li class="remove-tag active"><?php echo $tag->slug; ?>  x</li>

				<?php } ?>
			</ul>
			<?php } ?>
		</div>
	</div>


