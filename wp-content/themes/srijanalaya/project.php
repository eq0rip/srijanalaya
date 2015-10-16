<?php
/**
Template Name: Timeline
 */

get_header(); ?>
<div class="col-sm-8">
	<section id="cd-timeline" class="cd-container">
		<?php
		$nextEvent = '';
		$args=array('posts_per_page'=>1, 'post_type'=>'project','meta_key' => 'wpcf-project-date',
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
		$args=array('posts_per_page'=>20, 'post_type'=>'project', 'meta_key' => 'wpcf-project-date', 'orderby' => 'meta_value', 'order' => 'DESC'); 
		$postslist=new WP_Query($args);              
		$curDate = date('now');
		while($postslist->have_posts()) : $postslist->the_post();
		$date = date('m-y-d',types_render_field('project-date', array('raw' => 'true')));
		?>

		<div class="cd-timeline-block" <?php if($post->ID == $nextEvent) echo 'id="next"';?>>
			<div class="cd-timeline-img cd-picture <?php if($post->ID == $nextEvent) echo 'next-project';?>">
				<?php echo parseDate($date);?>
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2><?php the_title();?></h2>
				<p><?php echo types_render_field('summary');?></p>
				<a href="<?php the_permalink();?>" class="cd-read-more">Read more</a>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
	<?php endwhile; ?>
</section> <!-- cd-timeline -->
</div>
<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri();?>/js/mordenizer.js"></script> <!-- Modernizr -->
<script src="<?php echo get_template_directory_uri();?>/js/timeline.js"></script> <!-- Resource jQuery -->
<script type="text/javascript">
	jQuery(window).load(function() {
		var winSize = (jQuery(window).height()) / 2;
		jQuery("html, body").animate({scrollTop: (jQuery('#next').offset().top - winSize) }, 1000);
	});
</script>