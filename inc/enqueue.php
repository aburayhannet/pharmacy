<?php 
/*
* @package notebook 
*/



// enqueue files
 function notebook_enqueue(){
	//enqueue css 
	wp_enqueue_style('slick', NOTEBOOK_THEME_URL . '/plugins/slick/slick.css' );
	wp_enqueue_style('slick-theme', NOTEBOOK_THEME_URL . '/plugins/slick/slick-theme.css' );
	wp_enqueue_style('fancybox', NOTEBOOK_THEME_URL . '/plugins/fancybox/jquery.fancybox.min.css' );
	wp_enqueue_style('font-awesome', NOTEBOOK_THEME_URL . '/css/all.min.css' );
	wp_enqueue_style('main-style', NOTEBOOK_THEME_URL . '/css/style.css' );
	wp_enqueue_style('style', get_stylesheet_uri() );
	
	//enqueue js
/* 	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap', NOTEBOOK_THEME_URL . '/plugins/bootstrap.min.js');
	wp_enqueue_script('bootstrap-select', NOTEBOOK_THEME_URL . '/plugins/bootstrap-select.min.js');
	wp_enqueue_script('slick', NOTEBOOK_THEME_URL . '/plugins/slick/slick.min.js');
	wp_enqueue_script('fancybox', NOTEBOOK_THEME_URL . '/plugins/fancybox/jquery.fancybox.min.js');
	wp_enqueue_script('gmap-link','https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw');
	wp_enqueue_script('gmap', NOTEBOOK_THEME_URL . '/plugins/google-map/gmap.js');
	wp_enqueue_script('validate', NOTEBOOK_THEME_URL . '/plugins/validate.js');
	wp_enqueue_script('wow', NOTEBOOK_THEME_URL . '/plugins/wow.js');
	wp_enqueue_script('jquery-ui', NOTEBOOK_THEME_URL . '/plugins/jquery-ui.js');
	wp_enqueue_script('timePicker', NOTEBOOK_THEME_URL . '/plugins/timePicker.js');
	wp_enqueue_script('script', NOTEBOOK_THEME_URL . '/js/script.js'); */
}
add_action('wp_enqueue_scripts','notebook_enqueue'); 

