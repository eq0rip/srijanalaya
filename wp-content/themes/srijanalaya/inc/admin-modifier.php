<?php
//News Post
add_filter('manage_news-post_posts_columns', 'news_post_modifier');
function news_post_modifier( $defaults ) {
	$checkbox = array_slice( $defaults , 0, 1 );
	$defaults = array_slice( $defaults , 1 );
	$id['myid'] = 'ID';
	$defaults = array_merge( $checkbox, $id, $defaults );
	$defaults['recommended']  = 'Recommended';
	return $defaults;
}
add_action( 'manage_news-post_posts_custom_column', 'news_post_modifier_action', 10, 2 );

function news_post_modifier_action( $column_name, $post_id ) {
	if ($column_name == 'recommended') {
		echo get_post_meta( $post_id, 'wpcf-recommended-news', true );
	}
	if ($column_name == 'myid') {
		the_ID();
	}
}

//Video
add_filter('manage_video_posts_columns', 'video_post_modifier');
function video_post_modifier( $defaults ) {
	$checkbox = array_slice( $defaults , 0, 1 );
	$defaults = array_slice( $defaults , 1 );
	$id['myid'] = 'ID';
	$defaults = array_merge( $checkbox, $id, $defaults );
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
	if ($column_name == 'myid') {
		the_ID();
	}
}

//Resource
add_filter('manage_resource_posts_columns', 'resource_post_modifier');
function resource_post_modifier( $defaults ) {
	$checkbox = array_slice( $defaults , 0, 1 );
	$defaults = array_slice( $defaults , 1 );
	$id['myid'] = 'ID';
	$defaults = array_merge( $checkbox, $id, $defaults );
	return $defaults;
}
add_action( 'manage_resource_posts_custom_column', 'resource_post_modifier_action', 10, 2 );

function resource_post_modifier_action( $column_name, $post_id ) {
	if ($column_name == 'myid') {
		the_ID();
	}
}


//Project
add_filter('manage_project_posts_columns', 'project_post_modifier');
function project_post_modifier( $defaults ) {
	$checkbox = array_slice( $defaults , 0, 1 );
	$defaults = array_slice( $defaults , 1 );
	$id['myid'] = 'ID';
	$defaults = array_merge( $checkbox, $id, $defaults );
	return $defaults;
}
add_action( 'manage_project_posts_custom_column', 'project_post_modifier_action', 10, 2 );

function project_post_modifier_action( $column_name, $post_id ) {
	if ($column_name == 'myid') {
		the_ID();
	}
}
?>