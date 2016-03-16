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
	<div class="single_slider" id="slider-3">
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

		<div class="item" style="background:url(<?php echo get_post_meta($nextEvent,'wpcf-long',true);?>);background-size:cover;">
			<div class="overlay"></div>
			<div class="item-wrapper">

				<h1>Upcoming <span class="key">Project</span></h1>
				<h2> <?php echo get_the_title($nextEvent);?></h2>
				
				
				<a  class="btn btn-default btn-lg" href="<?php echo get_the_permalink($nextEvent);?>"><?php echo ucwords($sri_locale['view project'][$lang]);?></a>


			</div>

			<span class="post-navigate">
				<button class="btn btn-default btn-lg semicircle" onclick="goTo('news');"><?php echo ucwords($sri_locale['news'][$lang]);?></button>

			</span>
		</div>
		<?php
		wp_reset_query();
		$args=array('posts_per_page' => 1, 'post_type'=>'resource', 'orderby' => 'date', 'order' => 'DESC');
		$postslist=new WP_Query($args);
		while($postslist->have_posts() ) :$postslist->the_post();


		$nextEvent=$post->ID;

		endwhile;
		?>
		<div class="item" style="background:url(<?php echo get_post_meta($nextEvent,'wpcf-long',true);?>);background-size:cover;">
			<div class="overlay"></div>
			<div class="item-wrapper">
				
				<h1>Upcoming <span class="key">Resource</span></h1>
				<h2> <?php echo get_the_title($nextEvent);?></h2>
				
				<a class="btn btn-default btn-lg" href="<?php echo get_the_permalink($nextEvent);?>"><?php echo ucwords($sri_locale['view resource'][$lang]);?></a>

			</div>

			<span class="post-navigate">
				<button class="btn btn-default btn-lg semicircle" onclick="goTo('resources');"><?php echo ucwords($sri_locale['resource'][$lang]);?></button>
			</span>
		</div>


	</div>
</div>

<div class="section" id="section-3">
	<div class="single_slider" id="slider-5">
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
		?>

		<div class="item" style="background:url(<?php echo get_post_meta($nextEvent,'wpcf-long',true);?>);background-size:cover;">
			<div class="overlay"></div>
			<div class="item-wrapper">

				<h1>Recent <span class="key">Project</span></h1>
				<h2> <?php echo get_the_title($nextEvent);?></h2>
				
				<a class="btn btn-default btn-lg" href="<?php echo get_the_permalink($nextEvent);?>"> <?php echo ucwords($sri_locale['view project'][$lang]);?></a>

			</div>

			<span class="post-navigate">
				<button class="btn btn-default btn-lg semicircle" onclick="goTo('project');"><?php echo ucwords($sri_locale['project'][$lang]);?></button>
			</span>
		</div>

		<?php
		wp_reset_query();
		$args=array('posts_per_page' => 1, 'post_type'=>'news-post','orderby' => 'date', 'order' => 'DESC');
		$postslist=new WP_Query($args);
		while($postslist->have_posts() ) :$postslist->the_post();


		$nextEvent=$post->ID;


		endwhile;
		?>
		<div class="item" style="background:url(<?php echo get_post_meta($nextEvent,'wpcf-home-image',true);?>);background-size:cover;">
			<div class="overlay"></div>
			<div class="item-wrapper">
				
				<h1>Recent <span class="key">News</span></h1>
				<h2> <?php echo get_the_title($nextEvent);?></h2>
				
				<a class="btn btn-default btn-lg" href="<?php echo get_the_permalink($nextEvent);?>"><?php echo ucwords($sri_locale['view news'][$lang]);?></a>

			</div>

			<span class="post-navigate">
				<button class="btn btn-default btn-lg semicircle" onclick="goTo('news');"><?php echo ucwords($sri_locale['news'][$lang]);?></button>
			</span>
		</div>
		<?php
		wp_reset_query();
		$args=array('posts_per_page' => 1, 'post_type'=>'product','orderby' => 'date', 'order' => 'DESC');
		$postslist=new WP_Query($args);
		while($postslist->have_posts() ) :$postslist->the_post();


		$nextEvent=$post->ID;


		endwhile;
		?>
		<div class="item" style="background:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($nextEvent) );?>);background-size:cover;">
			<div class="overlay"></div>
			<div class="item-wrapper">
				
				<h1>Product <span class="key">Showcase</span></h1>
				<h2> <?php echo get_the_title($nextEvent);?></h2>
				
				<a  href="<?php get_the_permalink($nextEvent);?>" class="btn btn-default btn-lg"><?php echo ucwords($sri_locale['view product'][$lang]);?></a>

			</div>

			<span class="post-navigate">
				<button class="btn btn-default btn-lg semicircle" onclick="goTo('shop');"><?php echo ucwords($sri_locale['shop'][$lang]);?></button>
			</span>
		</div>

		<?php
		wp_reset_query();
		$args=array('posts_per_page' => 1, 'post_type'=>'sri-artist','orderby' => 'date', 'order' => 'DESC');
		$postslist=new WP_Query($args);
		while($postslist->have_posts() ) :$postslist->the_post();


		$nextEvent=$post->ID;


		endwhile;
		?>
		<div class="item" style="background:url(<?php echo get_post_meta($nextEvent,'wpcf-home-image',true)?>);background-size:cover;">
			<div class="overlay"></div>
			<div class="item-wrapper">
				
				<h1>Art <span class="key">Exposure</span></h1>
				<h2> <?php echo get_the_title($nextEvent);?></h2>
				
				<a  href="<?php get_the_permalink($nextEvent);?>" class="btn btn-default btn-lg"><?php echo ucwords($sri_locale['view artworks'][$lang]);?></a>

			</div>

			<span class="post-navigate">
				<button class="btn btn-default btn-lg semicircle" onclick="goTo('shop');"><?php echo ucwords($sri_locale['art'][$lang]);?></button>
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
				<button type="button" class="btn btn-default btn-lg btn-shop"><?php echo ucwords($sri_locale['shop to support'][$lang]);?></button>

			</div>
		</div>
	</div>
<?php endwhile;?>
<div id="featured_video_wrapper">
	<iframe id="player" src="https://player.vimeo.com/video/<?php  echo $urlvid;?>?api=1&player_id=player" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	<?php if($image != '') { ?>
	<div class="video-wrap">
		<!-- <img src="<?php echo get_template_directory_uri();?>/images/sharareh.jpg">
		<img class='video-icon' src="<?php echo $image; ?>"> -->
		<img src="<?php echo $image; ?>">
		<span class="video-icon">
			<img src="<?php echo get_template_directory_uri();?>/images/video-icon.png">
			</span>
	</div>
	<?php } ?>
</div>
</div>
<?php include('quotewrap.php');?>
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






