<?php 
	define( 'ATTACHMENTS_SETTINGS_SCREEN', false );
	add_filter( 'attachments_default_instance', '__return_false' );

	// Popular Product Slider

 function me_pp($attachments){
 	$fields = array(
 		array(
 			'name' => 'name',
 			'type' => 'text',
 			'label' => __('Product Name', 'me')
 		),
 		array(
 			'name' => 'price',
 			'type' => 'text',
 			'label' => __('Product Price', 'me')
 		),
 		array(
 			'name' => 'url',
 			'type' => 'text',
 			'label' => __('Product URL', 'me')
 		)
 	);

 	$args = array(
 		'label' => 'Popular Product',
 		'post_type' => array( 'page' ),
 		'file_type' => array( 'image' ),
 		'note' => 'Add Popular Products',
 		'button_text' => 'Add Product',
 		'fields' => $fields
 	);

  $attachments->register( 'popularproducts', $args );

 }	

 add_action( 'attachments_register', 'me_pp' );



// Discount Product Slider

 function me_dc($attachments){
 	$fields = array(
 		array(
 			'name' => 'name',
 			'type' => 'text',
 			'label' => __('Product Name', 'me')
 		),
 		array(
 			'name' => 'price',
 			'type' => 'text',
 			'label' => __('Product Price', 'me')
 		),
 		array(
 			'name' => 'url',
 			'type' => 'text',
 			'label' => __('Product URL', 'me')
 		)
 	);

 	$args = array(
 		'label' => 'Discount Product',
 		'post_type' => array( 'page' ),
 		'file_type' => array( 'image' ),
 		'note' => 'Add Discount Products',
 		'button_text' => 'Add Product',
 		'fields' => $fields
 	);

  $attachments->register( 'disproducts', $args );

 }	

 add_action( 'attachments_register', 'me_dc' );



 // New Arrival Product Slider

 function me_newarrival($attachments){
 	$fields = array(
 		array(
 			'name' => 'name',
 			'type' => 'text',
 			'label' => __('Product Name', 'me')
 		),
 		array(
 			'name' => 'price',
 			'type' => 'text',
 			'label' => __('Product Price', 'me')
 		),
 		array(
 			'name' => 'url',
 			'type' => 'text',
 			'label' => __('Product URL', 'me')
 		)
 	);

 	$args = array(
 		'label' => 'New Arrival Product',
 		'post_type' => array( 'page' ),
 		'file_type' => array( 'image' ),
 		'note' => 'Add New Products',
 		'button_text' => 'Add Product',
 		'fields' => $fields
 	);

  $attachments->register( 'newarrival', $args );

 }	

 add_action( 'attachments_register', 'me_newarrival' );














