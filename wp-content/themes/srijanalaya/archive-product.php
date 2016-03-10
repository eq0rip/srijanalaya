<?php
/**
 */
get_header('all');
wp_reset_query();
?>
<div class="page-wrapper wrapper">
	<div class="row lessmargin">
		<div class="bar hidden-sm hidden-xs">
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
						'show_option_none' => 'Collections',
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
		<div class="page-content mobile-no-margin" id="shopwrap">
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
						$class = ($i == 1) ? "col-md-8" : "col-md-4";
						echo '<div class="product-item ' . $class . '">';
						$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'large');
						if($imgsrc[0] == null || $imgsrc[0] == '')
							$image = '';
						else
							$image = $imgsrc[0];
						if($i == 1){ ?>
							<div class="col-sm-12 product-img">
								<div class="product-img-inside" style="background:url(<?php echo $image;?>)"></div>
							<?php
							$i++;
						}
						elseif($i == 2){ ?>
							<div class="col-sm-11 no-padding product-img" style="float:right;margin-right:28px;">
							<div class="product-img-inside" style="background:url(<?php echo $image;?>"></div>
						<?php
						}
						echo "<div class='content col-xs-12 mobile-top-auto mobile-height-auto mobile-bottom-0'>";
						echo "<a href='" . get_the_permalink() . "'><h2>" . get_the_title() . "</h2></a>";
						echo "<span class='description hidden-xs'>" . get_the_excerpt() . "</span></br>";
						echo "<span class='price'>" . $product->get_price_html() . "</span>";
						if ( $product->is_in_stock() ) : ?>

						<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

						<form class="cart cart-form" method="post" enctype='multipart/form-data'>
							<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

							<input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />

							<button type="submit" class="single_add_to_cart_button button alt"><img src="<?php echo get_template_directory_uri();?>/images/shop-icon.png" width="25px" height="25px"/></button>

							<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
						</form>

						<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

					<?php endif;
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
				$cat = (isset($_GET['cat'])) ? str_replace(' ','-',strtolower($_GET['cat'])) : '';
				if(isset($_GET['product_type']) && $_GET['product_type'] != 'latest') {
					$gid = mysql_real_escape_string($_GET['product_type']);
					if( trim(strtolower($gid)) == 'recommended') {
						$args=array('posts_per_page'=>5, 'post_type'=>'product', 'orderby' => 'date', 'order' => 'DESC', 	'meta_query' => array(
							array(
								'key' 		=> '_visibility',
								'value' 	=> array('catalog', 'visible'),
								'compare' 	=> 'IN'
								),
							array(
								'key' 	=> '_featured',
								'value' => 'yes'
								)
							),'paged' => $paged, 'product_cat' => $cat); 
					}
					elseif( trim(strtolower($gid)) == 'popular') {
						$args=array('posts_per_page'=>5, 'post_type'=>'product', 'orderby' => 'meta_value_num','meta_key' => 'wpb_post_views_count', 'order' => 'DESC','paged' => $paged,'product_cat' => $cat); 
					}
				}
				else {
					$args = array(
						'post_type' => 'product',
						'posts_per_page' => 5,
						'order' => 'DESC',
						'paged' => $paged,
						'product_cat' => $cat
						);
				}
				$i = 1;
				$loop = new WP_Query( $args );
				if ( $loop->have_posts() ) {
					while ( $loop->have_posts() ) : $loop->the_post();
					$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'large');
					if($imgsrc[0] == null || $imgsrc[0] == '')
						$image = '';
					else
						$image = $imgsrc[0];
					$class = ($i == 5) ? "col-md-8" : "col-md-4";
					?>
					<div class="<?php echo $class;?> img-cov">
						<div class="col-sm-12 inner-wrapper">
							<div class="product-img" style="background:url(<?php echo $image;?>)"></div>
							<?php
							echo "<div class='content col-xs-12 mobile-top-auto mobile-height-auto mobile-bottom-0'>";
							echo "<a href='" . get_the_permalink() . "'><h2>" . get_the_title() . "</h2></a>";
							echo "<span class='description hidden-xs'>" . get_the_excerpt() . "</span></br>";
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
			wp_reset_postdata();
			?>
		</div>
		<div class="row navigation mobile-height-0"><?php echo easy_wp_pagenavigation( $loop ); ?>
		</div>
	</div>
</div>
</div>
</div>
<?php 
include('newsletter.php'); 
if(is_mobile()) {
	include('quotewrap.php');
	get_footer('mobile');
}
else {
	get_footer('all');
	get_footer();
}
?>

<script type="text/javascript">
	var cat = "<?php echo $_GET['cat']; ?>";
	jQuery('#product-id').transformSelect({
		dropDownClass: "transformSelect transformSelect1",
	});
	if(cat != undefined && cat.trim() != '') {
		jQuery('.transformSelect1 li span').html(cat);
	}
	var last = jQuery('.easy-wp-page-nav li').last().find('a').attr('href');
	if(last != undefined || last != null) {
		last = last.substring(last.lastIndexOf('/page/') + 6, last.lastIndexOf('/'));
		jQuery('.contd-products').infinitescroll({
			navSelector  : ".navigation",            
                   // selector for the paged navigation (it will be hidden)
                   nextSelector : ".next",    
                   // selector for the NEXT link (to page 2)
                   itemSelector : ".img-cov",      
                   // selector for all items you'll retrieve
                   loadingText  : "Loading more...", 
                   donetext     : "I think this is the end... :/" ,
                   animate      : true,      
                   bufferPx     : 40,
                   padding		: 0,
                   maxPage: last
               });
	}
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
