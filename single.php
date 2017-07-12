<?php

get_header();


?>

<section id="content" class="content columns small-12 medium-8 large-9 h-a">

  <div class="columns p-t-1 p-0 h-a">


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

      <div class="columns p-t-2 p-b-2 h-a">


        <div class="columns p-0 h-45-v m-b-2 imgLiquid imgLiquidFill h-45-v h-md-40-v">
          <?php echo get_the_post_thumbnail(); ?>
        </div>

        <h3 class="columns p-0">

          <?php echo get_the_title(); ?>

        </h3>

        <hr>
        <label class="columns text-right"><?php echo get_the_date(); ?></label>

        <div class="columns p-0 p-t-1 h-a font-s font-sm-m">

          <?php

          echo get_the_content();

          ?>

        </div>

      </div>

      <!--  -->
      <div class="columns h-a p-t-1 p-b-1">

        <div class="columns h-a p-b-1 p-0">
          <?php echo "Comparte: "?>
        </div>
        <?php echo do_shortcode('[addtoany buttons="google_plus,twitter,facebook,email"]') ?>
      </div>

      <div class="columns h-a p-t-1 p-b-1">
        <?php echo tags(); ?>
      </div>
      <!--  -->
      <?php

    endwhile;
  endif;

  ?>

</div>

</section>

<?php
get_footer();
