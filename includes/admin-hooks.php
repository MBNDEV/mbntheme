<?php

/**
 * Custom Field Map Api
 */
function mbn_acf_google_map_api($api){
	$api['key'] = MBN_MAP_API_KEY;
	
	return $api;
}
//add_filter('acf/fields/google_map/api', 'mbn_acf_google_map_api');



//sidebars
function my_custom_sidebar() {
	register_sidebar(
		array (
			'name' => __( 'Footer Bottom', 'your-theme-domain' ),
			'id' => 'footer-bottom-sidebar',
			'description' => __( 'footer_bottom_sidebar', 'mbn' ),
			'before_widget' => '',
			'after_widget' => "",
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>',
		)
	);
	register_sidebar(
		array (
			'name' => __( 'Mobile Menu', 'your-theme-domain' ),
			'id' => 'mobile-menu-widget',
			'description' => __( 'mobile_menu_widget', 'mbn' ),
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>',
		)
	);
}
// add_action( 'widgets_init', 'my_custom_sidebar' );