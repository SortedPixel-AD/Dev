<?php

	 

	add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

	 

	function enqueue_parent_styles() {

	 

	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

	 

	}

	 


add_action( 'init', 'create_custom_post_type' );
 
 function create_custom_post_type() {
  
 $args = array(
   'labels' => array(
	'name' => __( 'Lab reports' ),
	'singular_name' => __( 'Lab report' )
   ),
   'public' => true,
   'has_archive' => false,
   'rewrite' => array('slug' => 'Lab reports'),
  );
  
 register_post_type( 'Lab reports',$args);
 }
 ?>