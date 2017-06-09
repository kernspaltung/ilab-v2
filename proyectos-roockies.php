<?php
/*
Template Name: Proyectos Roockies
*/
get_header();

?>

<section id="content" class="content columns small-12 large-9">

  <div class="columns p-1">

    <!--  -->
    <div class="bread columns p-0-2 h-10">
      <?php
      get_template_part('secciones/general/breadcrumbs')
      ?>
    </div>
    <!--  -->

    <?php

    if ( have_posts() ):
      while ( have_posts() ): the_post();


      ?>

      <h3 class="columns text-left">
        <?php echo get_the_title(); ?>
      </h3>

      <div class="columns font-s font-lg-m">
        <?php echo get_the_content(); ?>
      </div>

      <?php
    endwhile;
  endif;
  ?>



  <div class="columns p-l-0 p-r-0 p-t-2 p-b-2 h-a">

    <?php

    $args = cpt('proyectos-roockies');
    $q = new WP_Query( $args );

    if ( $q->have_posts()):
      while ( $q->have_posts()): $q->the_post();
      ?>

      <div class="columns p-t-1 p-b-1 small-12 medium-6 h-a end">

        <a class="columns p-0 h-a card p-0-3" href="<?php echo get_the_permalink();?>">

          <div class="columns p-0 imgLiquid imgLiquidFill h-45-v h-md-40-v">
            <?php echo get_the_post_thumbnail(); ?>
          </div>

          <div class="columns p-t-1 p-l-0 p-r-0 h-50">

            <h5 class="columns p-0 h-a font-light">
              <?php
              echo get_post_meta(get_the_ID(),"nombre-proyecto",true);
              ?>
            </h5>
            <div class="columns p-0 p-t-1 h-a font-s font-sm-m font-md-s">
              <?php
              echo "Click para conocer el proyecto ...";
              ?>
            </div>

          </div>



        </a>

      </div>


      <?php

    endwhile;
  endif;
  ?>

</div>


</div>

</section>

<?php
get_footer();
