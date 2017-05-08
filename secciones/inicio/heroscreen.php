<section id="inicio-portada" class="section columns h-100-v p-top p-l-0 p-r-0">


  <div id="inicio-heroscreen-slider" class="slick columns p-0">

    <?php
    //ultimas noticias
    $titulos  = array('Titulo Ilab noticia destacada');
    $extractos  = array('Lorem spectrum patum ed vivenci consortum democretvs rip adversus penas oscvrum op sis');
    $pic = array('workshop', 'coding', 'technology');
    $accion = 'Lee artículo';

    for ($i=0; $i < 3 ; $i++):
      ?>
      <div class="columns p-0 rel text-shadow">

        <div class="columns p-0 z-1 absUpL imgLiquid imgLiquidFill">

          <img src="http://loremflickr.com/1920/800/<?php echo $pic[$i];?>/all" alt="" />

        </div>
        <div class="textos-slider columns z1 absUpL p-0 color-white v-center">

          <h1 class="columns p-1 h-a text-center color-blanco">

            <?php

            echo $titulos[0] . ' ' . $i;

            ?>

          </h1>
          <div class="columns small-12 medium-8 p-1 h-a text-justify small-centered font-m font-sm-m font-lg-l color-blanco">

            <?php

            echo $extractos[0];

            ?>

          </div>
          <div class="columns small-8 medium-4 large-2 small-centered h-a">

            <a href="#" class="columns p-2 font-s font-sm-m font-lg-l text-center">

              <?php

              echo $accion;

              ?>

            </a>

            </div>

        </div>


      </div>

      <?php
    endfor;
    ?>

  </div>




</section>
