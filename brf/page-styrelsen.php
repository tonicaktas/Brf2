


<?php get_header();

/*
Template Name: Styrelsen
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
    <div class="col-sm-8 st-text">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>
    <!-- <div data-0="background-color:rgb(0,0,255);" data-200="background-color:rgb(255,0,0);">WOOOT</div>  -->
</div>




      <div class="row-2 col-sm-4">

        <?php if( have_rows('ordinarie') ):
          while ( have_rows('ordinarie') ) : the_row();
            $bild = get_sub_field('bild');
            $namn = get_sub_field('namn');
            $roll = get_sub_field('roll');
            $telefon = get_sub_field('telefon');
            $email = get_sub_field('email');
            ?>

        <!-- normal -->
        <div class=" item-hover circle effect3 right_to_left">
          <a href="#">
            <div class="img"><img src="<?php echo $bild; ?>"/></div>
            <div class="info">
              <h3><?php echo $namn;?></h3>
              <p>
                <?php echo $roll;?></br>
                <i class="ion-ios-telephone-outline"></i><?php echo $telefon;?></br>
                <i class="ion-ios-email-outline"></i><?php echo $email;?>

              </p>


            </div></a></div>
        <!-- end normal -->
        <?php
          endwhile;
          endif;
        ?>
           </div>





   <div class="row-2 col-sm-4">

     <?php if( have_rows('suplenager') ):
       while ( have_rows('suplenager') ) : the_row();
         $bild = get_sub_field('bild');
         $namn = get_sub_field('namn');
         $roll = get_sub_field('roll');
         $telefon = get_sub_field('telefon');
         $email = get_sub_field('email');
         ?>

     <!-- normal -->
     <div class="item-hover circle effect3 right_to_left">
       <a href="#">
         <div class="img"><img src="<?php echo $bild; ?>"/></div>
         <div class="info">
           <h3><?php echo $namn;?></h3>
           <p>
             <?php echo $roll;?></br>
             <i class="ion-ios-telephone-outline"></i><?php echo $telefon;?></br>
             <i class="ion-ios-email-outline"></i><?php echo $email;?>

           </p>


         </div></a></div>
     <!-- end normal -->
     <?php
       endwhile;
       endif;
     ?>
        </div>





  </div>

</div>



<?php get_footer(); ?>
