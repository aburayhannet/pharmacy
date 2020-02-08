<?php 

/*
* @package notebook 
*/

// Theme supports
function notebookSetupTheme(){
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	add_theme_support('custom-header');
	add_theme_support('woocommerce');
	add_theme_support('post-thumbnails');
	add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' , 'gallery' , 'video' , 'audio' , 'chat') );
     
	 
	 
	 register_post_type('Best_Features',array(
			'labels' => array(
				'name' => ' Best Features',
				'add_new_item' => 'add new item',
			),
			'public' => true,
			'supports' => array('title','editor'),
			'menu_position' => 6,
 ));
 
	 register_post_type('Provided_Services',array(
			'labels' => array(
				'name' => 'Provided Services',
				'add_new_item' => 'add new item',
			),
			'public' => true,
			'supports' => array('title','editor','thumbnail'),
			'menu_position' => 20,
 ));
 
 
 	 register_post_type('mainslider',array(
			'labels' => array(
				'name' => 'home page slider',
				'add_new_item' => 'add new item',
			),
			'public' => true,
			'taxonomies' => array('category','post_tag'),
			'supports' => array('title','editor','thumbnail'),
			'menu_position' => 8,
 ));
	
	register_post_type('Shopkeeper',array(
			'labels' => array(
				'name' => 'Shopkeeper',
			),
			'public' => true,
			'taxonomies' => array('category','post_tag'),
			'supports' => array('title','editor','thumbnail'),
			'menu_position' => '90'
	));
	
	 //sidebar 
	register_sidebar(array(
		'name' => ' right sidebar',
		'id'   => 'rightsidebar',
		'description' => 'right sidebar to post page'
	));  
	
	
	//sidebar register 
	register_sidebar(array(
		'name' => 'footer 1',
		'id'   => 'footer_1',
		'description' =>'this is a footer left sidebar',
	));
	
	register_sidebar(array(
		'name' => 'footer 2',
		'id'   => 'footer_2',
		'description' =>'author  address in footer',
	));
	
	register_sidebar(array(
		'name' => 'footer 3',
		'id'   => 'footer_3',
		'description' =>'author  address in footer',
	));
	
	
	//gmap for contact form
	register_sidebar(array(
		'name' => 'shop map',
		'id'   => 'shopmap',
		'description' =>'footer shop map',
	));
	
	//gmap for contact form
	register_sidebar(array(
		'name' => 'contact form7',
		'id'   => 'contact_form',
		'description' =>'footer shop map',
	));
	
	//nav menu register
	register_nav_menus(array(
      'main_menu'   => 'header menu',
      'footer_menu' => ' footer menu',
	));
}
add_action('after_setup_theme','notebookSetupTheme');




