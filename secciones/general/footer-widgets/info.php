
      <div class="columns h-a font-s font-lg-m p-t-0-2 p-b-0-2">

        iLab es una empresa social que promueve el emprendimiento a través de la innovación. Organización independiente, sin vínculo a ninguna entidad de Gobierno ni afiliación política, nuestros objetivos de movilidad social y desarrollo de capacidades de negocio nos permiten crear alianzas con entidades públicas y privadas.

      </div>
      <div class="columns h-a bold font-s font-md-m p-t-0-2 p-b-0-2">
        ¿DUDAS?
        <a href="tel:012288412397">
          + 01 228 841 2397
        </a>
      </div>


      <?php

      $redes = array('facebook','twitter','linkedin-square','google-plus','instagram','youtube-play');

      for ($i=0; $i < 6 ; $i++):

        ?>

        <div class="columns small-2 p-l-0 p-r-0 h-a m-t-0-2 v-center">

          <div class="columns p-0 h-a text-center">

            <a class="columns p-0 font-s font-sm-m" href="http://www.facebook.com/" target="_blank">

              <i class="fa fa-<?php echo $redes[$i];?>"></i>

            </a>

          </div>

        </div>



      <?php endfor; ?>
