<?php
/*
 * thumbnails
*/
add_theme_support( 'post-thumbnails' ); 
set_post_thumbnail_size( 250, 200, true );
add_image_size( 'home_slides', 1667, 1003, true );
add_image_size( 'client_logo', 200, 100, true);

/*
 * Register Navigations
 */
	function my_custom_menus() {
	    register_nav_menus( array(
            'primary-menu' => __( 'Primary Menu' ),
            'secondary-menu' => __( 'Secondary Menu' )
	        )
	    );
	}
	add_action( 'init', 'my_custom_menus' );

/* 
 * Register sidebars and widgetized areas. 
 */
	function arphabet_widgets_init() {
	
		register_sidebar( array(
			'name' => 'Home right sidebar',
			'id' => 'home_right_1',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="rounded">',
			'after_title' => '</h2>',
		) );
	}
	add_action( 'widgets_init', 'arphabet_widgets_init' );

/* 
 * Custom post type 
 */
	function create_post_type() {
		register_post_type( 'home_page_slider',
			array(
				'labels' => array(
					'name' => __( 'Home Slides' ),
					'singular_name' => __( 'Home Slide' )
				),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title', 'thumbnail', 'page-attributes')
			)
		);
		register_post_type( 'client_list',
			array(
				'labels' => array(
					'name' => __( 'Client List' ),
					'singular_name' => __( 'Client' )
				),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title', 'thumbnail', 'page-attributes')
			)
		);
		register_post_type( 'company_info',
			array(
				'labels' => array(
					'name' => __( 'Company Info' ),
					'singular_name' => __( 'Info' )
				),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title', 'editor', 'thumbnail')
			)
		);
	}
	add_action( 'init', 'create_post_type' );

?>