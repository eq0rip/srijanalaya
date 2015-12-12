<?php

//category
register_taxonomy(
  'project_categories',
  'project',
  array(
    'label'        => __( 'Categories' ),
    'rewrite'      => false,
    'hierarchical' => true,
    'capabilities' => array( 'edit_terms' => 'manage_categories' )
    )
  );

register_taxonomy(
  'videos_categories',
  'video',
  array(
    'label'        => __( 'Categories' ),
    'rewrite'      => false,
    'hierarchical' => true,
    'capabilities' => array( 'edit_terms' => 'manage_categories' )
    )
  );

// tags
register_taxonomy(
  'project_tags',
  'project',
  array(
    'label'        => __( 'Tags' ),
    'rewrite'      => false,
    'hierarchical' => false,
    'capabilities' => array( 'edit_terms' => 'manage_categories' )
    )
  );

register_taxonomy(
  'resource_tags',
  'resource',
  array(
    'label'        => __( 'Tags' ),
    'rewrite'      => false,
    'hierarchical' => false,
    'capabilities' => array( 'edit_terms' => 'manage_categories' )
    )
  );
function load_locale() {
  global $wpdb;
$data = $wpdb->get_results("SELECT *  FROM localize");
foreach ($data as $key => $value) {
  $temp_locale[$value->locale_key]=array('en'=>$value->en,'ne'=>$value->ne);
}
return $temp_locale;
}
$sri_locale = load_locale();
$current_page="http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI'];
$lang = 'en';
if(strstr($current_page,'/ne/'))
  $lang = 'ne';
