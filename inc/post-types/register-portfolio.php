<?php

$portfolio = new CPT(array(
    'post_type_name' => 'portfolio',
    'singular' => __('Portfolio', 'cloutierremix2'),
    'plural' => __('Portfolio', 'cloutierremix2'),
    'slug' => 'portfolio'
),
	array(
    'supports' => array('title', 'editor', 'thumbnail', 'comments', 'excerpt', 'custom-fields', 'trackbacks', 'author', 'revisions'),
    'menu_icon' => 'dashicons-portfolio'
));

$portfolio->register_taxonomy(array(
    'taxonomy_name' => 'portfolio_tags',
    'singular' => __('Portfolio Tag', 'cloutierremix2'),
    'plural' => __('Portfolio Tags', 'cloutierremix2'),
    'slug' => 'portfolio-tag'
));

$portfolio->columns(array(
    'cb' => '<input type="checkbox" />',
    'title' => __('Title'),
    'genre' => __('Genres'),
    'price' => __('Price'),
    'rating' => __('Rating'),
    'date' => __('Date')
));



















add_action( 'init', 'codex_book_init' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_book_init() {
	$labels = array(
		'name'               => _x( 'Books', 'post type general name', 'cloutierremix2' ),
		'singular_name'      => _x( 'Book', 'post type singular name', 'cloutierremix2' ),
		'menu_name'          => _x( 'Books', 'admin menu', 'cloutierremix2' ),
		'name_admin_bar'     => _x( 'Book', 'add new on admin bar', 'cloutierremix2' ),
		'add_new'            => _x( 'Add New', 'book', 'cloutierremix2' ),
		'add_new_item'       => __( 'Add New Book', 'cloutierremix2' ),
		'new_item'           => __( 'New Book', 'cloutierremix2' ),
		'edit_item'          => __( 'Edit Book', 'cloutierremix2' ),
		'view_item'          => __( 'View Book', 'cloutierremix2' ),
		'all_items'          => __( 'All Books', 'cloutierremix2' ),
		'search_items'       => __( 'Search Books', 'cloutierremix2' ),
		'parent_item_colon'  => __( 'Parent Books:', 'cloutierremix2' ),
		'not_found'          => __( 'No books found.', 'cloutierremix2' ),
		'not_found_in_trash' => __( 'No books found in Trash.', 'cloutierremix2' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'book', $args );
}