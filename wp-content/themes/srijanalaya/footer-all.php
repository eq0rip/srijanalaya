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
							<h4 class='col-xs-3'>f</h4><h4 class='col-xs-3'>tw</h4><h4 class='col-xs-3'>g+</h4><h4 class='col-xs-3'>p</h4>
							<p class='newsletter'>Sign up for Newsletter</p>
							<p>Donate</p>
						</div>
					</div>
				</div>
			</div>

		</div> <!--full page end-->
	</div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-dropdate.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/date.format.js"></script>