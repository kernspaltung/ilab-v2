<ul id="lista-menu" class="columns p-0">


  <?php
  $menu = array('Inicio', 'Nosotros','Bootcamp','Incuba','Startups','Ailados','Eventos/AC');
  $ids = array('inicio-heroscreen', 'inicio-nosotros','inicio-bootcamp','inicio-incuba','inicio-startups','inicio-aliados','inicio-eventos-ac');
  // '¿Quiénes somos?'

  for ($i=0; $i < count($menu) ; $i++):

    ?>


    <li class="columns p-0 h-100 shareW" data-menuanchor="<?php echo $ids[$i];?>">

      <a href="#<?php echo $ids[$i];?>" class="columns h-100 text-center v-center color-negro-hover">


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
