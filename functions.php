<?php 

   

   add_theme_support('post-thumbnails');
   add_theme_support('custom-header');

    
    register_nav_menus([
        'primary menu'=> 'Header',
        'secondary menu'=> 'Footer',
   ]);
  
    function currentYear(){
      return date('Y');
   }


   // 

   function wp_enque_files() {
   wp_enqueue_style( 'main', get_template_directory_uri() . '/dist/app.css' , array());
   wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css' , array());

   wp_enqueue_script( 'jquery-min', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js' , array(), NULL, true);
   wp_enqueue_script( 'jquery-main', get_template_directory_uri() . '/assets/js/query-1.11.0.min.js' , array(), NULL, true);
   wp_enqueue_script( 'slick-min', get_template_directory_uri() . '/assets/js/slick.min.js' , array(), NULL, true);
   wp_enqueue_script( 'main', get_template_directory_uri() . '/dist/app.js' , array(), NULL, true);
   }
   add_action( 'wp_enqueue_scripts', 'wp_enque_files' );

?>