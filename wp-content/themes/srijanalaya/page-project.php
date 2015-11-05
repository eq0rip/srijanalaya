<?php
/**
Template Name: Timeline
 */

get_header('all'); 
wp_reset_query();?>
<div class="row">
	<div class="col-sm-12 wrapper banner">
		<div class="banner-content">
			<h2>Current Event Promotion Phare</h2>
			<p>Suspendisse ultricies vel liberoisporta.Ut pharetra endisse ultricies vel libre</p>
			<button type="button" class="btn btn-default btn-lg vid-btn">View Project</button>
		</div>
	</div>
</div>
<div class="row">
	<div style="width:100%:">
		<ul>
			<?php 
			$tags = get_terms('project_tags');
			foreach($tags as $tag) {
				?>
				<li class="col-sm-1"><a href="javascript:void(0)" onclick="filter_timeline('<?php echo $tag->slug;?>');"><?php echo $tag->name;?></a></li>
				<?php }?>
			</ul>
		</div>
		<div class="col-sm-9 timeline-wrapper">

			<section id="cd-timeline" class="cd-container">
				<div class="circle"></div>
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
				$args=array('posts_per_page' => -1, 'post_type'=>'project', 'meta_key' => 'wpcf-project-date', 'orderby' => 'meta_value', 'order' => 'DESC'); 
				$postslist=new WP_Query($args);              
				$curDate = date('now');
				$i = 1;$j=0;
				$events = "";
				while($postslist->have_posts()) : $postslist->the_post();
			$tags=get_the_terms( $post->id, 'project_tags');//tag array
			$tag='';//tag string
			foreach ($tags as $key=>$values){
				$tag.=' '.$values->slug;
			}
			$date = date('m-y-d',types_render_field('project-date', array('raw' => 'true')));
			$events = $events . "{ date: '" . date('Y-m-d',types_render_field('project-date', array('raw' => 'true'))) ."', title: '" . get_the_title() . "', url: '" . get_the_permalink() . "' },";
			$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'large');
			if($imgsrc[0] == null || $imgsrc[0] == '')
				$image = '';
			else
				$image = $imgsrc[0];
			if($i == 0) {
				$class = 'project-wrapper-left';
				$i++;
			}
			else {
				$class = 'project-wrapper-right';
				$i = 0;
			}
			?>

			<div class="cd-timeline-block <?php if($j == 0) echo 'first'; ?><?php echo $tag;?>" <?php if($post->ID == $nextEvent) echo 'id="next"';?>>
				<a href="<?php echo get_the_permalink();?>"><div class="cd-timeline-img cd-picture <?php if($post->ID == $nextEvent) echo 'next-project';?>">
					<span><?php echo parseDate($date);?></span>
				</div></a> <!-- cd-timeline-img -->
					<div class="cd-timeline-content <?php echo $class . '-wrap';?> <?php if($j == 0) echo 'first';?>">
						<a href="<?php echo get_the_permalink();?>"><div class="project-wrapper <?php echo $class;?>" <?php echo "style = 'background-image: url(http://localhost/srijanalaya/wp-content/uploads/2015/10/Srijanalaya_projects_2.png);'";?>></div></a>
						<div class="content">
							<h2><a href="<?php echo get_the_permalink();?>"><?php the_title();?></a></h2>
							<p><?php echo types_render_field('location');?></p>
							<p><?php echo types_render_field('summary');?></p>
							<p><?php echo types_render_field('facilitators');?></p>
							<p class="small-text"><img align="middle" src="<?php echo get_template_directory_uri();?>/images/participant-icon.png" class="outimg" alt="">200 participants | <?php echo date('F Y',types_render_field('project-date', array('raw' => 'true')));?></p>
							<a href="<?php echo the_permalink();?>" class="cd-read-more visihide">Read More</a>
						</div>
					</div> <!-- cd-timeline-content -->

			</div> <!-- cd-timeline-block -->
			<?php $j++; endwhile; ?>
		</section> <!-- cd-timeline -->
	</div>
	<div class="col-sm-3 fixed hidden-xs">
		<h2>Calender</h2>
		<div class="clndr-wrap">
			<script type="text/template" id="clndr">
				<div class="clndr-transparent-block">
					<div class="close-clndr-info" onclick="close_msg();">X</div>
					<div class="content">
						<h2 id="event-title">Event Title</h2>
						<p id="event-date">2015-10-16</p>
						<p id="event-link"><a href="gotto">View Project</a></p>
					</div>
				</div>
				<div class="clndr-controls">
					<div class="clndr-previous-button">&lsaquo;</div>
					<div class="clndr-next-button">&rsaquo;</div>
				</div>
				<div class="clndr-grid">
					<div class="days-of-the-week">
						<% _.each(daysOfTheWeek, function(day) { %>
							<div class="header-day"><%= day %></div>
							<% }); %>
						<div class="days">
							<% _.each(days, function(day) { %>
								<div class="<%= day.classes %>"><%= day.day %></div>
								<% }); %>
						</div>
					</div>
				</div>
			</script>
		</div>
	</div>
</div>
<?php 
get_footer('all');
get_footer(); 
?>
<?php 
$current_page="http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI'];
$lang = 'en';
if(strstr($current_page,'ne'))
	$lang = 'ne';
?>
<script>var eventdata = <?php echo '[' . $events . ']'; ?>;
	var lang = '<?php echo $lang; ?>';</script>
	<script src="<?php echo get_template_directory_uri();?>/js/mordenizer.js"></script> <!-- Modernizr -->
	<script src="<?php echo get_template_directory_uri();?>/js/timeline.js"></script> <!-- Resource jQuery -->
	<script src="<?php echo get_template_directory_uri();?>/js/moment.js"></script> <!-- Moment jQuery -->
	<script src="<?php echo get_template_directory_uri();?>/js/underscore.js"></script> <!-- Underscore jQuery -->
	<script src="<?php echo get_template_directory_uri();?>/js/calender.js"></script> <!-- CLNDR jQuery -->
	<script type="text/javascript">
		jQuery(window).load(function() {
		//Go to next project
		var winSize = (jQuery(window).height()) / 2;
		jQuery("html, body").animate({scrollTop: (jQuery('#next').offset().top - winSize) }, 1000);

		//{to change calender locale}
		if(lang == 'ne') 
			moment.locale('ne'); 
		else
			moment.locale('en'); 

		//Calender
		jQuery('.clndr-wrap').clndr({
			template: jQuery('#clndr').html(),
			startWithMonth: moment(),
			events:  eventdata,
			clickEvents: {
				click: function(target){ 
					if(target.events[0] != null) {
						jQuery('#event-date').html(target.events[0].date);
						jQuery('#event-title').html(target.events[0].title);
						jQuery('#event-link').html("<a href='" + target.events[0].url + "' >View Project</a>");
						jQuery('.clndr-transparent-block').css("display", "flex").hide().fadeIn(300);
					}
				},
			},
		});


	});

	//Fix Calender
	jQuery(window).scroll( function() {
		if(jQuery(window).scrollTop() > 450) {
			jQuery('.fixed').css('position','fixed');
		}
		else {
			jQuery('.fixed').css('position','relative');
		}
	});
	function close_msg() {
		jQuery('.clndr-transparent-block').fadeOut(300);
	}
</script>() {
jQuery('.clndr-transparent-block').fadeOut(300);
}
</script>