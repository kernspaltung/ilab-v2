<div id="aliados-slider" class="slick-aliados columns p-0">

  <?php
  $args_slider = cpt('aliados',0);

  $query_slider = new WP_Query( $args_slider );

  if ( $query_slider->have_posts() ) :
    while ( $query_slider->have_posts() ) : $query_slider->the_post();

    ?>

    <div class="columns p-0 rel">

      <div class="columns p-2 p-md-3 p-lg-4 z1 absUpL">
        <a href="<?php echo get_post_meta(get_the_ID(),"aliados-link",true);?>" class="columns p-0 h-100" target="_blank">

          <div class="columns p-0 imgLiquid imgLiquidNoFill">

            <?php
            echo get_the_post_thumbnail();
            ?>
          </div>

        </a>
      </div>
      <div class="textos-slider h-20 columns z1 absDownL p-0 color-white v-center">

        <h5 class="columns p-1 h-a text-center text-shadow color-blanco">

          <?php echo get_post_meta(get_the_ID(),"aliados-titulo-logo",true);?>

        </h5>



      </div>


    </div>

    <?php
  endwhile;
endif;
?>

</div>
