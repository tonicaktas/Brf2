<!DOCTYPE html>

<head>
  <meta charset="utf-8">


  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

   

    <!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"> -->
    
    
    
   

    <?php wp_head(); ?>

</head>
<div class="wrapper">
<header>
  <div class="navmenu navmenu-default navmenu-fixed">
      <a class="navmenu-brand" href="<?php bloginfo('url') ?>">Brf 2</a>
      <ul class="nav navmenu-nav">
        <?php
          wp_nav_menu(array(
            'theme_location'  => 'primary',
            'depth'           => 2,
            'container'       => 'div',
            'menu_class'      => 'nav',
            'fallback'        => 'wp_bootstrap_navwalker::fallback',
            'walker'          => new wp_bootstrap_navwalker()
          ));
        ?>
        <?php if(has_custom_logo()) : ?>
          <?php the_custom_logo(); ?>
        <?php else : ?>

        <?php endif; ?>
      </ul>
    </div>




    <div class="canvas">

      <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
        <div class="logo">
          <a href="<?php bloginfo('url') ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-black.png " />
          </a></div>
        <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-recalc="false" data-target=".navmenu" data-canvas=".canvas">

          <div class="hamburger">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </div>
        </button>
      </div>
    </div>
  </div>

    </header>
<body>
