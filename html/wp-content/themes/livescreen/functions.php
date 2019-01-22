<?php 

/*------------------------------------*\
	Disable goddamn Gutenberg
\*------------------------------------*/

add_filter('use_block_editor_for_post', '__return_false');

/*------------------------------------*\
	Adds Support for SVG's
\*------------------------------------*/

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/*------------------------------------*\
	Add a custom post type of TV Show
\*------------------------------------*/

function cptui_register_my_cpts() {

	/**
	 * Post Type: TV Show.
	 */

	$labels = array(
		"name" => __( "TV Show", "custom-post-type-ui" ),
		"singular_name" => __( "TV Shows", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "TV Show", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "tv_show", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-format-video",
		"supports" => array( "title", "thumbnail" ),
	);

	register_post_type( "tv_show", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );



?>