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
  get_template_part("secciones/inicio/incuba");

  // get_template_part("secciones/inicio/startups");

  get_template_part("secciones/inicio/aliados");

  get_template_part("secciones/inicio/eventos-ac");

  get_template_part("secciones/general/footer-widgets");

  ?>

</div>

<?php

get_footer('inicio');
