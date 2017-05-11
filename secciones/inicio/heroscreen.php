<section id="inicio-portada" class="section columns h-100-v p-top p-l-0 p-r-0">


  <div id="inicio-heroscreen-slider" class="slick-portada columns p-0">

    <?php

    $args = array(
      'cat' => 7,
      // 'category' => 'slider-destacadas'
    );
    $query = new WP_Query($args);

    if($query->have_posts()):
      while ($query->have_posts()): $query -> the_post();
      ?>
      <div class="columns p-0 rel text-shadow">

        <div class="columns p-0 z-1 absUpL imgLiquid imgLiquidFill">

          <?php
          echo get_the_post_thumbnail();
          ?>

        </div>
        <div class="textos-slider columns z1 absUpL p-0 color-white v-center">

          <h1 class="columns p-1 h-a text-center color-blanco">

            <?php

            echo get_the_title();

            ?>

          </h1>
          <div class="columns small-12 medium-8 p-1 h-a text-justify small-centered font-m font-sm-m font-lg-l color-blanco">

            <?php

            echo excerpt(26);

            ?>

          </div>
          <div class="columns small-8 medium-4 large-2 small-centered h-a">

            <a href="<?php echo get_permalink();?>" class="button columns p-2 font-s font-sm-m font-lg-l text-center">

              <?php

              echo 'Conoce más';

              ?>

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
