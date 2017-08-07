<?php
/*
Template Name: Inicio
*/
get_header('inicio');

?>

<div id="fullpage">

  <?php
  get_template_part("secciones/inicio/heroscreen");

  get_template_part("secciones/inicio/nosotros");
  //
  get_template_part("secciones/inicio/bootcamp");
  //
  // get_template_part("secciones/inicio/incuba");
  get_template_part("secciones/inicio/coworking");

  // get_template_part("secciones/inicio/startups");

  get_template_part("secciones/inicio/aliados");

  get_template_part("secciones/inicio/eventos-ac");

  get_template_part("secciones/general/footer-widgets");
?>

<section id="footer-widgets-small" class="h-a columns p-0 fp-auto-height color-claro-bg color-blanco show-for-small-only">

  <div class="columns small-12 large-4 h-footer-widget v-center">

    <div class="columns h-50-v text-center">

      <?php
      echo get_template_part('secciones/general/footer-widgets/banners');
      ?>
    </div>

  </div>

</section>

</div>

<?php

get_footer('inicio');
