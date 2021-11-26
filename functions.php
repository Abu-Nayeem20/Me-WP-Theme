<?php


// Me setup

function me_setup(){
	load_theme_textdomain("me");
	add_theme_support("title-tag");
	add_theme_support("woocommerce");
	add_theme_support("post-thumbnails");
	add_theme_support('post-formats', array(
		'image', 'audio', 'video', 'quote', 'link', 'product'
	));
	$me_logo_size = array(
		'width' => '250',
		'height' => '100',
		'flex-height' => true,
		'flex-width' => true
	);
	add_theme_support("custom-logo", $me_logo_size);
	register_nav_menus(array(
	 	'top-menu' => __('Top Menu','me'),
	 	'category-menu' => __('Category Menu','me')
	));

}
 add_action("after_setup_theme","me_setup");



// Assets

function me_assets(){
	// css
	wp_enqueue_style('dashicon');
	wp_enqueue_style("animatecss", get_theme_file_uri('/css/animate.min.css'),'',' 1.0.0');
	wp_enqueue_style("owlcss", get_theme_file_uri('/css/owl.carousel.min.css'),'',' 1.1.0');
	wp_enqueue_style("old-fws",'//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style("bootstrapcss",'//stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
	wp_enqueue_style("maincss", get_stylesheet_uri(),'','1.0.0');
	wp_enqueue_style("responsivecss", get_theme_file_uri('/css/responsive.css'),'',' 1.1.0');

	// js

	wp_enqueue_script("fontawesomejs", "//kit.fontawesome.com/20572c93fb.js", array("jquery"), "1.0,1", true);

	wp_enqueue_script("popperjs", "//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array("jquery"), "1.0,1", true);

	wp_enqueue_script("bootstrapjs", "//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array("jquery"), "1.0,1", true);

	wp_enqueue_script("wowjs", get_theme_file_uri("/js/wow.min.js"), array("jquery"), "1.0,0", true);

	wp_enqueue_script("owljs", get_theme_file_uri("/js/owl.carousel.min.js"), array("jquery"), "1.0,1", true);

	wp_enqueue_script("countdownjs", get_theme_file_uri("/js/jquery.countdown.js"), array("jquery"), "1.0,1", true);

	wp_enqueue_script("mainjs", get_theme_file_uri("/js/main.js"), array("jquery"), "1.0,2", true);
}
 add_action("wp_enqueue_scripts","me_assets");



// widgets

function me_widgets(){
	register_sidebar(array(
		'name' => 'Search-Field',
		'id' => 'search-field',
		'before_widget' => '<div class="me-search-field">',
		'after_widget' => '</div>'
	));
	register_sidebar(array(
		'name' => 'FB Page',
		'id' => 'fb-page',
		'before_widget' => '<div class="me-social-acunt">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
	register_sidebar(array(
		'name' => 'About Pages',
		'id' => 'about-pages',
		'before_widget' => '<div class="me-selling-info">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Support Pages',
		'id' => 'support-pages',
		'before_widget' => '<div class="me-selling-info">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Payment Method',
		'id' => 'payment-method',
		'before_widget' => '<div class="me-payment-sys">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Contact Info',
		'id' => 'contact-info',
		'before_widget' => '<div class="me-info">',
		'after_widget' => '</div>'
	));
	register_sidebar(array(
		'name' => 'Post Left Sidebar',
		'id' => 'post-left-sidebar',
		'before_widget' => '<div class="blog-side-item">',
		'after_widget' => '</div>'
	));
	register_sidebar(array(
		'name' => 'Post Right Sidebar',
		'id' => 'post-right-sidebar',
		'before_widget' => '<div class="blog-side-item">',
		'after_widget' => '</div>'
	));
}

add_action('widgets_init','me_widgets');


// Read More
function me_readmore($words){
	$me_postcontent = explode(' ',get_the_content());
	$me_postcontent_slice = array_slice($me_postcontent,0,$words);
	echo implode(' ', $me_postcontent_slice);
}



// woocommerce


add_filter( 'woocommerce_default_address_fields', 'me_remove_fields' );
 
function me_remove_fields( $fields ) {
 
	unset( $fields[ 'address_2' ] );
	unset( $fields[ 'last_name' ] );
	unset( $fields[ 'company' ] );
	unset( $fields[ 'country' ] );
	unset( $fields[ 'city' ] );
	unset( $fields[ 'postcode' ] );
	return $fields;
 
}

add_filter( 'woocommerce_default_address_fields' , 'me_change_field_label' );
 
function me_change_field_label( $fields ) {
 
	$fields['first_name']['label'] = 'Name';
	$fields['address_1']['label'] = 'Address';
	$fields['state']['label'] = 'Area Name';
	
 
	return $fields;
 
}

add_filter( 'woocommerce_states', 'custom_woocommerce_states' );

function custom_woocommerce_states( $states ) {

  $states['BD'] = array(
    'Jatrabari' => 'Jatrabari', 
    'Ghulshan' => 'Ghulshan',
  );

  return $states;
}

add_action('wp_head', 'custom_ajax_spinner', 1000 );
function custom_ajax_spinner() {
    ?>
    <style>
    .woocommerce .blockUI.blockOverlay:before,
    .woocommerce .loader:before {
        height: 3em;
        width: 3em;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -.5em;
        margin-top: -.5em;
        display: block;
        content: "";
        -webkit-animation: none;
        -moz-animation: none;
        animation: none;
        background-image:url('<?php echo get_stylesheet_directory_uri() . "/img/load-spinner.gif"; ?>') !important;
        background-position: center center;
        background-size: cover;
        line-height: 1;
        text-align: center;
        font-size: 2em;
    }
    </style>
    <?php
}

 // Redux Support

  require_once('lib/redux-core/framework.php');
  require_once('lib/sample/config.php');

 // Attachments

  if ( class_exists( 'Attachments' ) ) {
    require_once('lib/attach/attachments.php');
  }

  // TGM activition

  require_once ( get_theme_file_path('/inc/tgm.php') );









