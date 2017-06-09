<?php

get_header();


?>

<section id="content" class="content columns small-12 medium-8 large-9 h-a">

  <div class="columns p-1 h-a">


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

        <div class="columns p-0 p-t-1 h-a font-s font-sm-m">

          <?php

          echo get_the_content();

          ?>

        </div>

      </div>

      <?php

    endwhile;
  endif;

  ?>

</div>

</section>

<?php
get_footer();
