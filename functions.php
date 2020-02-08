<?php 
/*
*Theme functions 
*@package  notebook wordpress Theme
*/

// exit if accessed directory
/*  if(!defined('ABSPATH')){
	exit;
} */

//core constants

define('NOTEBOOK_THEME_DIR',get_template_directory() );
define('NOTEBOOK_THEME_URL',get_template_directory_uri() );
define('_ROOT_', dirname(__FILE__) );

require_once _ROOT_ . '/inc/setupCore.php';
require_once _ROOT_ . '/inc/enqueue.php';
require_once _ROOT_ . '/inc/customize_api.php';



/* functions helper*/

/* require_once _ROOT_ . '/sirpharmacy_custom_function.php'; */


?>

