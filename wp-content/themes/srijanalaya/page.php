<?php
/**
Default Template 
 */

get_header('all');
?>
<div class="page-wrapper wrapper">
	<div class="row">
		<div class="bar"></div>
		<div class="page-content">
			<div class="col-sm-10 col-sm-offset-1">
				<?php
				while ( have_posts() ) : the_post();
				echo '<h2>' . get_the_title() . '</h2>';
				echo '<p>' . the_content() . '</p>';
				endwhile;
				?>
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