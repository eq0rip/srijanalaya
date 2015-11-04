<?php
/**
Template Name: Resource 
 */

get_header('all'); ?>
<div class="page-wrapper wrapper">
	<div class="topbanner banner">
		<div class="col-xs-3 header-text">
			<h1>Featured Resource</h1>
			<h2>Promotion Phare</h2>
			<p>Title Autde Juesl Image Promotion Pharetra helusn Suspendisse ultricies</p>
			<a href="#" class="btn btn-default btn-lg">View project</a>
		</div>
	</div>
	<div class="row">
		<div class="mid-nav">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
					</div>
					<div>
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">Type
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Visual</a></li>
									<li><a href="#">Performance</a></li>
									<li><a href="#">Language</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">Gallary
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Visual</a></li>
									<li><a href="#">Performance</a></li>
									<li><a href="#">Language</a></li>
								</ul>
							</li>

							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">Gallary
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Visual</a></li>
									<li><a href="#">Performance</a></li>
									<li><a href="#">Language</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1 content-grid">
			<?php
			$args=array('posts_per_page'=>20, 'post_type'=>'resource', 'orderby' => 'date', 'order' => 'DESC'); 
			$postslist=new WP_Query($args);  
			while($postslist->have_posts()) : $postslist->the_post();
			$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'large');
			if($imgsrc[0] == null || $imgsrc[0] == '')
				$image = '';
			else
				$image = $imgsrc[0];
			$cats = array();
			$args = array('orderby' => 'name', 'order' => 'ASC', 'fields' => 'all');
			$terms = wp_get_post_terms( get_the_id(), 'resource-taxonomy', $args );
			foreach($terms as $c)
			{
				$cat = $c;
				array_push($cats,$cat->name);
			}

			if(sizeOf($cats)>0)
			{
				$post_categories = implode(',',$cats);
			} else {
				$post_categories = "Not Assigned";
			}
			?>
			<div class="col-sm-4 content">
				<img src="<?php echo $image;?>" />
				<h4><?php the_title(); ?></h4>
				<p><?php echo types_render_field('short-description'); ?></p>
				<a href="<?php echo get_the_permalink();?>">Read More</a>
				<p><?php echo $post_categories; ?></p>
			</div>
			<?php
			endwhile;
			?>
		</div>
	</div>
</div>
<?php 
get_footer('all');
get_footer(); 
?>