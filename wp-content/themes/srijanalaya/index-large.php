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

get_header();?>
<div class="drop hidden-xs hidden-sm"><img src="<?php echo get_template_directory_uri();?>/images/dropdown_arrow.png"></div>
 <div class="container-fluid head_section hidden-lg hidden-md fl"><!--top buttons-->
    <a href="<?php echo site_url();?>"><img src="<?php echo get_template_directory_uri();?>/images/logo_c.png"  class="img-responsive logo" alt="" /></a>
  </div>
<script>
	var site_url='<?php echo site_url();?>'
	
</script>


<div class="wrapper section fullheight" id="section1">
	<div class="col-sm-6 slider-caption" id="left-col-first" >
		<div class="progressbar hidden-md">
			<div class="col-xs-4 bar fullheight nomargin nopadding" ><div id="bar1"></div></div>
			<div class="col-xs-4 bar fullheight nomargin nopadding" ><div id="bar2"></div></div>
			<div class="col-xs-4 bar fullheight nomargin nopadding" ><div id="bar3"></div></div>	
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
					<a href="<?php echo site_url() . $link[$i];?>" class="btn btn-dark btn-lg"><?php echo ucwords($sri_locale['view project'][$lang]);?></a>
				</div>
				<?php } ?>

			</div>
		</div>

		<div class="col-sm-6" id="right-col-first">
			<div class="go-down">
				<i class="fa fa-angle-down bounce-arrow-down"></i>
			</div>
			<div id="slider-2" class="owl-carousel">
				<?php for($i=0;$i<3;$i++){ ?>
				<div class="item"><img class="img-responsive" src="<?php echo $image[$i];?>" alt="1">
					<span class="overlay"></span>
				</div>
				<?php } ?>	
			</div>
		</div>
	</div>
</div>

<div data-navigation="move1" class="section fullheight" id="section2">
	<div class="col-sm-6 quarter">
		<div class="col-xs-6 fullheight section-container">
			<div class="section-inner">
				<?php
				$args=array('posts_per_page' => 1, 'post_type'=>'project', 'orderby' => 'date', 'order' => 'DESC');
				$postslist=new WP_Query($args);
				while($postslist->have_posts() ) :$postslist->the_post();
				
				
				$nextEvent=$post->ID;
				
				endwhile;

				wp_reset_query();
				$args=array('posts_pr_page'=>1, 'post_type'=>'project','meta_key' => 'wpcf-project-date',
					'meta_query' => array(
						array(
							'key' => 'wpcf-project-date'
							),
						array(
							'key' => 'wpcf-project-date',
							'value' => strtotime('today'),
							'compare' => '>='
							)
						),
					'orderby' => 'meta_value',
					'order' => 'ASC'
					); 
				$postslist=new WP_Query($args);
				while($postslist->have_posts()) : $postslist->the_post();
				$nextEvent = $post->ID;
				
				endwhile;
				
				?>
				<div class="height_bound">
					
					<h1>Upcoming <span class="key">Project</span></h1>
					<h2> <?php echo get_the_title($nextEvent);?></h2>
					<p><?php echo get_post_meta( $nextEvent,'wpcf-summary' , true );?></p>
				</div>
				<a  class="btn btn-default btn-lg" href="<?php echo get_the_permalink($nextEvent);?>"><?php echo ucwords($sri_locale['view project'][$lang]);?></a>
				<p class="small-text"><img align="middle" src="<?php echo get_template_directory_uri();?>/images/participant-icon.png" class="outimg" alt=""><?php echo get_post_meta($nextEvent,'wpcf-participants',true);?> participants </p>

				<span class="post-navigate">
					<button class="btn btn-default btn-lg semicircle" onclick="goTo('news');"><?php echo ucwords($sri_locale['news'][$lang]);?></button>
				</span>

			</div>
		</div>
		<div class="col-xs-6 fullheight section-container img-container">
			<img src="<?php echo get_post_meta($nextEvent,'wpcf-long',true);?>" class="outimg" alt="">
			<span class="overlay"></span>
		</div>

	</div>
	<div class="col-sm-6 quarter2">
		<div class="col-xs-6 fullheight section-container">
			<div class="section-inner">
				<?php
				wp_reset_query();
				$args=array('posts_per_page' => 1, 'post_type'=>'resource', 'orderby' => 'date', 'order' => 'DESC');
				$postslist=new WP_Query($args);
				while($postslist->have_posts() ) :$postslist->the_post();
				
				
				$nextEvent=$post->ID;
				
				endwhile;
				?>
				<div class="height_bound">
					<h1>Upcoming <span class="key">Resource</span></h1>
					<h2> <?php echo get_the_title($nextEvent);?></h2>
					<p><?php echo get_post_meta( $nextEvent,'wpcf-short-description' , true );?></p>					
				</div>
				<a class="btn btn-default btn-lg" href="<?php echo get_the_permalink($nextEvent);?>"><?php echo ucwords($sri_locale['view resource'][$lang]);?></a>

				<span class="post-navigate">
					<button class="btn btn-default btn-lg semicircle" onclick="goTo('resources');"><?php echo ucwords($sri_locale['resource'][$lang]);?></button>
				</span>
			</div>
		</div>
		<div class="col-xs-6 fullheight section-container img-container">
			<img src="<?php echo get_post_meta($nextEvent,'wpcf-long',true);?>" class="outimg" alt="">
			<span class="overlay"></span>
		</div>
	</div>
</div>

<div data-navigation="move2" class="section fullheight" id="section3">
	<div class="transparent"></div>
	<div class="col-sm-6 quarter3">
		<?php
		wp_reset_query();
		$args=array('posts_per_page' => 1, 'post_type'=>'project','orderby' => 'date', 'order' => 'DESC');
		$postslist=new WP_Query($args);
		while($postslist->have_posts() ) :$postslist->the_post();


		$nextEvent=$post->ID;

		endwhile;

		wp_reset_query();
		$args=array('posts_pr_page'=>1, 'post_type'=>'project','meta_key' => 'wpcf-project-date',
			'meta_query' => array(
				array(
					'key' => 'wpcf-project-date'
					),
				array(
					'key' => 'wpcf-project-date',
					'value' => strtotime('today'),
					'compare' => '<='
					)
				),
			'orderby' => 'meta_value',
			'order' => 'ASC'
			); 
		$postslist=new WP_Query($args);
		while($postslist->have_posts()) : $postslist->the_post();
		$nextEvent = $post->ID;

		endwhile;
		wp_reset_query();

		?>

		<div class="col-xs-6 fullheight section-container odd">
			<div class="img-wrap">
				<img src="<?php echo get_post_meta($nextEvent,'wpcf-long',true);?>" style="position:absolute;top:0;left:0;width:100%;z-index:-1;">
				<div class="wrap" style="background:#000;opacity:0.7;"></div>
			</div>
			<div class="section-inner">
				<div class="height_bound">
					<h1>Recent <br/><span class="key">Project</span></h1>
					<h2> <?php echo get_the_title($nextEvent);?></h2>
					<p><?php echo get_post_meta( $nextEvent,'wpcf-summary' , true );?></p>
				</div>
				<a class="btn btn-default btn-lg" href="<?php echo get_the_permalink($nextEvent);?>"> <?php echo ucwords($sri_locale['view project'][$lang]);?></a><br/><br/>
				<?php include('social-expand.php');?>
				<span class="post-navigate">
					<button class="btn btn-default btn-lg semicircle" onclick="goTo('project');"><?php echo ucwords($sri_locale['project'][$lang]);?></button>
				</span>
			</div>
		</div>
		<div class="col-xs-6 fullheight section-container even">
			<?php
			wp_reset_query();
			$args=array('posts_per_page' => 1, 'post_type'=>'news-post','orderby' => 'date', 'order' => 'DESC');
			$postslist=new WP_Query($args);
			while($postslist->have_posts() ) :$postslist->the_post();


			$nextEvent=$post->ID;


			endwhile;
			?>
			<div class="img-wrap">
				<img src="<?php echo get_post_meta($nextEvent,'wpcf-home-image',true);?>" style="position:absolute;top:0;left:0;width:100%;z-index:-1;">
				<div class="wrap" style="background:#000;opacity:0.7;"></div>
			</div>
			<div class="section-inner">
				<div class="height_bound">
					<h1>Recent <br/><span class="key">News</span></h1>
					<h2> <?php echo get_the_title($nextEvent);?></h2>
					<p>Suspendisse Ultricies Vel Liberoisporta. Ut Pharetra</p>
				</div>
				<a class="btn btn-default btn-lg" href="<?php echo get_the_permalink($nextEvent);?>"><?php echo ucwords($sri_locale['view news'][$lang]);?></a><br/><br/>
				<?php include('social-expand.php');?>
				<span class="post-navigate">
					<button class="btn btn-default btn-lg semicircle" onclick="goTo('news');"><?php echo ucwords($sri_locale['news'][$lang]);?></button>
				</span>
			</div>
		</div>
	</div>
	<div class="col-sm-6 quarter4">
		<div class="col-xs-6 fullheight section-container odd">
			<?php
			wp_reset_query();
			$args=array('posts_per_page' => 1, 'post_type'=>'product','orderby' => 'date', 'order' => 'DESC');
			$postslist=new WP_Query($args);
			while($postslist->have_posts() ) :$postslist->the_post();


			$nextEvent=$post->ID;


			endwhile;
			?>
			<div class="img-wrap">

				<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($nextEvent) );?>" style="position:absolute;top:0;left:0;width:100%;z-index:-1;">
				<div class="wrap" style="background:#000;opacity:0.7;"></div>
			</div>
			<div class="section-inner">
				<div class="height_bound">
					<h1>Product <br/><span class="key">Showcase</span></h1>
					<h2> <?php echo get_the_title($nextEvent);?></h2>
					<p><?php echo strip_tags(get_the_excerpt());?></p>
				</div>
				<a  href="<?php echo get_the_permalink($nextEvent);?>" class="btn btn-default btn-lg"><?php echo ucwords($sri_locale['view product'][$lang]);?></a><br/><br/>
				<?php include('social-expand.php');?>
				<span class="post-navigate">
					<button class="btn btn-default btn-lg semicircle" onclick="goTo('shop');"><?php echo ucwords($sri_locale['shop'][$lang]);?>Shop</button>
				</span>
			</div>
		</div>
		<div class="col-xs-6 fullheight section-container even">
			<?php
			wp_reset_query();
			$args=array('posts_per_page' => 1, 'post_type'=>'srijanalaya-artist','orderby' => 'date', 'order' => 'DESC');
			$postslist=new WP_Query($args);
			while($postslist->have_posts() ) :$postslist->the_post();


			$nextEvent=$post->ID;


			endwhile;
			?>
			<div class="img-wrap">
				<img src="<?php echo get_post_meta($nextEvent,'wpcf-home-image',true)?>" style="position:absolute;top:0;left:0;width:100%;z-index:-1;">
				<div class="wrap" style="background:#000;opacity:0.7;"></div>
			</div>
			<div class="section-inner">
				<div class="height_bound">
					<h1>Art <br/><span class="key">Exposure</span></h1>
					<h2> <?php echo get_the_title($nextEvent);?></h2>
					<p><?php echo get_post_meta($nextEvent,'wpcf-short-description',true);;?></p>
				</div>
				<a  href="<?php echo get_the_permalink($nextEvent);?>" class="btn btn-default btn-lg"><?php echo ucwords($sri_locale['view artworks'][$lang]);?></a><br/><br/>
				<?php include('social-expand.php');?>
				<span class="post-navigate">
					<button class="btn btn-default btn-lg semicircle" onclick="goTo('shop');"><?php echo ucwords($sri_locale['art'][$lang]);?>Art</button>
				</span>
			</div>
		</div>
	</div>
</div>
<div data-navigation="move3" class="section" id="section4">
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
	<div class="row">	
		<div class="col-xs-6 section-container bottom-container">
			<div class="section-inner">
				<div class="cover-wrap">

					<h1><?php echo $title[0];?><span class="key"><?php echo $title[1];?></span><br/><?php echo $title[2];?></h1>
					<p><?php echo get_the_content();?></p>
					<div class="row nomargin">
						<button type="button" class="btn btn-default btn-lg btn-shop"><?php echo ucwords($sri_locale['shop to support'][$lang]);?></button>
					</div>
					<?php include('social-expand.php');?>
					<span class="post-navigate">
						<button class="btn btn-default btn-lg semicircle"><?php echo ucwords($sri_locale['news'][$lang]);?></button>
					</span>
				</div>
			</div>
		</div>
		<div class="col-xs-6 section-container bottom-container2">

			<?php 
			if(stristr($urlvid, 'youtube.com') === FALSE) {
				?>
				<iframe id="player" src="https://player.vimeo.com/video/<?php  echo parse_vimeo($urlvid);?>?api=1&player_id=player" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				<?php } else {?>
				<div id="playeryt"></div>
				<script>
					var tag = document.createElement('script');
					var videourl="<?php echo parse_youtube($urlvid);?>";
					tag.src = "https://www.youtube.com/iframe_api";
					var firstScriptTag = document.getElementsByTagName('script')[0];
					firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
					var playeryt;
					function onYouTubeIframeAPIReady() {
						playeryt = new YT.Player('playeryt', {
							height: '100%',
							width: '100%',
							videoId: videourl,
						});
					}

				</script>

				<?php  } if($image != '') { ?>
				<div class="video-wrap">
					<img class="video-img"src="<?php echo $image; ?>">
					<img class='video-icon' src="<?php echo get_template_directory_uri();?>/images/video-icon.png">
				</div>
				<?php } ?>
		</div>
	</div>
		<?php
		endwhile;
		?>
		<div class="col-xs-12 footer-h footer">
		<div class="footer-home">
			
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
						<i class="fa fa-angle-up bounce-arrow-down"></i>
					</div>
				</div>
				<div class="inner-wrap footer-bar">	
					<div class="col-md-8 col-md-offset-3 covers">
						<div class="col-xs-6 col-sm-3 footer-elements" id="fsection1">
						<?php wp_reset_query();
				global $sri_locale;
				global $lang; ?>
							<h4><?php echo ucwords($sri_locale['check us out '][$lang]);?></h4>
		
								<ul class="list-unstyled">
									<li>
										<a href="<?php echo site_url().'/about'?>">
											<?php echo ucwords($sri_locale['who we are'][$lang]);?>who we are
										</a>
										</li>
									<li>
										<a href="<?php echo site_url().'/srijanalaya-artist/'?>">
											<?php echo ucwords($sri_locale['artworks'][$lang]);?>artworks
										</a>
									</li>
									<li>
										<a href="<?php echo site_url().'/project/'?>">
											<?php echo ucwords($sri_locale['our projects'][$lang]);?>projects</a>
										</li>
									<li>
										<a href="#!">
										<?php echo ucwords($sri_locale['legal disclaimer'][$lang]);?>legal disclaimer</a>
										</li>


								</ul>
						</div>
						<div class="col-xs-6 col-sm-3 footer-elements" id="fsection2">
							<h4>Project</h4>
							<ul class="list-unstyled">
								<?php
								wp_reset_query(); 
								$args=array('posts_per_page' => 4, 'post_type'=>'project', 'orderby' => 'date', 'order' => 'DESC');
								$postslist=new WP_Query($args);
								while($postslist->have_posts() ) :$postslist->the_post();
								?>
								<li><a class="ellipsis" href="<?php echo get_the_permalink();?>"><?php echo get_the_title();?></a></li>
								<?php 
								endwhile;
								?>

							</ul>
						</div>
						<div class="col-xs-12 col-sm-3 footer-elements social-block">
							<div class="row no-padding">							
							
								<h4 class='col-xs-3'><li><a href="http://facebook.com/srijanalaya" target="_blank" title="Share on Facebook" class="icons fb">&nbsp;</a></li></h4>
								<h4 class='col-xs-3'><li><a href="http://facebook.com/srijanalaya" target="_blank" title="Tweet" class="icons tw">&nbsp;</a></li></h4>
								<h4 class='col-xs-3'><li><a href="http://facebook.com/srijanalaya" target="_blank" title="Share on Google+" class="icons gp">&nbsp;</a></li></h4>
								<h4 class='col-xs-3 last'><li><a href="http://facebook.com/srijanalaya&description=" target="_blank" title="Pin it" class="icons pi">&nbsp;</a></li></h4>
							</div>
							<p class='newsletter'><?php echo ucwords($sri_locale['sign up for newsletter'][$lang]);?></p>
							<p><?php echo ucwords($sri_locale['Donate'][$lang]);?></p>
						</div>
					</div>
				</div>
				<div class="copyrite" style="margin: 0 20px;">
					<p class='pull-left'> <?php echo ucwords($sri_locale['footer text'][$lang]);?></p>
					<p class="pull-right">
						Site by Saedi Works.
					</p>					
				</div>
			</div>
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
		<?php if(stristr($urlvid, 'youtube.com') === FALSE) {?>
			var player = $f(document.getElementById('player'));
			jQuery('.video-wrap').click(function() { 
				player.api('play');
			});
			<?php } else {?>
				jQuery('.video-wrap').click(function(){
					playeryt.playVideo();
				});
				<?php } ?>






			</script>

<!-- $P$BjLqxfJvxy8iab.EiNwI2k1QrG2CzL0 -->
<?php if((( is_home() || is_front_page()) )) { //not working on desktop ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fullpage/jquery.fullPage.js"></script>

<script>
	jQuery('#fullpage').fullpage({
            scrollBar:true,
            fitToSection:false,
            onLeave:function(index,nextIndex,direction){
                //   console.log(index);
                //   if(index==1 || (index == 2 && direction == 'up')) {
                //       jQuery('.drop').hide();
                //       console.log(direction);
                // }
                // else {
                //       jQuery('.drop').show();
                // }
          }
    });
</script>
<?php } ?>