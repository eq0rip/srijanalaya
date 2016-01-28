<div class="hidden-sm hidden-xs hidden-md" style="width:100%:" id="filter_div<?php if(get_the_slug() != 'resources') {echo ' filter_div-no-tag';}?>">
	<div id="custom_filters">
		<span class="filter_by">Filter By:</span>

	

		<?php
		$dropdown_args = array(
			'hide_empty'       => 0,
			'hide_if_empty'    => false,
			'taxonomy'         => 'gallery_categories',
			'name'             => 'gallery',
			'value_field'	     => 'slug',	
			'orderby'          => 'name',
			'hierarchical'     => true,
			'show_option_none' => 'Gallery',
			);
		$dropdown_args = apply_filters( 'taxonomy_parent_dropdown_args', $dropdown_args, 'gallery_categories', 'new' );
		$select=wp_dropdown_categories( $dropdown_args );
		?>

		
	</div>

	</div>


