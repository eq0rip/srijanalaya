<?php
get_header('all');
?>
<div class="page-wrapper wrapper">
	<div class="row">
		<div class="bar"></div>
		<div class="page-content">
			<div class="col-sm-7 col-sm-offset-1">
				<?php
				while ( have_posts() ) : the_post();
				echo '<h2>' . get_the_title() . '</h2>';
				echo '<p>' . the_content() . '</p>';
				endwhile;
				?>
			</div>
			<div class="col-sm-3 side-column">
				<div class="col-sm-10 sidebar">
					<div class="side-wrap no-padding">
						<!-- -Cap. Buggy- -->
						<h2>Connect</h2>
						<p><a href="mailto:example@example.com">example@example.com</a></p>
					</div>
					
					<div class="side-wrap last">
						<span class="social-buttons">
							<span>Follow</span>
							<ul class="share-buttons">
								<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink();?>&t=Srijanalaya" target="_blank" class="icons fb" title="Share on Facebook"></a></li>
								<li><a href="https://twitter.com/intent/tweet?source=<?php echo get_the_permalink();?>&text=Srijanalaya:%20http%3A%2F%2Fsrijanalaya.saediworks.com" target="_blank" title="Tweet" class="icons tw"></a></li>
								<li><a href="https://plus.google.com/share?url=<?php echo get_the_permalink();?>" target="_blank" title="Share on Google+" class="icons gp"></a></li>
								<li><a href="http://pinterest.com/pin/create/button/?url=<?php echo get_the_permalink();?>&description=" target="_blank" title="Pin it" class="icons pi"></a></li>
							</ul>
						</span>
					</div>
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