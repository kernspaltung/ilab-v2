<?php
/*
Template Name: Become - Inscripción
*/
get_header();
?>

<section id="content" class="content columns small-12 large-9 p-0 h-a">

  <div class="columns p-1">

    <!--  -->
    <div class="bread columns p-0-2 h-10">
      <?php //echo do_shortcode('[breadcrumb]');
      ?>
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

      <div class="columns small-12 h-80-v v-center">


        <h3 class="columns text-left font-light">
          <?php
          echo get_the_title();
          ?>
        </h3>

        <div class="columns h-a p-1 font-s font-md-s text-justify">

          <?php echo get_the_content(); ?>

        </div>

      </div>

      <?php
    endwhile;
  endif;
  ?>

<div class="columns h-a p-1">

  <?php echo do_shortcode('[contact-form-7 id="235" title="Bootcamp"]'); ?>

</div>
</div>

</section>

<?php
get_footer();
?>
