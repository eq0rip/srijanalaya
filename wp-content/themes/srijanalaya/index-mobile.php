<?php
/**
 */

get_header('mobile');
if(( !is_mobile() )) {
 // wp_redirect(home_url());
} 

?>

<div class="slider1-wrapper">
	

	<?php
	$args = array('posts_per_page'=>3,'post_type'=>'slider','meta_name' => 'wpcf-type', 'meta_value' => 'hometop');
	$postslist = new WP_Query($args);
	while ( $postslist->have_posts() ) : $postslist->the_post();

	$image[]=types_render_field('image',array('raw'=>'true'));
	$shortdesc[]=types_render_field('short-description');
	$link[]=types_render_field('link',array('raw'=>'true'));
	$title[]=get_the_title();
	endwhile;
	?>
	<div id="slider-1" class="owl-carousel">
		<?php 

		for($i=0;$i<3;$i++) {
			$titles=explode('#',$title[$i]);

			?>
			<div class="item">
				<h1><?php echo $titles[0];?></h1>
				<h2><?php echo $titles[1];?></h2>
				
				<a href="<?php echo site_url() . $link[$i];?>" class="btn btn-default btn-lg">Read more</a>
			</div>
			<?php } ?>

		</div>
		<div class="progressbar">
			<div class="fullheight nomargin nopadding bar" ><div id="bar1"></div></div>
			<div class="fullheight nomargin nopadding bar" ><div id="bar2"></div></div>
			<div class="fullheight nomargin nopadding bar" ><div id="bar3"></div></div>	
		</div>
	</div>
	<div class="slider2-wrapper">
		<div id="slider-2" class="owl-carousel">
			<?php for($i=0;$i<3;$i++){ ?>
			<div class="item"><img class="img-responsive" src="<?php echo $image[$i];?>" alt="1">
				<span class="overlay11">

				</span>

			</div>
			<?php } ?>	
		</div>
	</div>
</div><!--section wrapper end -->

</div><!--section1 end -->
<div class="section" id="section-2">
	<div class="single_slider owl-carousel" id="slider-3">

		<div class="item" style="background:url(<?php echo get_template_directory_uri();?>/images/lboy.png);background-size:cover;">
			<div class="overlay"></div>
			<div class="item-wrapper">

				<h1>Upcoming <span class="key">Project</span></h1>
				<h2> Icies Veil Liberois Pharetra</h2>
				
				<button type="button" class="btn btn-default btn-lg">View Project</button>

			</div>

			<span class="post-navigate">
				<button class="btn btn-default btn-lg semicircle" onclick="goTo('resources');">News</button>
			</span>
		</div>
		<div class="item" style="background:url(<?php echo get_template_directory_uri();?>/images/lboy.png);background-size:cover;">
			<div class="overlay"></div>
			<div class="item-wrapper">
				
				<h1>Upcoming <span class="key">Project</span></h1>
				<h2> Icies Veil Liberois Pharetra</h2>
				
				<button type="button" class="btn btn-default btn-lg">View Project</button>

			</div>

			<span class="post-navigate">
				<button class="btn btn-default btn-lg semicircle" onclick="goTo('resources');">News</button>
			</span>
		</div>
		<div class="item" style="background:url(<?php echo get_template_directory_uri();?>/images/lboy.png);background-size:cover;">
			<div class="overlay"></div>
			<div class="item-wrapper">
				
				<h1>Upcoming <span class="key">Project</span></h1>
				<h2> Icies Veil Liberois Pharetra</h2>
				
				<button type="button" class="btn btn-default btn-lg">View Project</button>

			</div>

			<span class="post-navigate">
				<button class="btn btn-default btn-lg semicircle" onclick="goTo('resources');">News</button>
			</span>
		</div>

	</div>

	
</div>
<div class="section" id="section-3">
	<div class="single_slider owl-carousel" id="slider-5">
		
		<div class="item" style="background:url(<?php echo get_template_directory_uri();?>/images/lboy.png);background-size:cover;">
			<div class="overlay"></div>
			<div class="item-wrapper">

				<h1>Art <span class="key">Exposure</span></h1>
				<h2> Icies Veil Liberois Pharetra</h2>
				
				<button type="button" class="btn btn-default btn-lg">Read More</button>

			</div>

			<span class="post-navigate">
				<button class="btn btn-default btn-lg semicircle" onclick="goTo('resources');">Art</button>
			</span>
		</div>
		<div class="item" style="background:url(<?php echo get_template_directory_uri();?>/images/lboy.png);background-size:cover;">
			<div class="overlay"></div>
			<div class="item-wrapper">
				
				<h1>Art <span class="key">Exposure</span></h1>
				<h2> Icies Veil Liberois Pharetra</h2>
				
				<button type="button" class="btn btn-default btn-lg">Read More</button>

			</div>

			<span class="post-navigate">
				<button class="btn btn-default btn-lg semicircle" onclick="goTo('resources');">Art</button>
			</span>
		</div>
		<div class="item" style="background:url(<?php echo get_template_directory_uri();?>/images/lboy.png);background-size:cover;">
			<div class="overlay"></div>
			<div class="item-wrapper">
				
				<h1>Art <span class="key">Exposure</span></h1>
				<h2> Icies Veil Liberois Pharetra</h2>
				
				<button type="button" class="btn btn-default btn-lg">Read More</button>

			</div>

			<span class="post-navigate">
				<button class="btn btn-default btn-lg semicircle" onclick="goTo('resources');">Art</button>
			</span>
		</div>
	</div>

</div>
<div class="section" id="section-4">
	<?php
	$args=array('posts_per_page' => 1,'post_type' => 'video','meta_query' => array(array('key' => 'wpcf-featured-video', 'value' => '1', 'compare' => '=')), 'orderby' => 'date', 'order' => 'DESC');
	$postslist = new WP_Query($args);
	while($postslist->have_posts()):$postslist->the_post();
	$title = get_the_title();
	$title = explode('#',$title);
	$description = get_the_content();
	$urlvid = types_render_field('video-url',array('raw' => 'true'));
	$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'large');
	if($imgsrc[0] == null || $imgsrc[0] == '')
		$image = '';
	else
		$image = $imgsrc[0];
	?>	
	<div id="featured_text_wrapper">
		<div class="section-inner">
			<div class="cover-wrap">

				<h1><?php echo $title[0];?> <span class="key"><?php echo $title[1];?></span> <?php echo $title[2];?></h1>
				<button type="button" class="btn btn-default btn-lg vid-btn">Shop to Support</button>

			</div>
		</div>
	</div>
<?php endwhile;?>
<div id="featured_video_wrapper">
	<iframe id="player" src="https://player.vimeo.com/video/<?php  echo $urlvid;?>?api=1&player_id=player" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	<?php if($image != '') { ?>
	<div class="video-wrap">
		<img src="<?php echo get_template_directory_uri();?>/images/sharareh.jpg">
		<img class='video-icon' src="<?php echo $image; ?>">
	</div>
	<?php } ?>
</div>
</div>
<div class="section" id="section-5">
	<div class="quote_wrapper">
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
	</div>
	<div class="who_we">
		<div class="col-xs-10 col-xs-offset-1 check_us" style="">
			<h1>Check us out</h1>
			<ul class="list-unstyled">
				<li><a href="!#">Who we are</a></li>
				<li><a href="!#">Artworks</a></li>
				<li><a href="!#">Our Projects</a></li>
				<li><a href="!#">Legal Disclaimer</a></li>


			</ul>
		</div>
		<div class="foot_wrapper">
			<div class="social">
				<h4>
					<li>
						<a href="http://facebook.com/srijanalaya" target="_blank" title="Share on Facebook"><i class="fa fa-facebook"></i>
						</a>
					</li>
				</h4>
				<h4>
					<li>
						<a href="http://facebook.com/srijanalaya" target="_blank" title="Tweet"><i class="fa fa-twitter"></i>
						</a>
					</li>
				</h4>
				<h4>
					<li>
						<a href="http://facebook.com/srijanalaya" target="_blank" title="Share on Google+"><i class="fa fa-google-plus"></i>
						</a>
					</li>
				</h4>
				<h4 class='last'>
					<li>
						<a href="http://facebook.com/srijanalaya&description=" target="_blank" title="Pin it">
							<i class="fa fa-pinterest"></i>
						</a>
					</li>
				</h4>
			</div>
			<div class="newsletter">
				<p>Sign up for Newsletter</p>
			</div>
			<div class="donate">
				<p>Donate</p>
			</div>
		</div>

		<p class='copyrite'>© Srijanalaya  | NGO Nepal 2015. All Rights Reserved.</p>
	</div>
	
</div>
</div><!---fullpage  wrapper end -->
<?php include('newsletter.php');?>


<?php 
get_template_part('navigation');
get_footer('mobile');
?>
<script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>
<script type="text/javascript">
	function goTo(page) {
		if(!ValidURL(page))
			location.href = '<?php echo site_url();?>/' + page;
		else
			location.href = page;
	}
	function ValidURL(str) {
		var regex = /(http|https):\/\/(\w+:{0,1}\w*)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%!\-\/]))?/;
		if(!regex .test(str)) {
			return false;
		} else {
			return true;
		}
	}
	var player = $f(document.getElementById('player'));
	jQuery('.video-wrap').click(function() { 
		jQuery('.video-icon').hide();
		jQuery('#featured_video_wrapper iframe').show();
		jQuery('#featured_video_wrapper video-wrap').show();
		player.api('play');
	});
</script>






