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

  $file = get_template_directory_uri().'/localize.json';

  $json = json_decode(file_get_contents($file),true);

 // echo $json['read_more']['np'];
//print_r($json);
  //file_put_contents($file, json_encode($json));
  return $json;
}
$sri_locale = load_locale();
$current_page="http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI'];
$lang = 'en';
if(strstr($current_page,'ne'))
  $lang = 'ne';
