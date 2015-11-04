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
			<div class="col-sm-7 col-sm-offset-1">
				<?php
				woocommerce_content();
				?>
			</div>
		</div>
	</div>
</div>
<?php 
get_footer('all');
get_footer(); 
?>