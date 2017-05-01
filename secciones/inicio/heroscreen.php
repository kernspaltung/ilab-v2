<section id="inicio-portada" class="section columns h-100-v p-top p-l-0 p-r-0">


  <div id="inicio-heroscreen-slider" class="slick columns p-0">

    <?php
    //ultimas noticias
    $titulos  = array('Titulo Ilab noticia destacada');
    $extractos  = array('Lorem spectrum patum ed vivenci consortum democretvs rip adversus penas oscvrum op sis');
    $accion = 'Lee artículo';

    for ($i=0; $i < 3 ; $i++):
      ?>
      <div class="columns p-0 rel">

        <div class="columns p-0 z-1 absUpL imgLiquid imgLiquidFill">

          <img src="http://fakeimg.pl/1920?text=Slide-<?php echo $i;?>" alt="" />

        </div>
        <div class="textos-slider columns z1 absUpL p-0 color-white v-center">

          <h1 class="columns p-1 h-a text-center ">

            <?php

            echo $titulos[0];

            ?>

          </h1>
          <div class="columns p-1 h-a text-center font-m font-sm-m font-lg-l">

            <?php

            echo $extractos[0];

            ?>

          </div>
          <div class="columns small-8 medium-4 large-2 small-centered h-a">

            <a href="#" class="columns p-2 font-s font-sm-m font-lg-l">

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
