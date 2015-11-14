<?php
//News Post
add_filter('manage_news-post_posts_columns', 'news_post_modifier');
function news_post_modifier( $defaults ) {
	$defaults['recommended']  = 'Recommended';
	return $defaults;
}
add_action( 'manage_news-post_posts_custom_column', 'news_post_modifier_action', 10, 2 );

function news_post_modifier_action( $column_name, $post_id ) {
	if ($column_name == 'recommended') {
		echo get_post_meta( $post_id, 'wpcf-recommended-news', true );
	}
}

//Video
add_filter('manage_video_posts_columns', 'video_post_modifier');
function video_post_modifier( $defaults ) {
	$defaults['featured']  = 'Featured';
	return $defaults;
}
add_action( 'manage_video_posts_custom_column', 'video_post_modifier_action', 10, 2 );

function video_post_modifier_action( $column_name, $post_id ) {
	if ($column_name == 'featured') {
		if(get_post_meta( $post_id, 'wpcf-featured-video', true ) == 1) {
			echo 'Featured';
		}
	}
}

?>