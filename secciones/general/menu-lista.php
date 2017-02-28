<ul id="lista-menu" class="p-0">


  <?php
  $menu = array('Inicio', 'Nosotros','Bootcamp','Graduados','Ailados','Eventos', 'AC');
  // '¿Quiénes somos?'
  
  for ($i=0; $i < count($menu) ; $i++):

    ?>


    <li class="columns p-0 h-100 shareW">

      <a href="#" class="columns h-100 text-center text-shadow v-center">


        <!-- <div class="columns p-l-0 p-r-0 v-center"> -->

        <div class="columns h-a p-0">

          <?php

          echo $menu[$i]

          ?>

          <!-- </div> -->

        </div>

      </a>

    </li>



  <?php endfor; ?>

</ul>
