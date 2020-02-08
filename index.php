
<?php echo get_header(); ?>



<!-- Contact Section -->
<section class="blog-section style-four section">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="left-side">
				<?php
				while( have_posts() ) : the_post(); ?>
				
				
                    <div class="item-holder">
                        <div class="image-box">
                            <figure>
                               <a href="<?php the_permalink(); ?>"> <?php echo the_post_thumbnail(); ?></a>
                            </figure>
                        </div>
                        <div class="content-text">
                            <a href="<?php the_permalink(); ?>"><h6><?php the_title(); ?></h6></a>
                            <span><i class="fa fa-user" aria-hidden="true"></i> <?php the_author(); ?> /<i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time( 'F jS, Y' ); ?> / <i class="fa fa-comments" aria-hidden="true"></i> <?php comments_popup_link(); ?></span>
                            <p><?php the_excerpt() ?></p>
                            <div class="link-btn">
                                <a href="<?php the_permalink(); ?>" class="btn-style-one">read more</a>
                            </div>
                        </div>
                    </div>
					
				<?php endwhile; ?>	
                </div>
				
			
            </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
				<?php echo get_sidebar(); ?>
        </div>  
	
       <div class="styled-pagination">
	   
		<?php the_posts_pagination(array(
			'screen_reader_text' => ' ',
			'prev_text'          => '<span class="fa fa-angle-left" aria-hidden="true"></span>',
			'next_text'          => '<span class="fa fa-angle-right" aria-hidden="true"></span>',
		)); ?>	
        </div>                
    </div>
</section>
<!-- End Contact Section -->

<?php echo get_footer(); ?>