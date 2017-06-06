<section id="inicio-bootcamp" class="paralax-bg section columns h-100-v rel">

  <?php
  $args = page_id(28);

  $query = new WP_Query( $args );

  if ( $query->have_posts() ) :
    while ( $query->have_posts() ) : $query->the_post();
    ?>



  <div class=" columns p-0 absUpL z-1 imgLiquid imgLiquidFill">
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
      <div class="columns h-100 v-center">
        <!-- h-85 -->


        <div class="columns p-0 small-10 medium-8 large-6 h-40 small-centered">

          <!-- svg animado -->
          <object id="bootcamp-svg" class="columns p-0 h-100 text-shadow" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri();?>/img/inicio-svgs/test2.svg"></object>

        </div>

        <!--  -->
        <div class="columns p-0 small-11 medium-9 large-7 small-centered h-50 rel v-center">

          <div class="columns p-1 h-a font-s font-md-m text-justified color-claro shadow rel">

            <div class="columns p-0-3 color-naranja-bg absUpL z-1">

            </div>
            <?php

            echo get_the_content();

            ?>

          </div>

          <a href="<?php echo get_page_link(14);?>" class="link-seccion color-naranja-bg color-link-hover-bg color-claro columns text-center m-b-1 small-8 medium-6 large-4 h-a p-1 m-t-0-2 font-s font-sm-m absDownR shadow">

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
