<?php
global $laurelwoodbrewpub_themename;
global $laurelwoodbrewpub_shortname;

if ( !class_exists( 'OT_Loader' )){	
	//THEME SHORTNAME	
	$laurelwoodbrewpub_shortname = 'lwbp';	
	$laurelwoodbrewpub_themename = 'LWBP';	
	define('laurelwoodbrewpub_ADMIN_MENU_NAME','LWBP');
}


/***************** EXCERPT LENGTH ************/
function laurelwoodbrewpub_excerpt_length($length) {
	return 50;
}
add_filter('excerpt_length', 'laurelwoodbrewpub_excerpt_length');

/***************** READ MORE ****************/
function laurelwoodbrewpub_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'laurelwoodbrewpub_excerpt_more');

/************* CUSTOM PAGE TITLE ***********/
add_filter( 'wp_title', 'laurelwoodbrewpub_title' );
function laurelwoodbrewpub_title($title)
{
	$laurelwoodbrewpub_title = $title;
	if ( is_home() && !is_front_page() ) {
		$laurelwoodbrewpub_title .= get_bloginfo('name');
	}
	if ( is_front_page() ){
		$laurelwoodbrewpub_title .=  get_bloginfo('name');
		$laurelwoodbrewpub_title .= ' | '; 
		$laurelwoodbrewpub_title .= get_bloginfo('description');
	}
	if ( is_search() ) {
		$laurelwoodbrewpub_title .=  get_bloginfo('name');
	}
	if ( is_author() ) { 
		global $wp_query;
		$curauth = $wp_query->get_queried_object();	
		$laurelwoodbrewpub_title .= __('Author: ','laurelwoodbrewpub');
		$laurelwoodbrewpub_title .= $curauth->display_name;
		$laurelwoodbrewpub_title .= ' | ';
		$laurelwoodbrewpub_title .= get_bloginfo('name');
	}
	if ( is_single() ) {
		$laurelwoodbrewpub_title .= get_bloginfo('name');
	}
	if ( is_page() && !is_front_page() ) {
		$laurelwoodbrewpub_title .= get_bloginfo('name');
	}
	if ( is_category() ) {
		$laurelwoodbrewpub_title .= get_bloginfo('name');
	}
	if ( is_year() ) { 
		$laurelwoodbrewpub_title .= get_bloginfo('name');
	}
	if ( is_month() ) {
		$laurelwoodbrewpub_title .= get_bloginfo('name');
	}
	if ( is_day() ) {
		$laurelwoodbrewpub_title .= get_bloginfo('name');
	}
	if (function_exists('is_tag')) { 
		if ( is_tag() ) {
			$laurelwoodbrewpub_title .= get_bloginfo('name');
		}
		if ( is_404() ) {
			$laurelwoodbrewpub_title .= get_bloginfo('name');
		}					
	}
	return $laurelwoodbrewpub_title;
}


/*********************************************
*   LIMIT WORDS
*********************************************/

function laurelwoodbrewpub_slider_limit_words($string, $word_limit) {
	$words = explode(' ', $string);
	return implode(' ', array_slice($words, 0, $word_limit));
}

/********************************************************
	#DEFINE REQUIRED CONSTANTS HERE# &
	#OPTIONAL: SET 'OT_SHOW_PAGES' FILTER TO FALSE#.
	#THIS WILL HIDE THE SETTINGS & DOCUMENTATION PAGES.#
*********************************************************/

//CHECK AND FOUND OUT THE THEME VERSION AND ITS BASE NAME

if(function_exists('wp_get_theme')){
    $laurelwoodbrewpub_theme_data = wp_get_theme(get_option('template'));
    $laurelwoodbrewpub_theme_version = $laurelwoodbrewpub_theme_data->Version;  
}

define( 'laurelwoodbrewpub_OPTS_FRAMEWORK_DIRECTORY_URI', trailingslashit(get_template_directory_uri() . '/SketchBoard/includes/') );	
define( 'laurelwoodbrewpub_OPTS_FRAMEWORK_DIRECTORY_PATH', trailingslashit(get_template_directory() . '/SketchBoard/includes/') );
define( 'laurelwoodbrewpub_THEME_VERSION',$laurelwoodbrewpub_theme_version);	
	
add_filter( 'ot_show_pages', '__return_false' );

// REQUIRED: SET 'OT_THEME_MODE' FILTER TO TRUE.
add_filter( 'ot_theme_mode', '__return_true' );

// DISABLE ADD NEW LAYOUT SECTION FROM OPTIONS PAGE.
add_filter( 'ot_show_new_layout', '__return_false' );

// REQUIRED: INCLUDE OPTIONTREE.
require_once get_template_directory() . '/SketchBoard/includes/ot-loader.php';

// THEME OPTIONS
require_once get_template_directory() . '/SketchBoard/includes/options/theme-options.php';


/********************************************
	GET THEME OPTIONS VALUE FUNCTION
*********************************************/
function laurelwoodbrewpub_get_option( $option_id, $default = '' ){
	return ot_get_option( $option_id, $default = '' );
}

