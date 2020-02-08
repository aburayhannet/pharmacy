
<!--footer-main-->
<footer class="footer-main">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="about-widget">
            
			<?php dynamic_sidebar('footer_1'); ?>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
		  
		  
		  <?php dynamic_sidebar('footer_2'); ?>
		 <!--  <address>
		  
		  <ul class="menu-link">
            <li>
              <a href="#">
                <i>name:</i>md.kamruzzaman khokon</a>
            </li>
            <li>
              <p>AB.form,AM.B.A</p>

            </li>
            <li>
              <p>
                <i>register no:</i>A-6433</p>
            </li>
            <li>
              <a href="tel:+8801731842186">
                <i>mobile:</i>+8801731-842186</a>
            </li>
          </ul>
		  
		  </address>
          <ul class="menu-link">
            <li>
              <a href="#">
                <i>name:</i>md.kamruzzaman khokon</a>
            </li>
            <li>
              <p>AB.form,AM.B.A</p>

            </li>
            <li>
              <p>
                <i>register no:</i>A-6433</p>
            </li>
            <li>
              <a href="tel:+8801731842186">
                <i>mobile:</i>+8801731-842186</a>
            </li>
          </ul> -->
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="">
			<?php dynamic_sidebar('footer_3'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center">
    <div class="container">
      <div style="text-decoration:none;" class="copyright-text">
        <p>&copy; Copyright 2020. All Rights Reserved by
          <a href="<?php bloginfo('URL'); ?>">sir pharmacy</a>
        </p>
      </div>
    </div>
  </div>
</footer>
<!--End footer-main-->

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/plugins/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/plugins/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/plugins/bootstrap-select.min.js"></script>
<!-- Slick Slider -->
<script src="<?php echo get_template_directory_uri(); ?>/plugins/slick/slick.min.js"></script>
<!-- FancyBox -->
<script src="<?php echo get_template_directory_uri(); ?>/plugins/fancybox/jquery.fancybox.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="<?php echo get_template_directory_uri(); ?>/plugins/google-map/gmap.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/plugins/validate.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/plugins/wow.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/plugins/jquery-ui.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/plugins/timePicker.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<?php echo wp_footer(); ?>
</body>

</html>