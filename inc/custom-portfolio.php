<?php 

/**
 * Registers a new post type
 * @uses $wp_post_types Inserts new post type object into the list
 *
 * @param string  Post type key, must not exceed 20 characters
 * @param array|string  See optional args description above.
 * @return object|WP_Error the registered post type object, or an error object
 */
function custom_portfolio() {

	$labels = array(
		'name'               => __( 'All Portfolios', 'text-domain' ),
		'singular_name'      => __( 'Portfolio', 'text-domain' ),
		'add_new'            => _x( 'Add New Portfolio', 'text-domain', 'text-domain' ),
		'add_new_item'       => __( 'Add New Portfolio', 'text-domain' ),
		'edit_item'          => __( 'Edit Portfolio', 'text-domain' ),
		'new_item'           => __( 'New Portfolio', 'text-domain' ),
		'view_item'          => __( 'View Portfolio', 'text-domain' ),
		'search_items'       => __( 'Search Portfolios', 'text-domain' ),
		'not_found'          => __( 'No Portfolios found', 'text-domain' ),
		'not_found_in_trash' => __( 'No Portfolios found in Trash', 'text-domain' ),
		'parent_item_colon'  => __( 'Parent Portfolio:', 'text-domain' ),
		'menu_name'          => __( 'Portfolios', 'text-domain' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
			'custom-fields',
			'trackbacks',
			'comments',
			'revisions',
			'page-attributes',
			'post-formats',
		),
	);

	register_post_type( 'portfolio', $args );
}
add_action( 'init', 'custom_portfolio' );


/**
 * Create a taxonomy
 *
 * @uses  Inserts new taxonomy object into the list
 * @uses  Adds query vars
 *
 * @param string  Name of taxonomy object
 * @param array|string  Name of the object type for the taxonomy object.
 * @param array|string  Taxonomy arguments
 * @return null|WP_Error WP_Error if errors, otherwise null.
 */
function portfolio_taxonomies() {

	$labels = array(
		'name'                  => _x( 'Portfolios', 'Taxonomy plural name', 'text-domain' ),
		'singular_name'         => _x( 'Porfolio', 'Taxonomy singular name', 'text-domain' ),
		'search_items'          => __( 'Search Portfolios', 'text-domain' ),
		'popular_items'         => __( 'Popular Portfolios', 'text-domain' ),
		'all_items'             => __( 'All Portfolios', 'text-domain' ),
		'parent_item'           => __( 'Parent Porfolio', 'text-domain' ),
		'parent_item_colon'     => __( 'Parent Porfolio', 'text-domain' ),
		'edit_item'             => __( 'Edit Porfolio', 'text-domain' ),
		'update_item'           => __( 'Update Porfolio', 'text-domain' ),
		'add_new_item'          => __( 'Add New Porfolio', 'text-domain' ),
		'new_item_name'         => __( 'New Porfolio Name', 'text-domain' ),
		'add_or_remove_items'   => __( 'Add or remove Portfolios', 'text-domain' ),
		'choose_from_most_used' => __( 'Choose from most used Portfolios', 'text-domain' ),
		'menu_name'             => __( 'Porfolio', 'text-domain' ),
	);

	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => false,
		'hierarchical'      => false,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'query_var'         => true,
		'capabilities'      => array(),
	);

	register_taxonomy( 'portfolio', array( 'portfolio' ), $args );
}

add_action( 'init', 'portfolio_taxonomies' );


/**
 * Create a taxonomy
 *
 * @uses  Inserts new taxonomy object into the list
 * @uses  Adds query vars
 *
 * @param string  Name of taxonomy object
 * @param array|string  Name of the object type for the taxonomy object.
 * @param array|string  Taxonomy arguments
 * @return null|WP_Error WP_Error if errors, otherwise null.
 */
function portfolio_tags() {

	$labels = array(
		'name'                  => _x( 'Tags', 'Taxonomy plural name', 'text-domain' ),
		'singular_name'         => _x( 'Tag', 'Taxonomy tag', 'text-domain' ),
		'search_items'          => __( 'Search Tags', 'text-domain' ),
		'popular_items'         => __( 'Popular Tags', 'text-domain' ),
		'all_items'             => __( 'All Tags', 'text-domain' ),
		'parent_item'           => __( 'Parent Tag', 'text-domain' ),
		'parent_item_colon'     => __( 'Parent Tag', 'text-domain' ),
		'edit_item'             => __( 'Edit Tag', 'text-domain' ),
		'update_item'           => __( 'Update Tag', 'text-domain' ),
		'add_new_item'          => __( 'Add New Tag', 'text-domain' ),
		'new_item_name'         => __( 'New Tag Name', 'text-domain' ),
		'add_or_remove_items'   => __( 'Add or remove Tags', 'text-domain' ),
		'choose_from_most_used' => __( 'Choose from most used Tags', 'text-domain' ),
		'menu_name'             => __( 'Tag', 'text-domain' ),
	);

	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => false,
		'hierarchical'      => false,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'query_var'         => true,
		'capabilities'      => array(),
	);

	register_taxonomy( 'tags', array( 'portfolio' ), $args );
}

add_action( 'init', 'portfolio_tags' );

 ?>