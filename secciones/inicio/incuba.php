<section id="inicio-incuba" class="paralax-bg section columns h-100-v p-top rel">



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
        <div class="columns h-15 v-center">

          <h1 class="columns p-0 text-left color-blanco text-shadow">

            <?php
            echo get_the_title();
            ?>

          </h1>

        </div>
        <!-- svg -->
        <div class="columns h-85 v-center">


          <div class="columns p-0 small-10 medium-8 large-6 h-40 small-centered v-center">

            <!-- svg animado -->
            <object id="incuba-svg" class="columns p-0 h-100 text-shadow" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri();?>/img/inicio-svgs/test4.svg"></object>

          </div>

          <!--  -->
          <div class="columns p-1 small-11 medium-9 large-7 small-centered h-60 rel v-center">

            <div class="columns p-1 h-a font-s font-md-m font-lg-l text-justified color-claro text-shadow rel">

              <div class="columns p-0-3 color-negro-bg absUpL z-1">

              </div>
              <?php

              echo get_the_content();

              ?>

            </div>

            <a href="<?php echo get_page_link(16);?>" class="link-seccion button columns small-8 medium-6 large-4 h-a p-1 m-t-0-2 font-s font-sm-m font-lg-l absDownR shadow">

              Click para conocer más

            </a>

          </div>


        </div>

        <?php
      endwhile;
    endif;
    ?>

  </div>


</section>
