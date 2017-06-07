<?php get_header(); ?>

    <section class="row showcase ">
      <div class="jumbotron">
        <div class="container animated pulse anim-delay-200">
          <h1>//   Brf 2<span>.</span></h1>
           <p class="">
            <?php the_field('intro_text_1'); ?>
          </p>
        </div>
      </div>
    </section>


      <div class="intro row">

        <div class="container">

          <div class="icon-ett col-md-12">
            <?php if( have_rows('tre_iconer') ):
              while ( have_rows('tre_iconer') ) : the_row();
                $lank = get_sub_field('lank');
                $icon = get_sub_field('icon');
                $rubrik = get_sub_field('rubrik');
                $text = get_sub_field('text');
                ?>
                <div class="col-xs-12 col-md-4 box">



                  <a href="<?php echo $lank;?>"><p><?php echo $icon;?></p></a>
                  <h3><?php echo $rubrik;?></h3>
                  <p><?php echo wp_trim_words($text, 40, '...');?></p>

                </div>

            <?php
              endwhile;
              endif;
            ?>
          </div>
        </div>
      </div>

          <div class=" container " id="start">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
              <?php endwhile; endif; ?>

              <div class="bild-text col-sm-3">
                <div>
                  <p><?php the_field('text-1'); ?></p>
                </div>

                <div class="bilden">
                  <img src="<?php the_field('bild-1'); ?>" />
                </div>

              </div>

              <div class="bild-text col-sm-3">
                <div class="bilden">
                  <img src="<?php the_field('bild-2'); ?>" />

                </div>
              <div>
                <p><?php the_field('text-2'); ?></p>
              </div>

              </div>

              <div class="bild-text col-sm-3">
                <div>
                  <p>
                    <?php the_field('text-3'); ?>
                 </p>
               </div>
                <div class="bilden">
                  <img src="<?php the_field('bild-3'); ?>" />

                </div>

              </div>

              <div class="bild-text col-sm-3">
                <div class="bilden">
                  <img src="<?php the_field('bild-4'); ?>" />

                </div>
                <div>
                  <p><?php the_field('text-4'); ?></p>
                 </div>

              </div>

          </div>


<div class="row row-styrelsen">
  <div class="container styrelsen intro">

    <div class="col-sm-4">
      <span><i class="ion-ios-home"></i></span>
        <div>
            <h3>107</h3>
            <h6>Lägenheter</h6>

      </div>
    </div>

    <div class="col-sm-4">
      <span><i class="ion-model-s"></i></span>
        <div>
          <h3>40</h3>

          <h6>Parkeringar</h6>
        </div>
      </div>

    <div class="col-sm-4">
      <span><i class="ion-ios-color-filter"></i></span>
        <div>
          <h3>5</h3>

          <h6>Tvättstugor</h6>
      </div>
    </div>

    <!-- <?php the_field('styrelsen'); ?> -->

  </div>

  <p class="container">Föreningen är en fristående förening vilket bl.a. innebär att vi alla äger en del i fastigheten och att det är vi som bor här som genom val till styrelse har möjlighet att påverka vårt boende. Val till styrelsen sker vid föreningsstämman som hålls varje år på hösten (vanligtvis i september/oktober).
</p>
          <div class="container kontakter">

            <div class="set_7_btn-wrapper">
				  <svg height="45" width="150" xmlns="#">
                    <rect id="set_7_button2" height="45" width="150" />
                    <div id="set_7_text">
                      <a href="http://www.nolhaga4167.se/reparationslistan/">Reperationlistan</a>
                    </div>
                  </svg>
    		</div>

        <div class="set_7_btn-wrapper">
      <svg height="45" width="150" xmlns="#">
                <rect id="set_7_button2" height="45" width="150" />
                <div id="set_7_text">
                  <a href="http://www.nolhaga4167.se/kontaktlistan/">Kontaktlistan</a>
                </div>
              </svg>
    </div>

          
        </div>
</div>





<div class="refs">
  <div class="container">
    <div class="col-md-12 rad-ett">
      <div class="col-md-5 vanster-granne">
        <div class="col-md-9 granne-text">
          <h3><?php the_field('granne_namn_1'); ?></h3>
          <span><?php the_field('granne_bor_sen_1'); ?></span>
          <p>
            <?php the_field('granne_text_1'); ?>
            </p>
        </div>
        <div class="col-md-3 granne-bild">
          <img src="<?php the_field('granne_bild_1'); ?> " />

        </div>
      </div>
      <i class="ion-ios-plus-empty col-md-2"></i>

      <div class="col-md-5 hoger-granne">
        <div class="col-md-3 granne-bild">
          <img src="<?php the_field('granne_bild_2'); ?> " />

        </div>
        <div class="col-md-9 granne-text">
          <h3><?php the_field('granne_namn_2'); ?></h3>
          <span><?php the_field('granne_bor_sen_2'); ?></span>
          <p>
            <?php the_field('granne_text_2'); ?>
          </p>
        </div>

      </div>
    </div>
    <div class="col-md-12 rad-ett marginrad">
      <div class="col-md-5 vanster-granne">
        <div class="col-md-9 granne-text">
          <h3><?php the_field('granne_namn_3'); ?></h3>
          <span><?php the_field('granne_bor_sen_3'); ?></span>
          <p>
            <?php the_field('granne_text_3'); ?>
            </p>
        </div>
        <div class="col-md-3 granne-bild">
          <img src="<?php the_field('granne_bild_3'); ?> " />
        </div>

      </div>
      <i class="ion-ios-plus-empty col-md-2"></i>
      <div class="col-md-5 hoger-granne">
        <div class="col-md-3 granne-bild">
          <img src="<?php the_field('granne_bild_4'); ?> " />

        </div>
        <div class="col-md-9 granne-text">
          <h3><?php the_field('granne_namn_4'); ?></h3>
          <span><?php the_field('granne_bor_sen_4'); ?></span>

          <p>
            <?php the_field('granne_text_4'); ?>
            </p>
        </div>

      </div>

    </div>


  </div>
</div>





  <!-- <div class="row">
    <div class="boxes col-sm-12">

      <?php if( have_rows('boxar') ):
        while ( have_rows('boxar') ) : the_row();
          $iconer = get_sub_field('icon');
          $rubrik = get_sub_field('rubrik');
          $text = get_sub_field('texten');
          ?>
          <div class="col-xs-12 col-md-4 box">

            <h3><?php echo $iconer;?><?php echo $rubrik;?></h3>
            <p><?php echo wp_trim_words($text, 40, '...');?></p>
          </div>

      <?php
        endwhile;
        endif;
      ?>
    </div>
  </div> -->

  <!-- <div class="row rasta-hunden"></div> -->



    <!-- <div class="row thumb hidden-xs hidden-sm">


        <div class="col-xs-12">

        <?php if( have_rows('thumbnails') ):
          while ( have_rows('thumbnails') ) : the_row();
            $bild = get_sub_field('bild');
            $rubrik = get_sub_field('rubrik');
            $text = get_sub_field('text');
            $urlen = get_sub_field('urlen');

            ?>


  <div class="view view-first col-xs-12 col-sm-4  box">
    <img src="<?php echo $bild ?>" alt="...">
    <!-- <h2 class="fade"><?php echo $rubrik ?></h2>
       <div class="mask">
       <h2><?php echo $rubrik ?></h2>
       <p><?php echo wp_trim_words($text, 20, '...');?></p>
           <a href="<?php echo $urlen ?>" class="info">Läs mer...</a>
       </div>
  </div>



  <?php
    endwhile;
    endif;
  ?>

  </div>
</div> -->




<!-- <div class="row samarbete">


<div class="container">
    <?php if( have_rows('samarbete') ):
      while ( have_rows('samarbete') ) : the_row();
        $bild = get_sub_field('bild');
        $urlen = get_sub_field('urlen');
        ?>


        <a href="<?php echo $urlen ?>" target="_blank"><img src="<?php echo $bild ?>" alt="..." ></a>

      <?php
      endwhile;
      endif;
      ?>
      </div>
    </div> -->






  </div><!--end wrapper -->



<?php get_footer(); ?>
