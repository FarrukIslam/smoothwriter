<?php 

add_action( 'init', 'smoothwriter_slider_init' );

function smoothwriter_slider_init() {
	$labels = array(
		'name'               => _x( 'sliders', 'smoothwriter portfolios', 'smoothwriter' ),
		'singular_name'      => _x( 'Slider', 'smoothwriter Slider', 'smoothwriter' ),
		'menu_name'          => _x( 'smoothwriter Slider', 'admin menu', 'smoothwriter' ),
		'name_admin_bar'     => _x( 'Slider', 'add new on admin bar', 'smoothwriter' ),
		'add_new'            => _x( 'Add smoothwriter New Slider', 'slider', 'smoothwriter' ),
		'add_new_item'       => __( 'Add New Slider', 'smoothwriter' ),
		'new_item'           => __( 'New Slider', 'smoothwriter' ),
		'edit_item'          => __( 'Edit Slider', 'smoothwriter' ),
		'view_item'          => __( 'View Slider', 'smoothwriter' ),
		'all_items'          => __( 'All smoothwriter Sliders', 'smoothwriter' ),
		'search_items'       => __( 'Search Sliders', 'smoothwriter' ),
		'parent_item_colon'  => __( 'Parent Sliders:', 'smoothwriter' ),
		'not_found'          => __( 'No Sliders found.', 'smoothwriter' ),
		'not_found_in_trash' => __( 'No Sliders found in Trash.', 'smoothwriter' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'smoothwriter Slider Section.', 'smoothwriter' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'slider' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'menu_icon'           => 'dashicons-slides',
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports' 			 => array(  'editor', 'thumbnail', 'title', 'excerpt' ),
	);

	register_post_type( 'sm_slider', $args );
}





//portfolio custom post type 
add_action( 'init', 'smoothwriter_portfilo_init' );

function smoothwriter_portfilo_init() {
	$labels = array(
		'name'               => _x( 'portfolios', 'smoothwriter portfolios', 'smoothwriter' ),
		'singular_name'      => _x( 'Portfolio', 'smoothwriter Portfolio', 'smoothwriter' ),
		'menu_name'          => _x( 'Portfolio', 'admin menu', 'smoothwriter' ),
		'name_admin_bar'     => _x( 'Portfolio', 'add new on admin bar', 'smoothwriter' ),
		'add_new'            => _x( 'Add New Portfolio', 'Portfolio', 'smoothwriter' ),
		'add_new_item'       => __( 'Add New Portfolio', 'smoothwriter' ),
		'new_item'           => __( 'New Portfolio', 'smoothwriter' ),
		'edit_item'          => __( 'Edit Portfolio', 'smoothwriter' ),
		'view_item'          => __( 'View Portfolio', 'smoothwriter' ),
		'all_items'          => __( 'All portfolios', 'smoothwriter' ),
		'search_items'       => __( 'Search portfolios', 'smoothwriter' ),
		'parent_item_colon'  => __( 'Parent portfolios:', 'smoothwriter' ),
		'not_found'          => __( 'No portfolios found.', 'smoothwriter' ),
		'not_found_in_trash' => __( 'No portfolios found in Trash.', 'smoothwriter' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'smoothwriter Portfolio Section.', 'smoothwriter' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'menu_icon'           => 'dashicons-groups',
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports' 			 => array(  'editor', 'thumbnail', 'title', 'excerpt' ),
	);

	register_post_type( 'sm_portfolio', $args );

	register_taxonomy("portfolio_cat", 
		array("sm_portfolio"), 
		array(
			"hierarchical" => true, 
			"label" => "Porfolio Categories", 
			"singular_label" => "Type", 
			"rewrite" => true
			)
		);
}



//Team member custom post type 
add_action( 'init', 'smoothwriter_teammember_init' );

function smoothwriter_teammember_init() {
	$labels = array(
		'name'               => _x( 'Team_members', 'smoothwriter Team Members', 'smoothwriter' ),
		'singular_name'      => _x( 'Team Member', 'smoothwriter Team Member', 'smoothwriter' ),
		'menu_name'          => _x( 'Team Member', 'admin menu', 'smoothwriter' ),
		'name_admin_bar'     => _x( 'Team Member', 'add new on admin bar', 'smoothwriter' ),
		'add_new'            => _x( 'Add New Team Member', 'Team Member', 'smoothwriter' ),
		'add_new_item'       => __( 'Add New Team Member', 'smoothwriter' ),
		'new_item'           => __( 'New Team Member', 'smoothwriter' ),
		'edit_item'          => __( 'Edit Team Member', 'smoothwriter' ),
		'view_item'          => __( 'View Team Member', 'smoothwriter' ),
		'all_items'          => __( 'All Team Members', 'smoothwriter' ),
		'search_items'       => __( 'Search Team Members', 'smoothwriter' ),
		'parent_item_colon'  => __( 'Parent Team Members:', 'smoothwriter' ),
		'not_found'          => __( 'No Team Members found.', 'smoothwriter' ),
		'not_found_in_trash' => __( 'No Team Members found in Trash.', 'smoothwriter' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'smoothwriter Team Member Section.', 'smoothwriter' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'Team_member' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'menu_icon'           => 'dashicons-admin-users',
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports' 			 => array(  'editor', 'thumbnail', 'title', 'excerpt' ),
	);

	register_post_type( 'sm_team_member', $args );

	register_taxonomy("sm_team_member_cat", 
		array("sm_team_member"), 
		array(
			"hierarchical" => true, 
			"label" => "Team Member Categories", 
			"singular_label" => "Type", 
			"rewrite" => true
			)
		);
	remove_post_type_support( 'sm_team_member',  'editor' );
}


//Team member custom post type 
add_action( 'init', 'smoothwriter_tab_init' );

function smoothwriter_tab_init() {
	$labels = array(
		'name'               => _x( 'Price Tab', 'smoothwriter Priceing', 'smoothwriter' ),
		'singular_name'      => _x( 'Price Tab', 'smoothwriter Priceing', 'smoothwriter' ),
		'menu_name'          => _x( 'Price Tab', 'admin menu', 'smoothwriter' ),
		'name_admin_bar'     => _x( 'Price Tab', 'add new on admin bar', 'smoothwriter' ),
		'add_new'            => _x( 'Add New Price Tab', 'Priceing', 'smoothwriter' ),
		'add_new_item'       => __( 'Add New Price Tab', 'smoothwriter' ),
		'new_item'           => __( 'New Price Tab', 'smoothwriter' ),
		'edit_item'          => __( 'Edit Price Tab', 'smoothwriter' ),
		'view_item'          => __( 'View Price Tab', 'smoothwriter' ),
		'all_items'          => __( 'All Price Tab', 'smoothwriter' ),
		'search_items'       => __( 'Search Price Tab', 'smoothwriter' ),
		'parent_item_colon'  => __( 'Parent Price Tab:', 'smoothwriter' ),
		'not_found'          => __( 'No Price Tab found.', 'smoothwriter' ),
		'not_found_in_trash' => __( 'No Price Tab found in Trash.', 'smoothwriter' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'smoothwriter Price Tab', 'smoothwriter' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'price_tab' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'menu_icon'           => 'dashicons-cart',
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports' 			 => array(  'editor', 'thumbnail', 'title', 'excerpt' ),
	);

	register_post_type( 'sm_price_tab', $args );

	remove_post_type_support( 'sm_price_tab',  'editor' );
}
