<?php
/*
Template Name: Lego - datos
*/
get_header();
?>

<section id="content" class="content columns small-12 large-9 p-0 h-a">

  <div class="columns p-1">

    <!--  -->
    <div class="bread columns p-0-3 h-10">
      <?php
      get_template_part('secciones/general/breadcrumbs');
      ?>
    </div>
    <!--  -->

    <?php

    if (have_posts()):
      while (have_posts()): the_post();
      ?>

      <div class="columns small-12 h-80-v v-center">


        <h3 class="columns  p-0 text-left font-light">
          <?php
          echo get_the_title();
          ?>
        </h3>

        <div class="columns p-0 h-50 h-md-40 imgLiquid imgLiquidFill">
          <?php
          echo get_the_post_thumbnail(); ?>
        </div>


        <div class="columns h-a p-1 font-s font-md-m text-justify">

          <?php echo get_the_content(); ?>

        </div>

      </div>

      <?php
    endwhile;
  endif;
  ?>

  <div class="become columns h-a p-1">

    <?php echo do_shortcode('[contact-form-7 id="426" title="LEGO"]'); ?>

  </div>
</div>

</section>

<?php
get_footer();
?>
