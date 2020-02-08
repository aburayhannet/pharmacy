<?php echo get_header(); ?>



<!-- Contact Section -->
<section class="blog-section section style-four style-five">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="left-side">
				<?php while( have_posts() ) : the_post(); ?>
                    <div class="item-holder">
                        <div class="image-box">
                            <figure>
                                <a href="single-blog.html"><?php the_post_thumbnail(); ?></a>
                            </figure>
                        </div>
                        <div class="content-text">
                            <a href="single-blog.html"><h5><?php the_title(); ?></h5></a>
                           <span><i class="fa fa-user" aria-hidden="true"></i> <?php the_author(); ?> /<i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time( 'F jS, Y' ); ?> / <i class="fa fa-comments" aria-hidden="true"></i> <?php comments_popup_link(); ?></span>
                            <div class="text">
                                <p>
                                    <?php echo the_content(); ?>
                                </p>
                            </div>                            
                        </div>
                    </div>
					
				<?php endwhile; ?>
                </div>
                <div class="comments-area">
                    <div class="sec-title">
					<?php comments_template(); ?>
                        <h6>Comments (3)</h6>
                    </div>
                    <div class="comment">
                        <div class="image-holder">
                            <figure>
                                <img src="images/blog/1.png" alt="">
                            </figure>
                        </div>
                        <div class="image-text">
                            <h6>Jacky Chan<span>April 06, 2018</span></h6>
                            <a href="#"><h5><i class="fa fa-reply-all" aria-hidden="true"></i>Comment Back</h5></a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam sequi praesentium, veritatis nulla quam at exercitationem? Nesciunt molestiae neque modi.</p>
                        </div>                                            
                    </div>                            
                    <div class="comment reply-comment">
                        <div class="image-holder">
                            <figure>
                                <img src="images/blog/2.png" alt="">
                            </figure>
                        </div>
                        <div class="image-text">
                            <h6>Robben Oti<span>April 07, 2018</span></h6>
                            <a href="#"><h5><i class="fa fa-reply-all" aria-hidden="true"></i>Comment Back</h5></a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, a! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi, obcaecati!</p>
                        </div>                                    
                    </div>                            
                    <div class="comment">
                        <div class="image-holder">
                            <figure>
                                <img src="images/blog/3.png" alt="">
                            </figure>
                        </div>
                        <div class="image-text">
                            <h6>Chang Lingma<span>May 12, 2018</span></h6>
                            <h5><i class="fa fa-reply-all" aria-hidden="true"></i>Comment Back</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae possimus suscipit esse quia sapiente obcaecati consequuntur dolor sequi adipisci unde!</p>
                        </div>                                    
                    </div>                    
                </div>
                <div class="form-area">
                    <div class="sec-title">
                        <h6>Leave A Comment</h6>
                    </div>
                    <form id="contact_form" name="contact_form" class="default-form">
                        <div class="row clearfix">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="form_message" class="form-control textarea required" placeholder="Your Review"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="form_name" class="form-control" value="" placeholder="Your Name" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="email" name="form_email" class="form-control required email" value="" placeholder="Your Email" required="">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group form-bottom">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button class="btn-style-one" type="submit" data-loading-text="Please wait...">Comment</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <?php echo get_sidebar(); ?>
            </div>
        </div>                
    </div>
</section>
<!-- End Contact Section -->
<?php echo get_footer(); ?>
