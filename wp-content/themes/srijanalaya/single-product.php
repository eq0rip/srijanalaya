<?php
/**

 */

get_header('all');
wp_reset_query();
?>
<div class="page-wrapper wrapper">
	<div class="row">
		<div class="bar">
			<div id="custom_filters" class="mid-nav">
				<form class="" action="<?php bloginfo('url'); ?>/" method="get">
					<?php
					$dropdown_args = array(
						'hide_empty'       => 0,
						'hide_if_empty'    => false,
						'taxonomy'         => 'product_cat',
						'name'             => 'product-id',
						'orderby'          => 'name',
						'hierarchical'     => true,
						'show_option_none' => 'Type',
						);
					$dropdown_args = apply_filters( 'taxonomy_parent_dropdown_args', $dropdown_args, 'product_cat', 'new' );
					$select=wp_dropdown_categories( $dropdown_args );
					$cat = (isset($_GET['cat'])) ? '&cat=' . str_replace(' ','-',strtolower($_GET['cat'])) : '';
					?>
				</form>
				<div class="mid-nav-inner">
					<ul>
						<li class="subpageMenu first <?php if(!isset($_GET['product_type']) ||  $_GET['product_type'] == 'latest') {echo 'active';}?>" ><a href="<?php echo site_url();?>/shop?product_type=latest<?php echo $cat;?>">Latest</a></li>
						<li style="margin-left: -6px;" class="subpageMenu <?php if( trim(strtolower($_GET['product_type'])) == 'recommended') { echo 'active';}?>" ><a href="<?php echo site_url();?>/shop?product_type=recommended<?php echo $cat;?>">Recommended</a></li>
						<li style="margin-left: -6px;" class="subpageMenu <?php if( trim(strtolower($_GET['product_type'])) == 'popular') { echo 'active';}?>" ><a href="<?php echo site_url();?>/shop?product_type=popular<?php echo $cat;?>">Most Popular</a></li>
					</ul>
				</div>
			</div>
		</div>
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
									<h4><?php echo $product->get_price_html();?></h4>
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
								echo "<span class='price'>" . $product->get_price_html() . "</span>";
								if ( $product->is_in_stock() ) : ?>

								<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

								<form class="cart" method="post" enctype='multipart/form-data'>
									<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

									<input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />

									<button type="submit" class="single_add_to_cart_button button alt"><img src="<?php echo get_template_directory_uri();?>/images/shop-icon.png" width="25px" height="25px"/></button>

									<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
								</form>

								<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

							<?php endif;
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
<script type="text/javascript">
	var productDd = document.getElementById("product-id");
	productDd.onchange = onProductCatChange;
	function onProductCatChange() {
		if ( productDd.selectedIndex > 0 ) {
			location.href = "<?php echo esc_url( home_url( '/' ) ); ?>shop/?cat="+productDd.options[productDd.selectedIndex].value;
		}
		else {
			location.href = "<?php echo esc_url( home_url( '/' ) ); ?>shop";
		}
	}
</script>