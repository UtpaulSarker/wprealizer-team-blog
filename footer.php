             
<footer class="footer-area section-gap">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6 single-footer-widget">
<?php dynamic_sidebar('top_products');?>
</div>
<div class="col-lg-2 col-md-6 single-footer-widget">
<?php dynamic_sidebar('quick_links');?>
</div>
<div class="col-lg-2 col-md-6 single-footer-widget">
<?php dynamic_sidebar('features');?>
</div>
<div class="col-lg-2 col-md-6 single-footer-widget">
    <?php dynamic_sidebar('resources');?>
</div>
<div class="col-lg-3 col-md-6 single-footer-widget">
<?php dynamic_sidebar('instragram_feed');?>
<!-- <h4>Instragram Feed</h4>
<ul class="instafeed d-flex flex-wrap">
<li><img src="<?php echo get_template_directory_uri(  );?>/img/i1.jpg" alt></li>
<li><img src="<?php echo get_template_directory_uri(  );?>/img/i2.jpg" alt></li>
<li><img src="<?php echo get_template_directory_uri(  );?>/img/i3.jpg" alt></li>
<li><img src="<?php echo get_template_directory_uri(  );?>/img/i4.jpg" alt></li>
<li><img src="<?php echo get_template_directory_uri(  );?>/img/i5.jpg" alt></li>
<li><img src="<?php echo get_template_directory_uri(  );?>/img/i6.jpg" alt></li>
<li><img src="<?php echo get_template_directory_uri(  );?>/img/i7.jpg" alt></li>
<li><img src="<?php echo get_template_directory_uri(  );?>/img/i8.jpg" alt></li>
</ul> -->
</div>
</div>
<div class="footer-bottom row align-items-center">
<p class="footer-text m-0 col-lg-8 col-md-12">
<?php echo get_theme_mod('copyright_area') ?>
</p>
<div class="col-lg-4 col-md-12 footer-social">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-dribbble"></i></a>
<a href="#"><i class="fa fa-behance"></i></a>
</div>
</div>
</div>
</footer>

 <?php wp_footer();?>