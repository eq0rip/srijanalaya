	<div class="row footer">
		<div class="col-xs-12 footer-body">
			<div class="quote-wrap">
				<?php
				wp_reset_query();
				global $sri_locale;
				global $lang;
				$args = array( 'posts_per_page' => 1, 'post_type' => 'quote','orderby'=>'rand' );
				$postslist = new WP_Query( $args );
				while ( $postslist->have_posts() ) : $postslist->the_post();
				$content = get_the_content();
				$content = explode( '#',$content );	
				?>


				<div class="inner-wrap">	
					<p><?php echo $content[0];?><span class="htext"><?php echo $content[1];?></span><?php echo $content[2];endwhile;?></p>
					<div class="back-to-top">
						<i class="fa fa-angle-up bounce-arrow-down"></i>
					</div>
				</div>
				<div class="inner-wrap footer-bar">	
					<div class="col-md-8 col-md-offset-3 covers">
						<div class="col-xs-6 col-sm-3 footer-elements" id="fsection1">

							<h4><?php echo ucwords($sri_locale['check us out '][$lang]);?></h4>
							<ul class="list-unstyled">
								<li><a href="<?php echo site_url().'/about'?>"><?php echo ucwords($sri_locale['who we are'][$lang]);?>Who we are</a></li>
								<li><a href="<?php echo site_url().'/srijanalaya-artist/'?>"><?php echo ucwords($sri_locale['artworks'][$lang]);?>Artworks</a></li>
								<li><a href="<?php echo site_url().'/project/'?>"><?php echo ucwords($sri_locale['our projects'][$lang]);?>Our projects</a></li>
								<li><a href="#!"><?php echo ucwords($sri_locale['legal disclaimer'][$lang]);?>Legal disclaimer</a></li>
							</ul>
						</div>
						<div class="col-xs-6 col-sm-3 footer-elements" id="fsection2">
							<h4>Project</h4>
							<ul class="list-unstyled">
								<?php
								wp_reset_query();
								$arg = array( 'posts_per_page' => 4 , 'post_type' => 'project' );
								$postslist = new WP_Query($arg);
								while( $postslist->have_posts() ) : $postslist->the_post();
								?>
								<li><a class="ellipsis" href="<?php echo get_the_permalink();?>"><?php echo get_the_title();?></a></li>
								<?php
								endwhile;
								
								?>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-3 footer-elements social-block">
							<div class="row no-padding">
								<h4 class='col-xs-3'><li><a href="http://facebook.com/srijanalaya" target="_blank" title="Share on Facebook" class="icons fb"></a></li></h4>
								<h4 class='col-xs-3'><li><a href="http://facebook.com/srijanalaya" target="_blank" title="Tweet" class="icons tw"></a></li></h4>
								<h4 class='col-xs-3'><li><a href="http://facebook.com/srijanalaya" target="_blank" title="Share on Google+" class="icons gp"></a></li></h4>
								<h4 class='col-xs-3 last'><li><a href="http://facebook.com/srijanalaya&description=" target="_blank" title="Pin it" class="icons pi"></a></li></h4>
							</div>
							<p class="newsletter"><?php echo ucwords($sri_locale['sign up for newsletter'][$lang]);?></p>
							<p><?php echo ucwords($sri_locale['Donate'][$lang]);?></p>
						</div>
					</div>
				</div>
				<div class="copyrite">
					<p class='pull-left'> <?php echo ucwords($sri_locale['footer text'][$lang]);?></p>
					<p class="pull-right">
						Site by Saedi Works.
					</p>					
				</div>
			</div>

		</div> <!--full page end-->
		<?php include('newsletter.php');?>
	</div>
</div>

<!-- ask -->
<!-- LOCALE LINKS: cHECK US OUT, DONATE -->