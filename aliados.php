<?php
/*
Template Name: Aliados iLab
*/
get_header();
?>

<section id="content" class="content columns small-12 large-9 p-0 h-a">

  <div class="columns p-1 h-a m-b-1">

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
  <div class="columns small-12 h-a h-md-20 v-center">

    <div class="menu-pagina p-0 columns text-center">

      <?php
      menu_paginas('menu-aliados', 'menu-aliados' );
      ?>

    </div>

  </div>
  <!-- fin menu de paginas -->


  <!-- slider logos -->
  <div class="columns p-0 h-50-v color-claro-bg p-b-1-2 v-center">
    <?php echo get_template_part('secciones/general/slider-aliados'); ?>

  </div>
  <!--  -->

</div>

</section>
<script type="text/javascript">
$(document).ready(function() {
  slider_aliados()
});
</script>

<?php
get_footer();
?>
