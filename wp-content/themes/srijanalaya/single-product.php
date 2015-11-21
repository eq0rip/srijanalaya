<?php
/**

 */

get_header('all');
wp_reset_query();
?>
<div class="page-wrapper wrapper">
	<div class="row">
		<div class="bar"></div>
		<div class="page-content">
			<div class="col-sm-12 no-padding">
				<div class="product row">
					<div class="product-item">
						<?php
						global $product;
						$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'large');
						if($imgsrc[0] == null || $imgsrc[0] == '')
							$image = '';
						else
							$image = $imgsrc[0];
						?>
						<div class="col-sm-8 product-img" style="background:url(<?php echo $image;?>)">
						</div>
						<div class="col-sm-4 product-des">
							<div class="col-sm-11">
								<div class="description-wrap">
									<h2><?php echo get_the_title();?></h2>
									<p>Code: <?php echo $product->get_sku();?></p>
									<h4>Product Story</h4>
									<p><?php echo get_the_content();?></p>
								</div>
								<div class="lower-description-wrap">
									<h4>Description</h4>
									<p><?php echo get_the_excerpt();?></p>

									<?php if ( $product->is_in_stock() ) : ?>

										<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

										<form class="cart" method="post" enctype='multipart/form-data'>
											<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

											<?php
											if ( ! $product->is_sold_individually() ) {
												woocommerce_quantity_input( array(
													'min_value'   => apply_filters( 'woocommerce_quantity_input_min', 1, $product ),
													'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->backorders_allowed() ? '' : $product->get_stock_quantity(), $product ),
													'input_value' => ( isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : 1 )
													) );
											}
											?>

											<input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />

											<button type="submit" class="single_add_to_cart_button button alt"><img src="<?php echo get_template_directory_uri();?>/images/shop-icon.png" width="15px" height="15px"/> Add to my Shopping Bag</button>

											<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
										</form>

										<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

									<?php endif; ?>
									<?php
									$availability      = $product->get_availability();
									$availability_html = empty( $availability['availability'] ) ? '' : '<p class="stock ' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</p>';

									echo apply_filters( 'woocommerce_stock_html', $availability_html, $availability['availability'], $product );
									?>

									<?php include('social-expand.php');?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row gallary-image">
					<?php
					$attachment_ids = $product->get_gallery_attachment_ids();
					$j = 1;
					foreach( $attachment_ids as $attachment_id ) 
					{
						$class1 = ($j == 1) ? 'col-sm-8' : 'col-sm-4';
						$image = wp_get_attachment_url( $attachment_id );
						echo '<div class="' . $class1 . ' no-padding">';
						?>
						<div class="<?php echo $j; if ($j == 2) {echo 'col-sm-11';}?> product-img" style="background:url(<?php echo $image;?>);<?php if ($j == 2) {echo 'margin-left:12px';} ?>">
						</div>
						<?php
						echo '</div>';
						$j = ($j == 2) ? 1 : ++$j;
					}
					?>
					
				</div>
				<div class="row related-products">
					<h5>Shop More Products</h5>
					<?php
					$related = $product->get_related( 3 );

					if ( sizeof( $related ) == 0 ) return;

					$args = apply_filters( 'woocommerce_related_products_args', array(
						'post_type'            => 'product',
						'ignore_sticky_posts'  => 1,
						'no_found_rows'        => 1,
						'posts_per_page'       => 3,
						'orderby'              => $orderby,
						'post__in'             => $related,
						'post__not_in'         => array( $product->id )
						) );

					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) {
						while ( $loop->have_posts() ) : $loop->the_post();
						$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'large');
						if($imgsrc[0] == null || $imgsrc[0] == '')
							$image = '';
						else
							$image = $imgsrc[0];
						?>
						<div class="col-sm-4">
							<div class="col-sm-12 inner-wrapper" style="background:url(<?php echo $image;?>)">
								<?php
								echo "<div class='content col-sm-12'>";
								echo "<a href='" . get_the_permalink() . "'><h2>" . get_the_title() . "</h2></a>";
								echo "<span class='description'>" . the_excerpt() . "</span>";
								echo apply_filters( 'woocommerce_loop_add_to_cart_link', sprintf('<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="%s button product_type_%s">%s</a>', esc_url( $link['url'] ), esc_attr( $product->id ), esc_attr( $product->get_sku() ), esc_attr( $link['class'] ), esc_attr( $product->product_type ), esc_html( $link['label'] ) ), $product, $link );
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
					?>
					
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php 
get_footer('all');
get_footer(); 
?>
