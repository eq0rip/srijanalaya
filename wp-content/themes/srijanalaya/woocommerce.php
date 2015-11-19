<?php
/**
Template Name: ecommerce
 */

get_header('all');
?>
<div class="page-wrapper wrapper">
	<div class="row">
		<div class="bar"></div>
		<div class="page-content">
			<div class="col-sm-12 no-padding">
				<div class="featured">
					<?php
					$args = array(
						'post_type' => 'product',
						'posts_per_page' => 2,
						'meta_query' => array(
							array(
								'key' 		=> '_visibility',
								'value' 	=> array('catalog', 'visible'),
								'compare' 	=> 'IN'
								),
							array(
								'key' 	=> '_featured',
								'value' => 'yes'
								)
							),
						);
					$i = 1;
					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) {
						while ( $loop->have_posts() ) : $loop->the_post();
						$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'large');
						if($imgsrc[0] == null || $imgsrc[0] == '')
							$image = '';
						else
							$image = $imgsrc[0];
						if($i == 1){
							echo "<a href='" . get_the_permalink() . "'><img src='" . $image . "' alt='" . get_the_title() . "' class='col-sm-8' /></a>";
							$i++;
						}
						elseif($i == 2){
							echo "<a href='" . get_the_permalink() . "'><img src='" . $image . "' alt='" . get_the_title() . "' class='col-sm-4' /></a>";
						}
						endwhile;
					} else {
						echo __( 'No products found' );
					}
					wp_reset_postdata();
					?>
				</div>
				<ul class="products">
					<?php
					$args = array(
						'post_type' => 'product',
						'posts_per_page' => 12
						);
					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) {
						while ( $loop->have_posts() ) : $loop->the_post();
						$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'large');
						if($imgsrc[0] == null || $imgsrc[0] == '')
							$image = '';
						else
							$image = $imgsrc[0];
						echo "<img src='" . $image . "' alt='" . get_the_title() . "' />";
						endwhile;
					} else {
						echo __( 'No products found' );
					}
					wp_reset_postdata();
					?>
				</ul><!--/.products-->	
			</div>
		</div>
	</div>
</div>
<?php 
get_footer('all');
get_footer(); 
?>