<?php get_header(); ?>

<?php
if( have_posts() ):

  while( have_posts() ): the_post(); ?>
 
 <div class="container-fluid cities" >
  <div class="row justify-content-between">
    <div class="col-12 col-md-auto justify-content-between">
      <h2 class="title">Vegas</h2>

      <div class="row">
        <div class="col"><i class="fa-regular fa-sun fa-4x"></i></div>
        <div class="col">"Lorem ipsum dolor sit amet</div>
      </div>
    </div>

    <div class="col-12 col-md-auto">
      <h2 class="title">Vegas</h2>

      <div class="row">
        <div class="col"><i class="fa-regular fa-sun fa-4x"></i></div>
        <div class="col">lorem ipsum sunny set</div>
      </div>
    </div>

    <div class="col-12 col-md-auto">
      <h2 class="title">Vegas</h2>

      <div class="row">
        <div class="col"><i class="fa-regular fa-sun fa-4x"></i></div>
        <div class="col">lorem ipsum sunny set</div>
      </div>
    </div>

    <div class="col-12 col-md-auto">
      <h2 class="title">Vegas</h2>

      <div class="row">
        <div class="col"><i class="fa-regular fa-sun fa-4x"></i></div>
        <div class="col">lorem ipsum sunny set</div>
      </div>
    </div>
  </div>
 </div>

  <?php endwhile;

endif;

?>

<?php get_footer(); ?>
