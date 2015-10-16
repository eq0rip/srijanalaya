<?php
/**
Template Name: Timeline
 */

get_header(); ?>
<section id="cd-timeline" class="cd-container">
	<?php
	$args=array('posts_per_page'=>20, 'post_type'=>'project', 'meta_key' => 'wpcf-date', 'orderby' => 'meta_value', 'order' => 'DESC'); 
$postslist=new WP_Query($args);                          //
while($postslist->have_posts()) : $postslist->the_post();//
?>

<div class="cd-timeline-block">
	<div class="cd-timeline-img cd-picture">
		<img src="img/cd-icon-picture.svg" alt="Picture">
	</div> <!-- cd-timeline-img -->

	<div class="cd-timeline-content">
	<h2><?php the_title();?></h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
		<a href="#0" class="cd-read-more">Read more</a>
		<span class="cd-date">Jan 14</span>
	</div> <!-- cd-timeline-content -->
</div> <!-- cd-timeline-block -->
<?php endwhile; ?>
</section> <!-- cd-timeline -->
<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri();?>/js/mordenizer.js"></script> <!-- Modernizr -->
<script src="<?php echo get_template_directory_uri();?>/js/timeline.js"></script> <!-- Resource jQuery -->