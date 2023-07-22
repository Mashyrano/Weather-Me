<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php 
    if(get_field('title_tag')){?>
      <title><?php echo get_field('title_tag'); wp_title(); ?></title>
      <?php
    }
    else{?>
      <title><?php wp_title();  echo ' » WeatherMe';  ?></title>
      <?php
    }
    if(get_field('meta_description')){?>
      <meta name="description" content="<?php echo get_field('meta_description'); ?>">
      <?php
    }
    if(get_field('meta_keywords')){?>
      <meta name="keywords" content="<?php echo get_field('meta_keywords'); ?>">
      <?php
    }
  ?>
  <meta name="author" content="Theresa Stephens">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-189810224-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-189810224-1');
  </script>
  
  
  <?php wp_head(); ?>




  <!-- Font Awesome kit link -->
  <script src="https://kit.fontawesome.com/1ded87c941.js" crossorigin="anonymous"></script>

</head>

<body <?php body_class('container-fluid g-0'); ?> >
 

<main>
<div class="container-fluid">
  <header class="header">
    <nav class="navbar navbar-expand">
    <a href="#" class="nav-brand">Logo</a>
      <ul class="navbar-nav ms-auto">
        <div class="search">Search <i class="fa-solid fa-magnifying-glass"></i></div>
      </ul>
    </nav>
  </header>
</div>