<?php
/*
Template Name: Staff
*/
get_header();
?>

<section id="content" class="content columns small-12 large-9 p-0 h-a h-md-100-v">

  <div class="columns p-1">

    <!--  -->
    <div class="bread columns p-0-2 h-10">
      <?php echo do_shortcode('[breadcrumb]'); ?>
    </div>
    <!--  -->

    <?php

    if (have_posts()):
      while (have_posts()): the_post();
      ?>
      <!--  -->
      <div id="encabezado-perfil" class="columns small-12 p-1 h-a">

        <h4 class="column p-0 s text-left font-light">
          <?php
          echo get_the_title();
          ?>
        </h4 >

        <div class="columns h-a p-0 p-t-2 font-s font-md-s text-left">

          <?php echo get_the_content(); ?>

        </div>

      </div>
      <!--  -->

      <?php
    endwhile;
  endif;
  ?>


  <!-- inicia perfil  -->
  <?php
  $args = cpt('staff');
  $q = new WP_Query( $args );

  if ( $q->have_posts()):
    while ( $q->have_posts()):  $q->the_post();
    ?>
    <div class="columns small-12 medium-6 large-4 text-center font-light font-m font-md-s">

      <div class="columns p-0 h-40-v rounded">
        <div class="columns p-0 imgLiquid imgLiquidFill">
          <?php echo get_the_post_thumbnail(); ?>
        </div>
      </div>
      <div class="columns p-0-1 h-a">
        <?php echo get_the_title(); ?>
      </div>
      <div class="columns p-0-1 h-a">
        <?php echo get_post_meta(get_the_ID(),"staff-puesto",true); ?>
      </div>

    </div>

    <?php
  endwhile;
endif;
?>
<!-- Termina perfil -->

</div>

</section>

<?php
get_footer();
?>