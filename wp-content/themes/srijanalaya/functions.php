<?php
/**
 * nirmal functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nirmal
 */


//Page Slug Body Class
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

if ( ! function_exists( 'nirmal_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

include('inc/custom-functions.php');
function nirmal_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on nirmal, use a find and replace
	 * to change 'nirmal' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'nirmal', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'nirmal' ),
		) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'nirmal_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
		) ) );
}
endif; // nirmal_setup
add_action( 'after_setup_theme', 'nirmal_setup' );

wp_enqueue_script( 'nirmal-navigation', get_template_directory_uri() . '/js/bootstrap.js', array(), '20120206', true );

function is_mobile() {
	// Get the user agent

	$user_agent = $_SERVER['HTTP_USER_AGENT'];

	// Create an array of known mobile user agents
	// This list is from the 21 October 2010 WURFL File.
	// Most mobile devices send a pretty standard string that can be covered by
	// one of these.  I believe I have found all the agents (as of the date above)
	// that do not and have included them below.  If you use this function, you 
	// should periodically check your list against the WURFL file, available at:
	// http://wurfl.sourceforge.net/


	$mobile_agents = Array(


		"240x320",
		"acer",
		"acoon",
		"acs-",
		"abacho",
		"ahong",
		"airness",
		"alcatel",
		"amoi",	
		"android",
		"anywhereyougo.com",
		"applewebkit/525",
		"applewebkit/532",
		"asus",
		"audio",
		"au-mic",
		"avantogo",
		"becker",
		"benq",
		"bilbo",
		"bird",
		"blackberry",
		"blazer",
		"bleu",
		"cdm-",
		"compal",
		"coolpad",
		"danger",
		"dbtel",
		"dopod",
		"elaine",
		"eric",
		"etouch",
		"fly " ,
		"fly_",
		"fly-",
		"go.web",
		"goodaccess",
		"gradiente",
		"grundig",
		"haier",
		"hedy",
		"hitachi",
		"htc",
		"huawei",
		"hutchison",
		"inno",
		"ipad",
		"ipaq",
		"ipod",
		"jbrowser",
		"kddi",
		"kgt",
		"kwc",
		"lenovo",
		"lg ",
		"lg2",
		"lg3",
		"lg4",
		"lg5",
		"lg7",
		"lg8",
		"lg9",
		"lg-",
		"lge-",
		"lge9",
		"longcos",
		"maemo",
		"mercator",
		"meridian",
		"micromax",
		"midp",
		"mini",
		"mitsu",
		"mmm",
		"mmp",
		"mobi",
		"mot-",
		"moto",
		"nec-",
		"netfront",
		"newgen",
		"nexian",
		"nf-browser",
		"nintendo",
		"nitro",
		"nokia",
		"nook",
		"novarra",
		"obigo",
		"palm",
		"panasonic",
		"pantech",
		"philips",
		"phone",
		"pg-",
		"playstation",
		"pocket",
		"pt-",
		"qc-",
		"qtek",
		"rover",
		"sagem",
		"sama",
		"samu",
		"sanyo",
		"samsung",
		"sch-",
		"scooter",
		"sec-",
		"sendo",
		"sgh-",
		"sharp",
		"siemens",
		"sie-",
		"softbank",
		"sony",
		"spice",
		"sprint",
		"spv",
		"symbian",
		"tablet",
		"talkabout",
		"tcl-",
		"teleca",
		"telit",
		"tianyu",
		"tim-",
		"toshiba",
		"tsm",
		"up.browser",
		"utec",
		"utstar",
		"verykool",
		"virgin",
		"vk-",
		"voda",
		"voxtel",
		"vx",
		"wap",
		"wellco",
		"wig browser",
		"wii",
		"windows ce",
		"wireless",
		"xda",
		"xde",
		"zte"
		);

	// Pre-set $is_mobile to false.

$is_mobile = false;

	// Cycle through the list in $mobile_agents to see if any of them
	// appear in $user_agent.

foreach ($mobile_agents as $device) {

		// Check each element in $mobile_agents to see if it appears in
		// $user_agent.  If it does, set $is_mobile to true.

	if (stristr($user_agent, $device)) {

		$is_mobile = true;

			// break out of the foreach, we don't need to test
			// any more once we get a true value.

		break;
	}
}

return $is_mobile;
}



function truncate($str, $width=300) {
	return strtok(wordwrap($str, $width, " ...\n"), "\n");
}

function my_project_updated_send_email($post_id,$post){
	$slug = 'project';

    // If this isn't a 'book' post, don't update it.
	if ( $slug != $post->post_type ) {
		return;
	}

	if ( wp_is_post_revision( $post_id ) ) { 
	//echo "";
		wp_mail('lstrrt@gmail.com','test','postupdate');
	}
	remove_action( 'save_post', 'my_project_updated_send_email', 13, 2 );
}
add_action( 'save_post', 'my_project_updated_send_email',13,2 );



//getting subscriber list
function get_subscriber($id){
	global $wpdb;
	$data = $wpdb->get_results("SELECT *  FROM project_subscriber WHERE project_id = $id");
	
	foreach($data as $key=>$value)
	{	
		$subscribers[]=$value->email;	
	}

	return $subscribers;

}

//adding subscriber
function add_subscriber($email,$project_id){
	global $wpdb;
	$data = $wpdb->get_results("SELECT *  FROM project_subscriber WHERE project_id=$project_id AND email='$email'");
	if(count($data)!=0)
		return 'Already Subscribed';
	$table='project_subscriber';
	$data=array('email'=>$email,'project_id'=>$project_id);
	$wpdb->insert( $table, $data);
	return 'Thanks for Subscribing';
}

//sort array of project by date
function sort_project_by_date($a,$b)
{

	if (strtotime($a[1])==strtotime($b[1])) return 0;
	return (strtotime($a[1])<strtotime($b[1]))?-1:1;
}


function parseDate($date)
{
	$data = explode('-', $date);
	$month = $data[1];
	$year = $data[0];
	$day = $data[2];
	switch ($month) {
		case 1:
		$month = "January";
		break;
		case 2:
		$month = "Feburary";
		break;
		case 3:
		$month = "March";
		break;
		case 4:
		$month = "April";
		break;
		case 5:
		$month = "May";
		break;
		case 6:
		$month = "June";
		break;
		case 7:
		$month = "July";
		break;
		case 8:
		$month = "August";
		break;
		case 9:
		$month = "September";
		break;
		case 10:
		$month = "October";
		break;
		case 11:
		$month = "November";
		break;
		case 12:
		$month = "December";
		break;
		default:
		$month = "May'";
		break;
	}


	switch ($day) {
		case 1:
		$day = '1st';
		break;
		case 2:
		$day = '2nd';
		break;
		case 3:
		$day = '3rd';
		break;
		default:
		$day = $day.'th';
		break;
	}
	return $day;
}





//For post View

function wpb_set_post_views($postID) {
	$count_key = 'wpb_post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
		$count = 0;
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
	}else{
		$count++;
		update_post_meta($postID, $count_key, $count);
	}
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function wpb_track_post_views ($post_id) {
	if ( !is_single() ) return;
	if ( empty ( $post_id) ) {
		global $post;
		$post_id = $post->ID;    
	}
	wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');
function postConnections() {
	p2p_register_connection_type( array(
		'name' => 'maps_to_project',
		'from' => 'maps',
		'to' => 'project',
		'admin_box' => array(
			'show' => 'to',
			'context' => 'side'
			)
		) );
}
add_action( 'p2p_init', 'postConnections' );


function remove_footer_admin () 
{
	echo '<span id="footer-thankyou">Developed by <a href="http://saediworks.com" target="_blank">Saedi Works</a></span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');



add_action('wp_dashboard_setup', 'my_dashboard_widgets');
function my_dashboard_widgets() {
	global $wp_meta_boxes;
	unset(
		$wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins'],
		$wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary'],
		$wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']
		);
	wp_add_dashboard_widget( 'dashboard_custom_feed', 'Smjrifle' , 'dashboard_custom_feed_output' );
}
function dashboard_custom_feed_output() {
	echo '<div class="rss-widget">';
	wp_widget_rss_output(array(
          'url' => 'http://smjrifle.net/feed',  //Feed URL
          'title' => 'Smjrifle', //Title of Feed
          'items' => 4,  //Number of items to fetch
          'show_summary' => 1,
          'show_author' => 0,
          'show_date' => 1
          ));
	echo '</div>';
}

add_action( 'admin_print_styles', 'load_custom_admin_css' );
function load_custom_admin_css()
{
	wp_enqueue_style('my_style', WP_CONTENT_URL . '/themes/srijanalaya/less/admin.less');
}

//Heading
function auto_id_headings( $content, $heading = NULL) {
	$jump_menu = '';
	$id = array();
	$content2 = '';
	$i = 0;
	$content = preg_replace_callback( '/(\<h3(.*?))\>(.*)(<\/h3>)/i', function( $matches ) use (&$jump_menu, &$id) {
		if ( ! stripos( $matches[0], 'id=' ) ) :
			$matches[0] = '<br/>' . $matches[1] . $matches[2] . ' id="' . sanitize_title( $matches[3] ) . '">' . $matches[3] . $matches[4];
		$jump_menu = $jump_menu . '<li class="jump-menu"><a href=#' . str_replace(' ','-',strtolower($matches[3])) . '>' . $matches[3] . '</a></li>';
		$id[] = str_replace(' ','-',strtolower($matches[3]));
		endif;
		return $matches[0];
	}, $content );
	echo '<h2 class="jumpheading">' . $heading . '</h2>';
	echo '<ul class="jumpmenu-ul">' . $jump_menu . '</ul>';
	$ary = explode('<br/>',$content);
	foreach ($ary as $section) {
		if(!empty($section)){
			$class = ($i == 0) ? ' first-sub-head' : '';
			$content2 = $content2 . '<div class="subhead' . $class . '" id="span' . $id[$i++] . '">' . $section . '</div>';
		}
	}
	return $content2;
}

/* Disable the Admin Bar. */
add_filter( 'show_admin_bar', '__return_false' );

add_action( 'load-edit.php', 'wpse34956_force_excerpt' );
function wpse34956_force_excerpt() {
	$_REQUEST['mode'] = 'excerpt';
}

function get_the_slug( $id=null ){
  if( empty($id) ):
    global $post;
    if( empty($post) )
      return ''; // No global $post var available.
    $id = $post->ID;
  endif;

  $slug = basename( get_permalink($id) );
  return trim(strtolower($slug));
}

function get_gallery($galleries) {
	foreach ($galleries as $image):
	echo '<div id="ngg-image-0 col-sm-4" class="ngg-gallery-thumbnail-box">
		<div class="ngg-gallery-thumbnail">
			<a href="' . $image->imageURL . '" title="" data-src="' . $image->imageURL . '" data-thumbnail="' . $image->thumbnailURL . '" data-image-id="1" data-title="Print" data-description="" class="ngg-fancybox" rel="316">
				<img title="Print" alt="Print" src="' . $image->thumbnailURL . '" width="380" height="225" style="max-width:none;">
			</a>
		</div>
	</div> ';
	endforeach;
}