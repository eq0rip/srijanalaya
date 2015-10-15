<?php get_template_part('header');?>
<?php 


$sublist=get_subscriber(2);                         //function to get subscriber list by project id
add_subscriber('isdfdsfddsnsert@insert',8);         //function to add subscriber 


				$args=array('posts_per_page'=>20,'post_type'=>'project'); //
				$postslist=new WP_Query($args);                          //
				while($postslist->have_posts()) : $postslist->the_post();//
					$date_so=types_render_field('project-date');       //
					$project_id=get_the_id();
					$project_list[]=array($project_id,$date_so);

			    endwhile;
			   



usort($project_list,"sort_project_by_date");
print_r($project_list);
?>
<?php get_template_part('footer');?>