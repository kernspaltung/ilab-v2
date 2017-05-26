<?php
get_header();

?>

<section id="content" class="content columns small-12 medium-8 large-9 p-0">

  <div class="columns p-1">

    <!--  -->
    <div class="bread columns p-0-2 h-a">
      <?php if(function_exists('bcn_display')) {
        bcn_display();
      }
      ?>
    </div>
    <!--  -->

    <div class="columns h-a p-t-1">
      <?php
      for ($i=0; $i < 100; $i++) {
        echo ' Esto es  el contenedor de la pagina ';
      }
      ?>
    </div>

  </div>

</section>

<?php

get_footer();
