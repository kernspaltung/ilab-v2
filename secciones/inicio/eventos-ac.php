<section id="inicio-eventos-ac" class="section columns p-top fp-auto-height">

  <!--  -->
  <?php
  $args = page_id(22);

  $query = new WP_Query( $args );

  if ( $query->have_posts() ) :
    while ( $query->have_posts() ) : $query->the_post();
    ?>

    <div class="columns h-35-v small-6">

    <a href="<?php echo get_permalink();?>" class="columns h-100">

        <div class="eventos-ac columns p-0 imgLiquid imgLiquidNoFill">
          <img src="<?php echo get_stylesheet_directory_uri();?>/img/eventos-color.png" alt="Eventos" />
        </div>
        <!-- <h1 class="columns p-0 text-center h-a texto-gigante">E</h1> -->

      </a>

      </div>
    <?php
  endwhile;
endif;
?>


<!--  -->
<?php
$args = page_id(24);

$query = new WP_Query( $args );

if ( $query->have_posts() ) :
  while ( $query->have_posts() ) : $query->the_post();
  ?>

    <div class="columns h-35-v small-6">
      <a href="<?php echo get_permalink();?>" class="columns h-100">

      <!-- <h1 class="columns p-0 text-center h-a texto-gigante">AC</h1> -->
      <div class="eventos-ac columns p-0 imgLiquid imgLiquidNoFill">
        <img src="<?php echo get_stylesheet_directory_uri();?>/img/ac-color.png" alt="AC" />
      </div>

    </a>
    </div>
  <?php
endwhile;
endif;
?>


</section>
