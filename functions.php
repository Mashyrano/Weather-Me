<?php 

/* 
    ==========================================
    Include scripts
    ==========================================
*/

function siteStylesheets(){

  wp_enqueue_style("bootstrap" , "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css");
  wp_enqueue_style('main' , "http://localhost:8080/wordpress/wordpress/wp-content/themes/weatherMe/weather-Me/dist/css/main.css");
  wp_enqueue_style('googleFonts' , "https://fonts.googleapis.com/css2?family=DM+Sans&family=Public+Sans:wght@700&display=swap");
  wp_enqueue_style('fontAwesome' , "https://kit.fontawesome.com/1ded87c941.js");

}

add_action('wp_enqueue_scripts' , 'siteStylesheets');



/*
  ==========================================
   Activate menus
  ==========================================
*/

function theme_setup()
{
  add_theme_support('menus');
  register_nav_menu('primary', 'Primary Header Menu');
  register_nav_menu('secondary', 'Secondary Footer Menu');
}

add_action('init', 'theme_setup');













































?> 