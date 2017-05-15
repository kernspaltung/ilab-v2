
  <div class="sticky columns p-0" >

    <!-- banners slider -->
    <div id="sidebar-banner-slider" class="slick-sidebar columns p-0">

      <?php
      //
      $titulos  = array('Texto de un banner en el sidebar sticky');

      // $accion = 'link';

      for ($i=0; $i < 4 ; $i++):
        ?>
        <div class="columns p-0 rel">

            <div class="columns p-0 absUpL imgLiquid imgLiquidFill">

              <img src="http://loremflickr.com/980/600/coop/all" alt="" />

            </div>

          <div class="textos-slider h-35 columns z1k absDownL p-0 color-white v-center">

            <h5 class="columns p-0-2 h-a text-center text-shadow color-blanco">

              <?php

              echo $titulos[0] . ' ' . $i;

              ?>

            </h5>



          </div>


        </div>

        <?php
      endfor;
      ?>

    </div>


    <!--  -->

  </div>
