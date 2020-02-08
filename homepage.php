<?php 

/*
Template Name: home
*/

echo get_header(); ?>

<!--=================================
=            Page Slider            =
==================================-->
<div class="hero-slider">
    <!-- Slider Item -->

	
	
	<?php $mainsliders = new WP_query(array(
							'post_type' => 'mainslider',
							'posts_per_page' => 3,
						 ));
						 
						 ?>
						 
						 <?php while($mainsliders->have_posts() ) : 
						 
						 $mainsliders->the_post(); ?>
						 
						 <!--for background image-->
						 <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full'); ?>
						 
							<div class="slider-item slide1" style="background-image:url('<?php echo  $image[0] ?>')">
								<div class="container">
									<div class="row">
										<div class="col-12">
											<!-- Slide Content Start -->
											<div class="content style text-center">
												<h2 class="text-white text-bold mb-2"><?php the_title(); ?></h2>
												<p class="tag-text mb-5"><?php the_excerpt(); ?></p>
											</div>
											<!-- Slide Content End -->
										</div>
									</div>
								</div>
							</div>
							<!-- Slider Item -->
						 <?php endwhile; ?>
	
	
	

  
</div>

<!--====  End of Page Slider  ====-->

<section class="cta">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cta-block">
                    <div class="emmergency item">
                        <i class="fa fa-phone"></i>
                        <h2>Emegency Cases</h2>
                        <a href="tel:+8801779452010">+8801779452010</a>
                        <p> please call us if you need any madicine </p>
                    </div>
                    <div class="top-doctor item">
                        <i class="fa fa-stethoscope"></i>
                        <h2>15 hours open </h2>
                        <p>we are  probite all brand madicine to  very cost price</p>
                        <a href="#" class="btn btn-main">Read more</a>
                    </div>
                    <div class="working-time item">
                        <i class="fa fa-hourglass-o"></i>
                        <h2>our location</h2>
                        <ul class="w-hours">
                            <li>sahporan gait ,khademnogor,sodor,syllet</li>
                            <li><a href="">map location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--about section-->
<section class="feature-section section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div class="image-content">
					<div class="section-title text-center">
						<h3>Best Features
							<span>of Our pharmacy</span>
						</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam magni in at debitis <br>
							nam error officia vero tempora alias? Sunt?</p>
					</div>
					<div class="row">
					<?php $Best_Features = new WP_query(array(
						'post_type'      => 'Best_Features',
						'posts_per_page' => '4',
					));
					while($Best_Features->have_posts()) : $Best_Features->the_post();
					
					?>
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
								</div>
								<h6><?php the_title(); ?></h6>
								<p><?php the_excerpt(); ?></p>
							</div>
						</div>
					<?php endwhile; ?>	
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End about section-->




<!--testimonial-section-->
<section class="testimonial-section" style="background: url(<?php echo get_template_directory_uri(); ?>/images/testimonials/1.jpg);">
    <div class="container">
        <div class="section-title text-center">
            <h3>What Our
                <span>Patients Says</span>
            </h3>
        </div>
        <div class="testimonial-carousel">
		
		<?php $Shopkeeper = new WP_query(array(
			'post_type' => 'Shopkeeper',
			'posts_per_page' => '10',
			
		));
		
		while( $Shopkeeper->have_posts()) : $Shopkeeper->the_post(); ?>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                           <?php the_post_thumbnail(); ?>
                        </figure>
                    </div>
                    <h6><?php the_title(); ?></h6>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
            <!--Slide Item-->
           
		<?php endwhile; ?>
          
         
           
           
        </div>
    </div>
</section>
<!--End testimonial-section-->


<!--Service Section-->
<section class="service-section bg-gray section">
    <div class="container">
        <div class="section-title text-center">
            <h3>Provided
                <span>Services</span>
            </h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet. qui suscipit atque <br>
                fugiat officia corporis rerum eaque neque totam animi, sapiente culpa. Architecto!</p>
        </div>
        <div class="row items-container clearfix">
		
		<?php $Provided_Services = new WP_query(array(
			'post_type' => 'Provided_Services',
			'posts_per_page' => '10',
			
		));
		
		while( $Provided_Services->have_posts()) : $Provided_Services->the_post(); ?>
		
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="<?php the_permalink(); ?>">
                            <?php echo the_post_thumbnail(); ?>
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <a href="<?php the_permalink(); ?>">
                            <h6><?php the_title(); ?></h6>
                        </a>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </div>
            </div>
           
           
         <?php endwhile; ?>
           
        </div>
    </div>
</section>
<!--End Service Section-->

<!-- End Contact Section -->
<?php echo get_footer(); ?>

