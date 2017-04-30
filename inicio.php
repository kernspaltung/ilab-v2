<?php
/*
Template Name: Inicio
*/
get_header();

?>
<div id="fullpage">

  <?php

  get_template_part("secciones/inicio/heroscreen.php");

  get_template_part("secciones/inicio/nosotros.php");
  //
  get_template_part("secciones/inicio/bootcamp.php");
  //
  get_template_part("secciones/inicio/incuba.php");

  get_template_part("secciones/inicio/startups.php");

  get_template_part("secciones/inicio/aliados.php");

  get_template_part("secciones/inicio/eventos-ac.php");

  get_template_part("secciones/general/footer-widgets.php");

  ?>

</div>

<?php

get_footer();
