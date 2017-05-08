<section id="inicio-aliados" class="paralax-bg section columns h-100-v p-top">

  <div class="content-wrapper">

    <div class="columns h-15 v-center">

      <h1 class="columns p-0 text-left color-blanco">Aliados</h1>

    </div>
    <!-- svg -->
    <div class="columns h-85 v-center">



      <!--  -->

      <div id="inicio-aliados-slider" class="slick columns p-0">

        <?php
        //logo de aliados
        $titulos  = array('Titulo de logo aliado');

        // $accion = 'link';

        for ($i=0; $i < 30 ; $i++):
          ?>
          <div class="columns p-0 rel">

            <div class="columns p-4 z-1 absUpL">
              <div class="columns p-0 imgLiquid imgLiquidFill">

                <img src="http://fakeimg.pl/320x240/?text=Aliado<?php echo ' ' . $i;?>" alt="" />

              </div>
            </div>
            <div class="textos-slider h-15 columns z1 absDownL p-0 color-white v-center">

              <h4 class="columns p-1 h-a text-center text-shadow color-blanco">

                <?php

                echo $titulos[0] . ' ' . $i;

                ?>

              </h4>



            </div>


          </div>

          <?php
        endfor;
        ?>

      </div>


      <!--  -->



    </div>

  </section>
