<?php
get_header();


?>

<section id="content" class="content columns small-12 medium-8 large-9">

  <div class="columns p-1">

    <!--  mapa sitio -->
    <div class="bread columns p-0-2 h-a">
      <?php echo do_shortcode('[breadcrumb]'); ?>
    </div>
    <!--  -->

    <div class="columns h-a p-t-1">
      <?php
      for ($i=0; $i < 500 ; $i++) {
        echo ' Esto es  el contenedor del archivo';
      }
      ?>
    </div>

  </div>

</section>

<?php
get_footer();
