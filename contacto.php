<?php
/*
Template Name: Contacto
*/
get_header();
?>

<section id="content" class="content columns small-12 large-9 p-0 h-a">

  <div class="columns p-t-1 p-0 h-a m-b-1">

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

    <div class="columns small-12 h-a">


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
          <div class="columns small-12 medium-6 h-a p-1 font-s text-justify">

            <?php echo do_shortcode('[contact-form-7 id="4" title="Contacto-ilab"]'); ?>

          </div>
          <div class="columns small-12 medium-6 h-a p-1 font-s font-md-m text-justify">

            <?php echo get_the_content(); ?>

            <!-- esto va en el contenido directo en WP -->
            <!-- <div class="columns">
              <ul class="columns p-0 ">
                <li class="columns p-0 m-b-1 font-s font-md-m">
                  <label for="Direccion">Dirección:</label>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias ut voluptatum beatae!
                </li>
                <li class="columns p-0 m-b-1 font-s font-md-m">
                  <label for="Direccion">Telefonos:</label>
                  <span class="columns p-0">
                    <a href="tel:55 (55) 5555 5555">
                      55 (55) 5555 5555
                    </a>
                  </span>
                  <span class="columns p-0">
                    <a href="tel:55 (55) 5555 5555">
                      55 (55) 5555 5555
                    </a>
                  </span>
                  <span class="columns p-0">
                    <a href="tel:55 (55) 5555 5555">
                      55 (55) 5555 5555
                    </a>
                  </span>

                </li>
                <li class="columns p-0 m-b-1 font-s font-md-m">
                  <label for="Direccion">Correos:</label>
                  <span class="columns p-0">
                    <a href="mailto:hola@ilab.com">
                      hola@ilab.com
                    </a>
                  </span>
                  <span class="columns p-0">
                    <a href="mailto:hola@ilab.com">
                      atencion@ilab.com
                    </a>
                  </span>
                </li>

              </ul>
            </div> -->
            <!--  -->

          </div>
        </div>

      </div>

    </div>

    <?php
    endwhile;
    endif;
    ?>


  </div>
</section>

<?php
get_footer();
?>
