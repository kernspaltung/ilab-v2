<?php
/*
Template Name: AC
*/
get_header();
?>

<section id="content" class="content columns small-12 large-9 p-0 h-a h-md-100-v">

  <div class="columns p-t-1 p-0 h-a m-b-1">

    <!--  -->
    <div class="bread columns p-0-3 h-10">
      <?php
      get_template_part('secciones/general/breadcrumbs')
      ?>
    </div>
    <!--  -->

    <?php

    if (have_posts()):
      while (have_posts()): the_post();
      ?>

      <div class="columns small-12 h-a h-md-80">


        <div class="columns p-0 h-30-v">
          <div class="columns p-0 imgLiquid imgLiquidFill">

            <?php echo get_the_post_thumbnail(); ?>

          </div>
        </div>

        <div class="columns p-0 h-a h-md-40">

          <h3 class="columns p-t-0-3 p-l-0 text-left font-light bold">
            <?php
            echo get_the_title();
            ?>
          </h3>
          <hr>
          <div class="columns h-a p-1 font-s font-md-m text-justify">

            <?php echo get_the_content(); ?>

          </div>

        </div>

      </div>

      <?php
    endwhile;
  endif;
  ?>

  <!-- inicia menu de paginas -->
  <div class="columns small-12 h-a h-md-20 v-center">

    <div class="menu-pagina p-0 columns text-center">

      <?php
      menu_paginas('menu-ac', 'menu-ac' );
      ?>

    </div>

  </div>
  <!-- fin menu de paginas -->


</div>

</section>

<?php
get_footer();
?>
