<?php
get_header();

?>

<section class="content columns small-12 medium-8 large-9">

  <div class="columns p-1">

    <div class="columns h-a p-t-1">
      <?php
      for ($i=0; $i < 500 ; $i++) {
        echo ' Esto es la pagina default ';
      }
      ?>
    </div>

  </div>

</section>

<?php

get_footer();
