<?php
/**
Page Not Found
 */

get_header('all');
?>
<div class="page-wrapper wrapper">
	<div class="row">
		<div class="bar"></div>
		<div class="page-content">
			<div class="col-sm-10 col-sm-offset-1">
				<h1>404 Page not Found</h1>
				<h2>Sorry, We did not find the page you are looking for. </h2>
				<p>You can go <a href="<?php site_url();?>">Home</a> and look over something interesting</p>
			</div>
		</div>
	</div>
</div>
<?php 
get_footer('all');
get_footer(); 
?>