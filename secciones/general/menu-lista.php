<ul id="lista-menu" class="columns p-0">


  <?php
  $menu = array('Inicio', 'Nosotros','Bootcamp','Coworking',/*'Incuba','Startups',*/'Aliados','Eventos/AC','Contacto');
  $ids = array('portada', 'quien-somos','bootcamp','coworking',/*'incuba','startups',*/'aliados','eventos-ac','contacto');

  for ($i=0; $i < count($menu) ; $i++):

    ?>

    <li class="columns p-0 h-100 shareW" data-menuanchor="<?php echo $ids[$i];?>">

      <a href="#<?php echo $ids[$i];?>" class="columns p-0 h-100">


        <div class="columns v-center">

          <div class="columns h-a p-0">

            <?php

            echo $menu[$i]

            ?>

          </div>

        </div>

      </a>

    </li>



  <?php endfor; ?>

</ul>
