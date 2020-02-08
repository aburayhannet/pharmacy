<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
  <meta <?php bloginfo('charset'); ?> >
  <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">

</head>

<?php echo wp_head(); ?>
<body <?php body_class(); ?> >
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->

  

<!--header top-->
<div class="header-top">
      <div class="container clearfix">
            <div class="top-left">
                  <h6>Opening Hours : <?php echo get_theme_mod('Opening_Hours'); ?></h6>
            </div>
            <div class="top-right">
                  <ul class="social-links">
                        
						<?php
                            $facebook = get_theme_mod('facebook');
							$instragram = get_theme_mod('instragram');
							$twitter = get_theme_mod('twitter');
							$skype = get_theme_mod('skype');
							$whatsapp = get_theme_mod('whatsapp');
							$pinterest = get_theme_mod('pinterest');
							
							
							
							
						if(!empty($facebook)){ ?>
							<li>
								<a href="<?php echo $facebook; ?>">
										<i class="fa fa-facebook" aria-hidden="true"></i>
								</a>
							</li>
						<?php } 
						
						 if(!empty($instragram)){ ?>
							<li>
								  <a href="<?php echo $instragram; ?>">
										<i class="fa fa-instagram" aria-hidden="true"></i>
								  </a>
							</li>
						 <?php } 
						 
						 if(!empty($twitter)){
						 ?>
                        <li>
                              <a href="<?php echo $twitter; ?>">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                              </a>
                        </li>
						<?php 
						 }
						
						if(!empty($skype)){
						?>
                        <li>
                              <a href="<?php echo $skype; ?>">
                                    <i class="fa fa-skype" aria-hidden="true"></i>
                              </a>
                        </li>
						<?php }
						
						if(!empty($whatsapp)){
						?>
                        <li>
                              <a href="<?php echo $whatsapp; ?>">
                                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                              </a>
                        </li>
						<?php }
						
						if(!empty($pinterest)){
						?>
						<li>
                              <a href="<?php echo $pinterest; ?>">
                                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                              </a>
                        </li>
						<?php } ?>
                  </ul>
            </div>
      </div>
</div>
<!--header top-->

<!--Header Upper-->
<section class="header-uper">
      <div class="container clearfix">
            <div class="logo">
                  <figure>
                        <a href="index.html">
                              <?php the_custom_logo(); ?>
                        </a>
                  </figure>
            </div>
            <div class="right-side">
                  <ul class="contact-info">
                        <li class="item">
						<a href="mailto:<?php echo get_theme_mod('email'); ?>">
                              <div class="icon-box">
                                    <i class="fa fa-envelope-o"></i>
                              </div>
                              <strong>Email</strong>
                              <br>
                                    <span><?php echo get_theme_mod('email'); ?></span>
                         </a>
                        </li>
                        <li class="item">
						<a href="tel:<?php echo get_theme_mod('phone'); ?>">
                              <div class="icon-box">
                                    <i class="fa fa-phone"></i>
                              </div>
                              <strong>Call Now</strong>
                              <br>
                              <span><?php echo get_theme_mod('phone'); ?></span>
						</a>
                        </li>
                  </ul>
                  <div class="link-btn">
                        <a href="<?php echo get_theme_mod('contacturl'); ?>" class="btn-style-one">contact us</a>
                  </div>
            </div>
      </div>
</section>
<!--Header Upper-->


<!--Main Header-->
<nav class="navbar navbar-default">
      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<?php
									wp_nav_menu(
										array(
											'theme_location' => 'main_menu',
											'menu_class' => 'nav navbar-nav',
										)
									);
								?>
            </div>
            <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
</nav>
<!--End Main Header -->