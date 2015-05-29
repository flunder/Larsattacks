<?php 

/* 
 * Register Projects Post Type 
*/ 

add_action('init', 'add_projects_post_type');

function add_projects_post_type() {
	$labels = array(
		'name' => _x('Projects', 'post type general name'),
		'singular_name' => _x('Project', 'post type singular name'),
		'add_new' => _x('Add New', 'Project'),
		'add_new_item' => __('Add New Project'),
		'edit_item' => __('Edit Project'),
		'new_item' => __('New Project'),
		'view_item' => __('View Project'),
		'search_items' => __('Search Projects'),
		'not_found' =>  __('No Projects found'),
		'not_found_in_trash' => __('No Projects found in Trash'),
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $labels,
		'menu_position' => 30,
		'public' => true,
		'query_var' => true,
		'supports' => array('title', 'editor', 'comments', 'revisions', 'author', 'excerpt', 'custom-fields', 'page-attributes', 'thumbnail'),
		'rewrite' => array('slug' => 'Projects', 'with_front' => false ),
		'taxonomies' => array('post_tag', 'category'),
		'hierarchical' => true,
		'capability_type' => 'post'
	);
	register_post_type('Project',$args);
};

?>