<?php
/*
Template Name: About
*/
get_header();
?>

<section id="content" class="content columns small-12 large-9 p-0 h-a h-md-100-v">

  <div class="columns p-1">

    <!--  -->
    <div class="bread columns p-0-2 h-10">
      <?php //echo do_shortcode('[breadcrumb]');?>
      <?php if(function_exists('bcn_display')) {
        bcn_display();
      }
      ?>
    </div>
    <!--  -->

    <?php

    if (have_posts()):
      while (have_posts()): the_post();
      ?>

      <div class="columns small-12 h-80 h-md-70 v-center">


        <div class="columns p-0 h-40">
          <div class="columns p-0 imgLiquid imgLiquidFill">

            <?php echo get_the_post_thumbnail(); ?>

          </div>
        </div>

        <div class="columns p-0 h-60">

          <h3 class="columns p-t-0-3 text-left font-light bold">
            <?php
            echo get_the_title();
            ?>
          </h3>
          <hr>
          <div class="columns h-a p-1 font-s text-justify">

            <?php echo get_the_content(); ?>

          </div>

        </div>

      </div>

      <?php
    endwhile;
  endif;
  ?>

  <!-- inicia menu de paginas -->
  <div class="columns small-12  h-20 v-center">

    <div class="menu-pagina p-0 columns h-a text-center">

      <?php
      menu_paginas('menu-about', 'menu-about' )
      ?>

    </div>

  </div>
  <!-- fin menu de paginas -->


</div>

</section>

<?php
get_footer();
?>
