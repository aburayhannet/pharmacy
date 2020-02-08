<?php

 /**
 * @ WP_Customize_Manager $wp_customize
 */

 
 function mytheme_customize_registera( $wp_customize ) {
   //All our sections, settings, and controls will be added here
    
	/*start socal icon */
	
    /*header section*/
    $wp_customize->add_section( 'socal_icon' , array(
    'title'      => 'socal icon section',
    'priority'   => 2,
    ) );


    /*header background*/
    $wp_customize->add_setting( 'facebook' , array(
    'default'   => '',
    'transport' => 'refresh',
    ) );

    /*header background*/
	$wp_customize->add_setting( 'instragram' , array(
    'default'   => '',
    'transport' => 'refresh',
	) );

    /*header profile*/
    $wp_customize->add_setting( 'twitter' , array(
    'default'   => '',
    'transport' => 'refresh',
    ) );

    /*header paragraphs*/
    $wp_customize->add_setting( 'skype' , array(
    'default'   => '',
    'transport' => 'refresh',
    ) );
	
	$wp_customize->add_setting( 'whatsapp' , array(
    'default'   => '',
    'transport' => 'refresh',
    ) );
	
	$wp_customize->add_setting( 'pinterest' , array(
    'default'   => '',
    'transport' => 'refresh',
    ) );

    

	
   
    $wp_customize->add_control( 
       new WP_Customize_control($wp_customize, 'facebook' , array(
    'label'      => 'facebook',
    'section'    => 'socal_icon',
    'settings'   => 'facebook',
    ) )) ;

/*header background*/
	$wp_customize->add_control( 
       new WP_Customize_control($wp_customize, 'instragram' , array(
	'label'      => 'instragram',
	'section'    => 'socal_icon',
	'settings'   => 'instragram',
    ) )) ;
    
   /*header profile*/
    $wp_customize->add_control(
       new WP_Customize_Control($wp_customize, 'twitter' , array(
    'label'      => 'twitter',
    'section'    => 'socal_icon',
    'settings'   => 'twitter',
    ) )) ;
    /*header paragraphs*/
     $wp_customize->add_control('skype' , array(
    'label'      => 'skype',
    'section'    => 'socal_icon',
    'settings'   => 'skype',
    'type'       => 'text',
    ) ) ;
	
	$wp_customize->add_control('whatsapp' , array(
    'label'      => 'whatsapp',
    'section'    => 'socal_icon',
    'settings'   => 'whatsapp',
    'type'       => 'text',
    ) ) ;
	
	$wp_customize->add_control('pinterest' , array(
    'label'      => 'pinterest',
    'section'    => 'socal_icon',
    'settings'   => 'pinterest',
    'type'       => 'text',
    ) ) ;
	

	/*
	start main page slider
	*/
	
	$wp_customize->add_section('hourse_section',array(
	'title'     => 'contact ',
	'priority'  => '3',
	));
	
	/*content*/
	/*sectiod slider*/
	$wp_customize->add_setting('Opening_Hours',array(
	'default'   => 'Saturday to Thursday - 8am to 10pm',
	'transport' => 'refresh',
	));
		/*sectiod slider*/
	$wp_customize->add_setting('email',array(
	'default'   => 'sirpharmacy2014@gmail.com',
	'transport' => 'refresh',
	));
	
	$wp_customize->add_setting('phone',array(
	'default'   => '+88017184216',
	'transport' => 'refresh',
	));
	
	$wp_customize->add_setting('contacturl',array(
	'default'   => 'http://localhost/rayhan/contact-us/',
	'transport' => 'refresh',
	));
	
	
	
	
	$wp_customize->add_control('Opening_Hours',array(
	'label'     => 'shop open time',
	'section'   => 'hourse_section',
	'settings'  => 'Opening_Hours',
	));
	
	$wp_customize->add_control('email',array(
	'label'     => 'email',
	'section'   => 'hourse_section',
	'settings'  => 'email',
	));
	
	$wp_customize->add_control('phone',array(
	'label'     => 'contact call',
	'section'   => 'hourse_section',
	'settings'  => 'phone',
	));
	
	$wp_customize->add_control('contacturl',array(
	'label'     => 'contact url',
	'section'   => 'hourse_section',
	'settings'  => 'contacturl',
	));
	

	

	//about us
	
	$wp_customize->add_section('contact_us',array(
	'title'     => 'contact us',
	'priority'  => '3',
	));
	
	
	
	
	
	$wp_customize->add_setting('location',array(
	'default'   => 'Shah Paran Road, Hazrat Shah Paran,khadimnagar,  sylhet, bangladesh',
	'transport' => 'refresh',
	));
	
	$wp_customize->add_setting('phone_1',array(
	'default'   => '',
	'transport' => 'refresh',
	));
	
	$wp_customize->add_setting('phone_2',array(
	'default'   => '',
	'transport' => 'refresh',
	));
	$wp_customize->add_setting('email_1',array(
	'default'   => '',
	'transport' => 'refresh',
	));
	$wp_customize->add_setting('email_2',array(
	'default'   => '',
	'transport' => 'refresh',
	));
	
	
	
	
	$wp_customize->add_control('location',array(
	'label'     => 'location',
	'section'   => 'contact_us',
	'settings'  => 'location',
	));
	
	$wp_customize->add_control('phone_1',array(
	'label'     => 'phone 1',
	'section'   => 'contact_us',
	'settings'  => 'phone_1',
	));
	
	$wp_customize->add_control('phone_2',array(
	'label'     => 'phone 2',
	'section'   => 'contact_us',
	'settings'  => 'phone_2',
	));
	
	$wp_customize->add_control('email_1',array(
	'label'     => 'email 1',
	'section'   => 'contact_us',
	'settings'  => 'email_1',
	));
	
	$wp_customize->add_control('email_2',array(
	'label'     => 'email 2',
	'section'   => 'contact_us',
	'settings'  => 'email_2',
	));
	
	/*contact us */
	
	$wp_customize->add_section('about_us',array(
	'title'     => 'about us',
	'priority'  => '5',
	));
	
	
	$wp_customize->add_setting('about_side_image',array(
	'default'  => '',
	'transport' => 'refresh',
	));
	
	$wp_customize->add_setting('about_side_text1',array(
	'default'  => 'Our goal is to provide an experience where personalized care and modern medicine meet to develop a trusting and continuing relationship. Our pharmacists provide the ultimate health-care benefits through combining their clinical expertise, natural remedies, and knowledge of personal care products. The goal here at Sir Pharmacy is to ensure that our patients have the balance of a healthy mind and body by receiving optimal healthcare.',
	'transport' => 'refresh',
	));
	
	$wp_customize->add_setting('about_side_text2',array(
	'default'  => 'Our goal is to provide an experience where personalized care and modern medicine meet to develop a trusting and continuing relationship. Our pharmacists provide the ultimate health-care benefits through combining their clinical expertise, natural remedies, and knowledge of personal care products. The goal here at Sir Pharmacy is to ensure that our patients have the balance of a healthy mind and body by receiving optimal healthcare.',
	'transport' => 'refresh',
	));
	
	$wp_customize->add_setting('promo_video_text',array(
	'default'  => '',
	'transport' => 'refresh',
	));
	$wp_customize->add_setting('promo_video_link',array(
	'default'  => '',
	'transport' => 'refresh',
	));
	
	
	
	$wp_customize->add_control(
	new wp_customize_image_control($wp_customize,'about_side_image',array(
	'label'    => 'about side image',
	'section'  => 'about_us',
	'settings' => 'about_side_image'
	)));
	
	$wp_customize->add_control('about_side_text1',array(
	'label'    => 'about side text 1',
	'section'  => 'about_us',
	'settings' => 'about_side_text1',
	'type'     => 'textarea'
	));
	
	$wp_customize->add_control('about_side_text2',array(
	'label'    => 'about side text 2',
	'section'  => 'about_us',
	'settings' => 'about_side_text2',
	'type'     => 'textarea'
	));
	
	$wp_customize->add_control('promo_video_text',array(
	'label'    => 'promo video text',
	'section'  => 'about_us',
	'settings' => 'promo_video_text',
	'type'     => 'textarea'
	));
	
	$wp_customize->add_control('promo_video_link',array(
	'label'    => 'promo video link',
	'section'  => 'about_us',
	'settings' => 'promo_video_link',
	'type'     => 'text'
	));
	
}
add_action( 'customize_register', 'mytheme_customize_registera' );

?>