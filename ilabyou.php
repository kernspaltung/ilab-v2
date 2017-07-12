<?php
/*
Template Name: iLab You
*/
get_header();
?>

<section id="content" class="content columns small-12 large-9 p-0 h-a h-md-100-v">

  <div class="columns p-t-1 p-0">

    <!--  -->
    <div class="bread columns p-0-2 h-10">
      <?php
      get_template_part('secciones/general/breadcrumbs')
      ?>
    </div>
    <!--  -->

    <?php

    if (have_posts()):
      while (have_posts()): the_post();
      ?>

      <div class="columns small-12 h-80 h-md-70 v-center">


        <h4  class="column p-0 s text-left font-light">
          <?php
          echo get_the_title();
          ?>
        </h4 >


        <div class="columns p-0 h-50-v h-md-50 imgLiquid imgLiquidFill">
          <?php echo get_the_post_thumbnail(); ?>
        </div>

        <div class="columns h-a p-0 p-t-2 font-s font-md-s text-left">

          <?php echo get_the_content(); ?>

        </div>

      </div>

      <?php
    endwhile;
  endif;
  ?>

  <!-- inicia menu de paginas -->
  <!-- <div class="columns small-12 medium-4 h-80 h-md-70 v-center">

  <div class="menu-pagina columns h-a p-0 text-center">

  <?php

  //menu_paginas('menu-incuba', 'menu-incuba' )

  ?>

</div>

</div> -->
<!-- fin menu de paginas -->


</div>

</section>

<?php
get_footer();
?>
