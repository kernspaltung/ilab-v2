<section id="inicio-coworking" class="paralax-bg section columns h-100-v p-top rel">



  <?php
  $args = page_id(30);

  $query = new WP_Query( $args );

  if ( $query->have_posts() ) :
    while ( $query->have_posts() ) : $query->the_post();
    ?>



    <div class="fondo columns p-0 absUpL z-1 imgLiquid imgLiquidFill">
      <?php echo get_the_post_thumbnail();?>

    </div>


    <div class="content-wrapper">
      <div class="columns h-15 v-center" style="display:none">

        <h1 class="columns p-0 text-left color-blanco text-shadow">

          <?php
          echo get_the_title();
          ?>

        </h1>

      </div>
      <!-- svg -->
      <div class="columns h-100">
        <!-- h-85 -->

        <div class="columns p-0 small-11 medium-10 large-9 h-35 small-centered">

          <!-- svg animado -->
          <object id="incuba-svg" class="columns p-0 h-100 text-shadow" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri();?>/img/inicio-svgs/incuba.svg"></object>

        </div>

        <!--  -->
        <div class="columns p-1 p-l-0 p-r-0 small-11 medium-9 large-7 small-centered h-65 rel v-center">

          <div class="columns p-1 h-a font-s font-md-m text-justified color-claro shadow rel">

            <div class="columns p-0-3 color-verde-bg absUpL z-1">

            </div>
            <?php

            echo get_the_content();

            ?>

            <a href="<?php echo get_page_link(16);?>" class="link-seccion color-azul-bg color-link-hover-bg text-center color-claro columns small-8 medium-6 large-4 h-a p-0-2 m-t-0-2 m-b-0 font-s font-sm-m">

              Click para conocer más

            </a>
          </div>


        </div>


      </div>

      <?php
    endwhile;
  endif;
  ?>

</div>


</section>
