<?php

/*
Template Name: contact
*/
 echo get_header();
?>


<!--==================================
=            Contact Form            =
===================================-->
<section class="section contact">
    <!-- container start -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <!-- address start -->
                <div class="address-block">
                    <!-- Location -->
                    <div class="media">
                        <i class="fa fa-map-o"></i>
                        <div class="media-body">
                            <h3>Location</h3>
                            <p><?php echo get_theme_mod('location'); ?></p>
                        </div>
                    </div>
                    <!-- Phone -->
                    <div class="media">
                        <i class="fa fa-phone"></i>
                        <div class="media-body">
                            <h3>Phone</h3>
                            <p>
                                <a href="mailto:<?php echo get_theme_mod('phone_1');  ?>"><?php echo get_theme_mod('phone_1');  ?></a>
                                <br>
								<a href="mailto:<?php echo get_theme_mod('phone_2');  ?>"><?php echo get_theme_mod('phone_2');  ?></a>
                            </p>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="media">
                        <i class="fa fa-envelope-o"></i>
                        <div class="media-body">
                            <h3>Email</h3>
                            <p>
                                <a href="mailto:<?php echo get_theme_mod('email_1');  ?>"><?php echo get_theme_mod('email_1');  ?></a>
                                <br>
								<a href="mailto:<?php echo get_theme_mod('email_2');  ?>"><?php echo get_theme_mod('email_2');  ?></a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- address end -->
            </div>
            <div class="col-md-8">
                <div class="contact-form">
                    <!-- contact form start -->
                   <?php dynamic_sidebar('contact_form'); ?>
                    <!-- contact form end -->
                </div>
            </div>
        </div>
    </div>
    <!-- container end -->
</section>
<!--====  End of Contact Form  ====-->

<!--================================
=            Google Map            =
=================================-->
<section class="map">
    <!-- Google Map -->
    <?php dynamic_sidebar('shopmap'); ?>
</section>
<!--====  End of Google Map  ====-->
<?php echo get_footer(); ?>