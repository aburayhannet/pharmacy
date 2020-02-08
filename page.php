<?php 

/*
Template Name:


*/


?>


<?php echo get_header(); ?>



<!-- Contact Section -->
<section class="blog-section style-four section">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="left-side">
				<?php while( have_posts() ) : the_post(); ?>
                    <div class="item-holder">
                        <div class="image-box">
                            <figure>
                                <a href="single-blog.html"><img src="images/blog/5.jpg" alt=""></a>
                            </figure>
                        </div>
                        <div class="content-text">
                            <a href="single-blog.html"><h6>A LESSON IN SURGERY PREPAREDNESS - FROM HURRICANE SEASON</h6></a>
                            <span>By Donult Trum / 02 January 2018</span>
                            <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Sed porttitor lectus nibh. Curabitur aliquet quam
                            id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p>
                            <div class="link-btn">
                                <a href="single-blog.html" class="btn-style-one">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
				
			<?php endwhile; ?>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="right-side">
                    <div class="text-title">
                        <h6>Search</h6>
                    </div>
                    <div class="search-box">
                        <form method="post" action="index.html">
                            <input type="search" name="search" placeholder="Enter to Search" required="">
                        </form>
                    </div>
                    <div class="categorise-menu">
                        <div class="text-title">
                            <h6>Categories</h6>
                        </div>
                        <ul class="categorise-list">
                            <li><a href="#">Alumni <span>(20)</span></a></li>
                            <li><a href="#">Psycology <span>(4)</span></a></li>
                            <li><a href="#">Sonogram <span>(2)</span></a></li>
                            <li><a href="#">x-ray <span>(9)</span></a></li>
                            <li><a href="#">Dental <span>(2)</span></a></li>
                        </ul>                           
                    </div>
                    <div class="tag-list">
                        <div class="text-title">
                            <h6>Tags</h6>
                        </div>
                        <a href="#">ray</a><a href="#">dental</a>
                        <a href="#">Clean</a><a href="#">hospitality</a>
                        <a href="#">Dormamu</a><a href="#">Medical</a><a href="#">hospitality</a>
                    </div>
                </div>
            </div>
        </div>                
        <div class="styled-pagination">
            <ul>
                <li><a class="prev" href="#"><span class="fa fa-angle-left" aria-hidden="true"></span></a></li>
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a class="next" href="#"><span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
            </ul>
        </div>                  
    </div>
</section>
<!-- End Contact Section -->

<?php echo get_footer(); ?>