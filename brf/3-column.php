


<?php get_header();

/*
Template Name: Three
*/

?>



 <?php if(get_field('intro_bg')): ?>
  <div class="intro-sub animated fadeIn undersida-img" style="background-image: url('<?php the_field('intro_bg'); ?>'); background-position: center center; background-size:cover;">
 <?php endif; ?>

 <div class="intro-text">
    <h1 class="animated fadeInUp anim-delay-400"><?php the_title(); ?></h1>
  </div>
 </div>


<div class="block subpage-container animated fadeIn">
  <div class="container">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>

  </div>
</div>



<?php get_footer(); ?>
