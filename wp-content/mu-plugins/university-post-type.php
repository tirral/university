<?php

function university_post_types(){
  //Event Post type
  register_post_type( 'event', array(
    'supports' => array('title', 'editor', 'excerpt'),
    'capability_type' => 'event',
    'map_meta_cap' => true,
      'rewrite' =>array(
        'slug' => 'events'
      ),
      'has_archive' => true,
      'public' => true,
      'labels' =>  array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item'=> 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event'
    ),
    'menu_icon' => 'dashicons-calendar',
  ));

  //Program Post type
  register_post_type( 'program', array(
    'supports' => array('title', 'editor'),
      'rewrite' =>array(
        'slug' => 'programs'
      ),
      'has_archive' => true,
      'public' => true,
      'labels' =>  array(
      'name' => 'Programs',
      'add_new_item' => 'Add New Program',
      'edit_item'=> 'Edit Program',
      'all_items' => 'All Programs',
      'singular_name' => 'Program'
    ),
    'menu_icon' => 'dashicons-awards',
  ));


  //Professor Post type
  register_post_type( 'professor', array(
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'thumbnail'),
      'public' => true,
      'labels' =>  array(
      'name' => 'Professors',
      'add_new_item' => 'Add New Professor',
      'edit_item'=> 'Edit Professor',
      'all_items' => 'All Professors',
      'singular_name' => 'Professor'
    ),
    'menu_icon' => 'dashicons-welcome-learn-more',
  ));

  //Campus Post type
  register_post_type( 'campus', array(
    'supports' => array('title', 'editor', 'excerpt'),
      'rewrite' =>array(
        'slug' => 'campuses'
      ),
      'has_archive' => true,
      'public' => true,
      'labels' =>  array(
      'name' => 'Campuses',
      'add_new_item' => 'Add New Campus',
      'edit_item'=> 'Edit Campus',
      'all_items' => 'All Campuses',
      'singular_name' => 'Campus'
    ),
    'menu_icon' => 'dashicons-location-alt',
  ));


  //Note Post type
  register_post_type( 'note', array(
      'show_in_rest' => true,
      'supports' => array('title', 'editor'),
      'public' => false,
      'show_ui' => true,
      'labels' =>  array(
      'name' => 'Notes',
      'add_new_item' => 'Add New Notes',
      'edit_item'=> 'Edit Notes',
      'all_items' => 'All Notes',
      'singular_name' => 'Notes'
    ),
    'menu_icon' => 'dashicons-welcome-write-blog',
  ));


  // Like Post type
  register_post_type( 'like', array(
      'supports' => array('title'),
      'public' => false,
      'show_ui' => true,
      'labels' =>  array(
      'name' => 'Like',
      'add_new_item' => 'Add New Like',
      'edit_item'=> 'Edit Like',
      'all_items' => 'All Like',
      'singular_name' => 'Like'
    ),
    'menu_icon' => 'dashicons-heart',
  ));





}

add_action('init', 'university_post_types');
