<section id="inicio-eventos-ac" class="section columns p-top fp-auto-height">

  <!--  -->
  <?php
  $args = page_id(22);

  $query = new WP_Query( $args );

  if ( $query->have_posts() ) :
    while ( $query->have_posts() ) : $query->the_post();
    ?>

    <a href="<?php echo get_permalink();?>" class="columns h-35-v small-6 color-primary-1-bg-hover v-center">
      <div class="columns v-center">

        <h1 class="columns p-0 text-center h-a texto-gigante">E</h1>

      </div>
    </a>
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

<a href="<?php echo get_permalink();?>" class="columns h-35-v small-6 color-primary-2-bg-hover v-center">
  <div class="columns v-center">

    <h1 class="columns p-0 text-center h-a texto-gigante">AC</h1>

  </div>
</a>
<?php
endwhile;
endif;
 ?>


</section>
