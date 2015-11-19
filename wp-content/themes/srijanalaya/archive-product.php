<?php
/**
Template Name: Shop
 */

get_header('all');
?>
<div class="page-wrapper wrapper">
	<div class="row">
		<div class="bar"></div>
		<div class="page-content">
			<div class="col-sm-12 no-padding">
				<div class="featured row">
					<?php
					$args = array(
						'post_type' => 'product',
						'posts_per_page' => 2,
						'order' => 'DESC',
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
						$product = new WC_Product( get_the_ID() );
						$class = ($i == 1) ? "col-sm-8" : "col-sm-4";
						echo '<div class="product-item ' . $class . ' no-padding">';
						$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'large');
						if($imgsrc[0] == null || $imgsrc[0] == '')
							$image = '';
						else
							$image = $imgsrc[0];
						if($i == 1){
							echo '<div class="col-sm-12 no-padding product-img" style="background:url(' . $image . ')">';
							$i++;
						}
						elseif($i == 2){
							echo '<div class="col-sm-11 no-padding product-img" style="float:right;margin-right:20px;background:url(' . $image . ')">';
						}
						echo "<div class='content col-sm-12'>";
						echo "<a href='" . get_the_permalink() . "'><h2>" . get_the_title() . "</h2></a>";
						echo "<span class='description'>" . the_excerpt() . "</span>";
						echo "<span class='price'>" . $product->get_price_html() . "</span>";
						echo "</div>";
						echo "</div>";
						echo "</div>";
						endwhile;
					} else {
						echo __( 'No products found' );
					}
					wp_reset_postdata();
					?>
				</div>
				<div class="row contd-products">
					
					<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array(
						'post_type' => 'product',
						'posts_per_page' => 5,
						'order' => 'DESC',
						'paged' => $paged
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
						$class = ($i == 5) ? "col-sm-8" : "col-sm-4";
						?>
						<div class="<?php echo $class;?>">
							<div class="col-sm-12 inner-wrapper" style="background:url(<?php echo $image;?>)">
								<?php
								echo "<div class='content col-sm-12'>";
								echo "<a href='" . get_the_permalink() . "'><h2>" . get_the_title() . "</h2></a>";
								echo "<span class='description'>" . the_excerpt() . "</span>";
								echo "<span class='price'>" . $product->get_price_html() . "</span>";
								echo "</div>";
								?>
							</div>
						</div>
						<?php
						$i++;
						endwhile;
					} else {
						echo __( 'No products found' );
					}
					wp_reset_postdata();
					?>
				</div>
				<div class="row navigation"><?php echo easy_wp_pagenavigation( $loop ); ?>
			</div>
		</div>
	</div>
</div>
</div>
<?php 
get_footer('all');
get_footer(); 
?>
<script type="text/javascript">
	var last = jQuery('.easy-wp-page-nav li').last().find('a').attr('href');
	if(last != undefined || last != null) {
		last = last.substring(last.lastIndexOf('/page/') + 6, last.lastIndexOf('/'));
		jQuery('.contd-products').infinitescroll({
			navSelector  : ".navigation",            
                   // selector for the paged navigation (it will be hidden)
                   nextSelector : ".next",    
                   // selector for the NEXT link (to page 2)
                   itemSelector : ".contd-products",      
                   // selector for all items you'll retrieve
                   loadingText  : "Loading more...", 
                   donetext     : "I think this is the end... :/" ,
                   animate      : true,      
                   bufferPx     : 40,
                   padding		: 0,
                   maxPage: last
               });
	}
</script>