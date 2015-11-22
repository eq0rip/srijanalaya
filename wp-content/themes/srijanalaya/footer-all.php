	<div class="row footer">
		<div class="col-xs-12 fullheight">
			<div class="quote-wrap">
				<?php
				$args = array( 'posts_per_page' => 1, 'post_type' => 'quote' );
				$postslist = new WP_Query( $args );
				while ( $postslist->have_posts() ) : $postslist->the_post();
				$content = get_the_content();
				$content = explode( '#',$content );
				?>


				<div class="inner-wrap">	
					<p><?php echo $content[0];?><span class="htext"><?php echo $content[1];?></span><?php echo $content[2];endwhile;?></p>
				</div>
				<div class="inner-wrap footer-bar">	
					<div class="col-md-8 col-md-offset-3 covers">
						<div class="col-xs-6 col-sm-3 footer-elements" id="fsection1">
							<h4>Check us out</h4>
							<ul class="list-unstyled">
								<li><a href="!#">Who we are</a></li>
								<li><a href="!#">Who we are</a></li>
								<li><a href="!#">Who we are</a></li>
								<li><a href="!#">Who we are</a></li>
							</ul>
						</div>
						<div class="col-xs-6 col-sm-3 footer-elements" id="fsection2">
							<h4>Project</h4>
							<ul class="list-unstyled">
								<li><a href="!#">Project Title</a></li>
								<li><a href="!#">Project Title</a></li>
								<li><a href="!#">Project Title</a></li>
								<li><a href="!#">Project Title</a></li>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-3 footer-elements social-block">
							<h4 class='col-xs-3'><li><a href="http://facebook.com/srijanalaya" target="_blank" title="Share on Facebook"><i class="fa fa-facebook"></i></a></li></h4><h4 class='col-xs-3'><li><a href="http://facebook.com/srijanalaya" target="_blank" title="Tweet"><i class="fa fa-twitter"></i></a></li></h4><h4 class='col-xs-3'><li><a href="http://facebook.com/srijanalaya" target="_blank" title="Share on Google+"><i class="fa fa-google-plus"></i></a></li></h4><h4 class='col-xs-3 last'><li><a href="http://facebook.com/srijanalaya&description=" target="_blank" title="Pin it"><i class="fa fa-pinterest"></i></a></li></h4>
							<p class='newsletter'>Sign up for Newsletter</p>
							<p>Donate</p>
						</div>
					</div>
				</div>
				<p class='copyrite'>© Srijanalaya  | NGO Nepal 2015. All Rights Reserved.</p>
			</div>

		</div> <!--full page end-->
		<?php include('newsletter.php');?>
	</div>
</div>