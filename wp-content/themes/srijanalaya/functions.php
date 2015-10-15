<?php
/**
 * nirmal functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nirmal
 */

if ( ! function_exists( 'nirmal_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
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
        echo "success";return;
    }

	if ( wp_is_post_revision( $post_id ) ) { 
	//echo "";
	wp_mail('lstrrt@gmail.com','test','postupdate');
	}

	else {
	//echo "";
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
function add_subscriber ($email,$project_id){
	global $wpdb;
	$data = $wpdb->get_results("SELECT *  FROM project_subscriber WHERE project_id=$project_id AND email='$email'");
	if(count($data)==0)
		return;
$table='project_subscriber';
$data=array('email'=>$email,'project_id'=>$project_id);
$wpdb->insert( $table, $data);
return;
}

//sort array of project by date
function sort_project_by_date($a,$b)
{

if (strtotime($a[1])==strtotime($b[1])) return 0;
return (strtotime($a[1])<strtotime($b[1]))?-1:1;
}