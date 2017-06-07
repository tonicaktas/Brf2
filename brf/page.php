


<?php get_header();

/*
Template Name: One
*/

?>



 <?php if(get_field('intro_bg')): ?>
  <div class="intro-sub animated fadeIn undersida-img" style="background-image: url('<?php the_field('intro_bg'); ?>'); background-position: center center; background-size:cover;">
 <?php endif; ?>
<div class="overlay"></div>
 <div class="intro-text">
    <h1 class="animated fadeInUp anim-delay-400"><?php the_title(); ?></h1>
  </div>
 </div>


<div class="block subpage-container animated fadeIn">
  <div class="container">
    <!-- <div data-0="background-color:rgb(0,0,255);" data-200="background-color:rgb(255,0,0);">WOOOT</div> -->




    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>
    
    <?php if(is_page(64)): ?>

    
    <!-- ========== START COPYING HERE ========== -->
		<div id="popup-1" class="slickModal">
			<div class="slickWindow">
				<!-- Your popup content -->
				
				<?php echo do_shortcode('[contact-form-7 id="343" title="hyr lägenhet"]'); ?>
								<!-- / Your popup content -->
			</div>
		</div>
		<!-- ========== END COPYING HERE ========== -->
    			
 <?php endif ?>
 
 <?php if(is_page(353)): ?>

    
    <!-- ========== START COPYING HERE ========== -->
		<div id="popup-1" class="slickModal">
			<div class="slickWindow">
				<!-- Your popup content -->
				
				<?php echo do_shortcode('[contact-form-7 id="356" title="hyr lägenhet"]'); ?>
								<!-- / Your popup content -->
			</div>
		</div>
		<!-- ========== END COPYING HERE ========== -->
    			
 <?php endif ?>

  </div>
</div>



<?php get_footer(); ?>
