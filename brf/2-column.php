


<?php get_header();

/*
Template Name: Two
*/

?>



 <?php if(get_field('intro_bg')): ?>
  <div class="intro-sub animated fadeIn undersida-img"
  style="background:linear-gradient( rgba(0, 0, 0, .5),rgba(0, 0, 0, .2)),url('<?php the_field('intro_bg'); ?>'); background-position: center center; background-size:cover;">
 <?php endif; ?>

 <div class="intro-text">
    <h1 class="animated fadeInUp anim-delay-400"><?php the_title(); ?></h1>
  </div>
 </div>


<div class="block-subpage-2 subpage-container animated fadeIn">
  <div class="container">

    <div class="col-sm-12 col-md-8 left">
      <?php the_field('field-left'); ?>
    </div>

    <div class="col-sm-12 col-md-4 right">
      <?php the_field('field-right'); ?>
    </div>

  </div>
</div>



<?php get_footer(); ?>
