<section id="footer-widgets" class="p-t-footer section columns p-0 fp-auto-height color-claro-bg color-blanco">
  <!--  -->
  <div class="columns small-12 h-a h-md-15-v v-center">

    <div class="menu-pagina p-0 columns text-center">

      <?php
      menu_paginas('menu-footer', 'menu-footer', 'menu-footer' );
      ?>

    </div>

    <hr>

  </div>
  <!--  -->
  <div class="columns small-12 medium-6 large-4 h-footer-widget v-center">


    <div class="columns h-90 text-justify">

      <?php
      echo get_template_part('secciones/general/footer-widgets/info');
      ?>

    </div>

  </div>

  <!--  -->
  <div class="columns small-12 medium-6 large-4 h-widget-contacto v-center">

    <div class="columns h-90 text-left">

      <?php
      echo get_template_part('secciones/general/footer-widgets/contacto');
      ?>

    </div>


  </div>
  <div class="columns small-12 large-4 h-footer-widget v-center">

    <div class="columns h-90 text-center">
      <?php
      echo get_template_part('secciones/general/footer-widgets/banners');
      ?>
    </div>

  </div>

  <?php
  get_template_part('secciones/general/copyright');
  ?>

</section>
