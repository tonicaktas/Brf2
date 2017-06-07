<?php
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

// Theme Support
function cleancut_theme_support(){
	// Post Thumbs
	add_theme_support('post-thumbnails');

	// Nav Menus
	register_nav_menus(array(
		'primary'	=> __('Primary Menu'),
		'footer'	=> __('Footer Menu')
	));

	// Option Page

	if ( function_exists('acf_add_options_page') ) {
		acf_add_options_page(array(
			'page_title' 	=> 'Option',
			'menu_title'	=> 'Option',
			'menu_slug' 	=> 'option',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
	}




	// Post Format Support
	add_theme_support('post-formats', array('aside', 'gallery'));
}

add_action('after_setup_theme', 'cleancut_theme_support');

// Widget Locations
// function init_widgets($id){
// 	register_sidebar(array(
// 		'name'	=> 'Sidebar',
// 		'id'	=> 'sidebar',
// 		'before_widget'	=> '<div class="well animated fadeInRight sidebar-widget">',
// 		'after_widget'	=> '</div>',
// 		'before_title'	=> '<h3>',
// 		'after_title'	=> '</h3>'
// 	));
//
// 	register_sidebar(array(
// 		'name'	=> 'Subnav',
// 		'id'	=> 'subnav',
// 		'before_widget'	=> '<div class="sub-nav">',
// 		'after_widget'	=> '</div>',
// 		'before_title'	=> '<div class="hide">',
// 		'after_title'	=> '</div>'
// 	));
//
// 	register_sidebar(array(
// 		'name'	=> 'Bottom',
// 		'id'	=> 'bottom',
// 		'before_widget'	=> '<div class="section-a animated fadeInUp"><div class="container">',
// 		'after_widget'	=> '</div></div>',
// 		'before_title'	=> '<div class="hide">',
// 		'after_title'	=> '</div>'
// 	));
// }
//
// add_action('widgets_init', 'init_widgets');

// Get Top Parent Page
// function get_top_parent(){
//   global $post;
//   if($post->post_parent){
//     $ancestors = array_reverse(get_post_ancestors($post->ID));
//     return $ancestors[0];
//   }
//
//   return $post->ID;
// }

// Add Customizer Functionality
// require get_template_directory(). '/inc/customizer.php';




function wpt_theme_styles(){
    wp_enqueue_style('bootstrap_css',get_template_directory_uri() . '/css/bootstrap.css' );

	wp_enqueue_style('font-awesome_css',get_template_directory_uri() . '/css/font-awesome.css' );
	wp_enqueue_style('animate_css',get_template_directory_uri() . '/css/animate.css' );
	// wp_enqueue_style('navmenu-reveal_css',get_template_directory_uri() . '/css/navmenu-reveal.css' );
	
	wp_enqueue_style('slick_css',get_template_directory_uri() . '/library/less/slick.css' );
	wp_enqueue_style('demo_css',get_template_directory_uri() . '/library/less/demo.css' );

	wp_enqueue_style('nav_css',get_template_directory_uri() . '/library/less/nav.css' );
	wp_enqueue_style('front_css',get_template_directory_uri() . '/library/less/front.css' );
	wp_enqueue_style('undersidan_css',get_template_directory_uri() . '/library/less/undersidan.css' );

	wp_enqueue_style('footer_css',get_template_directory_uri() . '/library/less/footer.css' );




	wp_enqueue_style('style_css',get_template_directory_uri() . '/css/style.css' );






  }
  add_action('wp_enqueue_scripts'/*hook som säger vilak filer som ska laddas till sidan*/,'wpt_theme_styles');//function to load the styles


function wpt_theme_js() {


    wp_enqueue_script('bootstrap_js', get_template_directory_uri(). '/library/js/bootstrap.js',array('jquery'),'',true);
	 // wp_enqueue_script('fresco_js', get_template_directory_uri(). '/library/js/fresco.js',array('jquery'),'',true);
	   wp_enqueue_script('slick-modal.min_js', get_template_directory_uri(). '/library/js/jquery.slick-modal.min.js',array('jquery'),'',true);


}
  add_action('wp_enqueue_scripts','wpt_theme_js');
