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
<div class="row" >

	<div style="width:100%:" id="filter_div">
		<div id="custom_filters">
			<?php
			$dropdown_args = array(
				'hide_empty'       => 0,
				'hide_if_empty'    => false,
				'taxonomy'         => 'project_categories',
				'name'             => 'parent',
				'orderby'          => 'name',
				'hierarchical'     => true,
				'show_option_none' => 'Type',
				);
			$dropdown_args = apply_filters( 'taxonomy_parent_dropdown_args', $dropdown_args, 'project_categories', 'new' );
			$tags=wp_dropdown_categories( $dropdown_args );
			?>
			
			<select id="location_value_main">
				<option selected>Location</option>
				<?php $args=array('posts_per_page'=>-1,'post_type'=>'maps');
				$postslist=new WP_Query($args);
				while($postslist->have_posts()):$postslist->the_post();
				?>
				<option><?php the_title();?></option>
			<?php endwhile; ?>
		</select>

		<ul class="transformSelect trans-element transformSelect3">
			<li class="">
				<span id='date_value_main'>
					<?php if(isset($_GET['from'])){
						echo $_GET['from'].' to '.$_GET['to'];
					}
					else {
						echo 'By Date';
					}
					?>

				</span>
				<ul style="display: none;" class="transformSelectDropdown">
					<li data-settings="" class="selected open"><span><a href="javascript:void(0)" onclick="apply_date_filter('week')">This Week</a></span></li>
					<li data-settings="" class="open"><span><a href="javascript:void(0)" onclick="apply_date_filter('Lweek')">Last Week</a></span></li>
					<li data-settings="" class="open"><span><a href="javascript:void(0)" onclick="apply_date_filter('month')">This month</a></span></li>
					<li data-settings="" class="open"><span><a href="javascript:void(0)" onclick="apply_date_filter('Lmonth')">Last Month</a></span></li>
					<li data-settings="" class="open"><span><a href="javascript:void(0)" onclick="apply_date_filter('year')">This year</a></span></li>
					<li data-settings="" class="open"><span><span>From:</span><input type="text" id="fromDate" value="" class="dropdate"><br/>
						<span>To:</span><input type="text" id="toDate" value="" class="dropdate"><br/>
						<button onclick="apply_date_filter('custom')" class="btn">Apply</button></span></li>
					</ul>
				</li>
			</ul>
			<input id="clickMe" type="button" class="btn" onclick="filter_projects();" value="Filter" />	

		</div>
		<div class="col-sm-8" id="tag_filter_div">
			<ul>

			</ul>
		</div>
		<br/>
		<ul class="fetch_tag">
			<?php 
			$tags = get_terms('project_tags');
			foreach($tags as $tag) {
				?>
				<li class="col-sm-1"><a href="javascript:void(0)" onclick="add_filter( '<?php echo $tag->slug ?>' ,'tag_filter_div',0 )"><?php echo $tag->name;?></a></li>
				<?php }?>
			</ul>
		</div>
	</div>
	<div class="col-sm-9 timeline-wrapper">

		<section id="cd-timeline" class="cd-container">
			<div class="circle"></div>
			<?php
			$nextEvent = '';
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
			if(!isset($_GET['category']) ){

				$args=array('posts_per_page' => -1, 'post_type'=>'project', 'meta_key' => 'wpcf-project-date','orderby' => 'meta_value', 'order' => 'DESC'); 
			}
			else {

				$args=array('posts_per_page' => -1, 'post_type'=>'project', 'meta_key' => 'wpcf-project-date',
					'tax_query' => array(
						array(
							'taxonomy' => 'project_categories',
							'field'    => 'slug',
							'terms'    => $_GET['category'],
							),
						),
					'orderby' => 'meta_value', 'order' => 'DESC'); 
			}
			$postslist=new WP_Query($args);              
			$curDate = date('now');
			$i = 1;$j=0;
			$events = "";
			while($postslist->have_posts()) : $postslist->the_post();
			$tags=get_the_terms( $post->id, 'project_tags');//tag array

			$tag='';//tag string
			if(!empty($tags)) {
				foreach ($tags as $key=>$values){
					$tag.=' '.$values->slug;
				}
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
			$datepp=types_render_field('project-date');
			if(isset($_GET['from']) && isset($_GET['to'])){
				if(strtotime($datepp)>=strtotime($_GET['from']) && strtotime($datepp)<=strtotime($_GET['to']) ){

				}
				else {
					continue;
				}
			}
			?>
			<?php 
			global $wpdb;
			$con_id = 0;
			$query = "SELECT p2p_from FROM wp_p2p where p2p_to = $post->ID and p2p_type = 'maps_to_project'";
			$results = $wpdb->get_results($query);
			foreach ($results as $result) {
				$con_id = $result->p2p_from;
			}
			if($con_id != 0) {
				$con_array = wp_get_single_post($con_id);
				$location =  get_field(  'maplatlng', $con_id );

			}

			if(isset($_GET['location'])){

				if (stripos($location['address'],$_GET['location']) !== false) {
					
				}
				else {continue;}
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
						<p>
							<?php echo $location['address']; ?>
						</p>
						<p><?php 
							echo types_render_field('project-date').'<br/>'; echo types_render_field('summary');?></p>
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
			<div class="clndr-wrap side-wrap">
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
			<div class="side-wrap last">
				<?php include('social.php');?>
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
		if(jQuery(window).scrollTop() > 500) {
			jQuery('.fixed').css('position','fixed');
		}
		else {
			jQuery('.fixed').css('position','relative');
		}
	});
	function close_msg() {
		jQuery('.clndr-transparent-block').fadeOut(300);
	}
	jQuery()
</script>