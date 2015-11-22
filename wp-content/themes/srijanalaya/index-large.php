<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nirmal
 */

get_header(); 
?>

<div class="wrapper section fullheight" id="section1">
	<div class="col-sm-6 slider-caption" id="left-col-first" >
		<div class="progressbar hidden-md">
			<div class="col-xs-4 fullheight nomargin nopadding" ><div id="bar1"></div></div>
			<div class="col-xs-4 fullheight nomargin nopadding" ><div id="bar2"></div></div>
			<div class="col-xs-4 fullheight nomargin nopadding" ><div id="bar3"></div></div>	
		</div>

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
					<p><?php echo $shortdesc[$i]; ?></p>
					<a href="<?php echo site_url() . $link[$i];?>" class="btn btn-default btn-lg">Read more</a>
				</div>
				<?php } ?>

			</div>
		</div>

		<div class="col-sm-6" id="right-col-first">
			<div class="go-down">
				<i class="fa fa-angle-down"></i>
			</div>
			<div id="slider-2" class="owl-carousel">
				<?php for($i=0;$i<3;$i++){ ?>
				<div class="item"><img class="img-responsive" src="<?php echo $image[$i];?>" alt="1">
					<span class="overlay11">

					</span>

				</div>
				<?php } ?>	
			</div>
		</div>
	</div>
</div>

<div class="section fullheight" id="section2">
	<div class="col-sm-6 quarter">
		<div class="col-xs-6 fullheight section-container">
			<div class="section-inner">
				<h1>Upcoming <span class="key">Project</span></h1>
				<h2> Icies Veil Liberois Pharetra</h2>
				<p>Suspendisse Ultricies Vel Liberoisporta. Ut Pharetra</p>
				<button type="button" class="btn btn-default btn-lg">View Projects</button>

				<span class="post-navigate">
					<button class="btn btn-default btn-lg semicircle" onclick="goTo('news');">News</button>
				</span>

			</div>
		</div>
		<div class="col-xs-6 fullheight section-container img-container">
			<img src="<?php echo get_template_directory_uri();?>/images/lboy.png" class="outimg" alt="">
			<span class="overlay"></span>
		</div>
	</div>
	<div class="col-sm-6 quarter2">
		<div class="col-xs-6 fullheight section-container">
			<div class="section-inner">
				<h1>Upcoming <span class="key">Resource</span></h1>
				<h2> Icies Veil Liberois Pharetra</h2>
				<p>Suspendisse Ultricies Vel Liberoisporta. Ut Pharetra</p>
				<button type="button" class="btn btn-default btn-lg">View Resource</button>

				<span class="post-navigate">
					<button class="btn btn-default btn-lg semicircle" onclick="goTo('resources');">Resource</button>
				</span>
			</div>
		</div>
		<div class="col-xs-6 fullheight section-container img-container">
			<img src="<?php echo get_template_directory_uri();?>/images/rboy.png" class="outimg" alt="">
			<span class="overlay"></span>
		</div>
	</div>
</div>

<div class="section fullheight" id="section3">
	<div class="transparent"></div>
	<div class="col-sm-6 quarter3">
		<div class="col-xs-6 fullheight section-container odd">
			<div class="img-wrap">
				<img src="<?php echo get_template_directory_uri();?>/images/artwork.png" style="position:absolute;top:0;left:0;width:100%;z-index:-1;">
				<div class="wrap" style="background:#000;opacity:0.7;"></div>
			</div>
			<div class="section-inner">
				<h1>Upcoming <span class="key">Project</span></h1>
				<h2> Icies Veil Liberois Pharetra</h2>
				<p>Suspendisse Ultricies Vel Liberoisporta. Ut Pharetra</p>
				<button type="button" class="btn btn-default btn-lg">View Projects</button>

				<span class="post-navigate">
					<button class="btn btn-default btn-lg semicircle" onclick="goTo('project');">Project</button>
				</span>
			</div>
		</div>
		<div class="col-xs-6 fullheight section-container even">
			<div class="img-wrap">
				<img src="<?php echo get_template_directory_uri();?>/images/artwork.png" style="position:absolute;top:0;left:0;width:100%;z-index:-1;">
				<div class="wrap" style="background:#000;opacity:0.7;"></div>
			</div>
			<div class="section-inner">
				<h1>Upcoming <span class="key">Project</span></h1>
				<h2> Icies Veil Liberois Pharetra</h2>
				<p>Suspendisse Ultricies Vel Liberoisporta. Ut Pharetra</p>
				<button type="button" class="btn btn-default btn-lg">View Projects</button>

				<span class="post-navigate">
					<button class="btn btn-default btn-lg semicircle" onclick="goTo('news');">News</button>
				</span>
			</div>
		</div>
	</div>
	<div class="col-sm-6 quarter4">
		<div class="col-xs-6 fullheight section-container odd">
			<div class="img-wrap">
				<img src="<?php echo get_template_directory_uri();?>/images/artwork.png" style="position:absolute;top:0;left:0;width:100%;z-index:-1;">
				<div class="wrap" style="background:#000;opacity:0.7;"></div>
			</div>
			<div class="section-inner">
				<h1>Upcoming <span class="key">Project</span></h1>
				<h2> Icies Veil Liberois Pharetra</h2>
				<p>Suspendisse Ultricies Vel Liberoisporta. Ut Pharetra</p>
				<button type="button" class="btn btn-default btn-lg">View Projects</button>

				<span class="post-navigate">
					<button class="btn btn-default btn-lg semicircle" onclick="goTo('shop');">Shop</button>
				</span>
			</div>
		</div>
		<div class="col-xs-6 fullheight section-container even">
			<div class="img-wrap">
				<img src="<?php echo get_template_directory_uri();?>/images/artwork.png" style="position:absolute;top:0;left:0;width:100%;z-index:-1;">
				<div class="wrap" style="background:#000;opacity:0.7;"></div>
			</div>
			<div class="section-inner">
				<h1>Upcoming <span class="key">Project</span></h1>
				<h2> Icies Veil Liberois Pharetra</h2>
				<p>Suspendisse Ultricies Vel Liberoisporta. Ut Pharetra</p>
				<button type="button" class="btn btn-default btn-lg">View Projects</button>

				<span class="post-navigate">
					<button class="btn btn-default btn-lg semicircle" onclick="goTo('http://facebook.com/art');">Art</button>
				</span>
			</div>
		</div>
	</div>
</div>
<div class="section" id="section4">
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
	<div class="col-xs-6 section-container bottom-container">
		<div class="section-inner">
			<div class="cover-wrap">

				<h1><?php echo $title[0];?> <span class="key"><?php echo $title[1];?></span> <?php echo $title[2];?></h1>
				<p><?php echo get_the_content();?></p>
				<button type="button" class="btn btn-default btn-lg vid-btn">Shop to Support</button>
				<span class="post-navigate">
					<button class="btn btn-default btn-lg semicircle">News</button>
				</span>
			</div>
		</div>
	</div>
	<div class="col-xs-6 section-container bottom-container2">
		<iframe id="player" src="https://player.vimeo.com/video/<?php  echo $urlvid;?>?api=1&player_id=player" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		<?php if($image != '') { ?>
		<div class="video-wrap">
			<img src="<?php echo get_template_directory_uri();?>/images/sharareh.jpg">
			<img class='video-icon' src="<?php echo $image; ?>">
		</div>
		<?php } ?>
	</div>
	<?php
	endwhile;
	?>
	<div class="col-xs-12 halfheight footer">
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
				<div class="back-to-top">
					<i class="fa fa-angle-up"></i>
				</div>
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

</body>

</html>


<?php get_footer(); ?>
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
		player.api('play');
	});
</script>