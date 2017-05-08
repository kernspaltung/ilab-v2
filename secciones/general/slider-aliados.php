<div id="aliados-slider" class="slick-aliados columns p-0">

  <?php
  //logo de aliados
  $titulos  = array('Titulo de logo aliado');

  // $accion = 'link';

  for ($i=0; $i < 30 ; $i++):
    ?>
    <div class="columns p-0 rel">

      <div class="columns p-2 p-md-3 p-lg-4 z-1 absUpL">
        <div class="columns p-0 imgLiquid imgLiquidFill">

          <img src="http://fakeimg.pl/320x240/?text=Aliado<?php echo ' ' . $i;?>" alt="" />

        </div>
      </div>
      <div class="textos-slider h-15 columns z1 absDownL p-0 color-white v-center">

        <h5 class="columns p-1 h-a text-center text-shadow color-blanco">

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
