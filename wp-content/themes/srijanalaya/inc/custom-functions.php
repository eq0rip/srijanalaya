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

?>