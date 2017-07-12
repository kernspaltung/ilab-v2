<?php
/*
Template Name: Extended Team
*/
get_header();
?>

<section id="content" class="content columns small-12 large-9 p-0 h-a">

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
      <!--  -->
      <div id="encabezado-mentores" class="columns small-12 p-1 h-a end">

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
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $args = cpt('extended-team', $paged);
  $q = new WP_Query( $args );

  if ( $q->have_posts()):
    while ( $q->have_posts()):  $q->the_post();
    ?>
    <div class="columns small-12 medium-6 large-4 text-center  font-m font-md-s">

      <a href="<?php echo get_the_permalink();?>" class="columns p-0 h-a card">


        <div class="w-100 p-1 h-40-v ">

          <div class="columns p-0 round">
            <div class="columns  p-0 imgLiquid imgLiquidNoFill">
              <?php echo  get_the_post_thumbnail(); ?>
            </div>
          </div>

        </div>

        <div class=" texto-perfil columns p-0-3 h-a">

          <div class="columns h-a font-light">
            <?php echo get_post_meta(get_the_ID(),"extended-nombre",true); ?>
          </div>
          <div class="columns h-a">
            <?php echo get_post_meta(get_the_ID(),"extended-area",true); ?>
          </div>

        </div>

      </a>

    </div>

    <?php
  endwhile;
  // Paginacion
  include_once "secciones/general/paginacion-cpt.php";
  //
endif;
?>
<!-- Termina perfil -->

</div>

</section>

<?php
get_footer();
?>
