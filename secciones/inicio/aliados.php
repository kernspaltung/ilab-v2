<section id="inicio-aliados" class="paralax-bg section columns h-100-v p-top rel">

  <?php
  $args = page_id(34);

  $query = new WP_Query( $args );

  if ( $query->have_posts() ) :
    while ( $query->have_posts() ) : $query->the_post();
    ?>



    <div class="fondo-aliados columns p-0 absUpL z-1 imgLiquid imgLiquidFill">
      <?php echo get_the_post_thumbnail();?>

    </div>


    <div class="content-wrapper">

      <div class="columns h-15 v-center">

        <h1 class="columns p-0 text-left color-blanco text-shadow">

          <?php echo get_the_title();?>

        </h1>

      </div>



      <!--  -->
      <div class="columns p-0 small-11 medium-9 large-7 small-centered h-30 rel v-center">

        <div class="columns p-0 h-a font-s font-sm-m font-md-l text-justified color-claro text-shadow">

          <?php

          echo get_the_content();

          ?>

        </div>

        <a href="<?php echo get_page_link(20);?>" class="link-seccion button columns small-8 medium-6 large-4 h-a p-1 m-t-0-2 font-s font-sm-m font-lg-l absDownR shadow">

          Click para conocer más

        </a>

      </div>




      <div class="columns h-55 p-b-1-2 v-center">

        <?php echo get_template_part('secciones/general/slider-aliados'); ?>

        <!-- <a class="columns p-0" href="<?php //echo get_permalink();?>">
      </a> -->

    </div>

  </div>

  <?php
endwhile;
endif;
?>


</section>
