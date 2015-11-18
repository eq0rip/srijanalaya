<?php
/**
Template Name: mobile 
 */
get_header('mobile');
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
<div class="section">sssss</div>
</div><!---fullpage  wrapper end -->


<?php 
get_footer('mobile');
?>
