<?php
get_header();

?>

<section id="content" class="content columns small-12 large-9">

  <div class="columns p-1">

    <!--  -->
    <div class="bread columns p-0-2 h-a">
      <?php echo do_shortcode('[breadcrumb]'); ?>
    </div>
    <!--  -->


    <div id="encabezado-categoria" class="columns small-12 p-1 h-a">

      <h3 class="columns text-left font-light p-0">
        <?php echo single_cat_title(); ?>
      </h3>

      <div class="columns text-center p-0 font-xs font-md-s font-lg-m">
        <?php
        echo the_archive_description();
        ?>
      </div>

    </div>

    <div class="columns p-l-0 p-r-0 p-t-2 p-b-2 h-a">

      <?php

      if ( have_posts() ):
        while ( have_posts() ): the_post();


        ?>

        <div class="columns p-t-2 p-b-2 small-12 medium-6 h-a end">

          <a class="columns p-0 h-a" href="<?php echo get_the_permalink();?>">

          <div class="columns p-0 imgLiquid imgLiquidFill h-45-v h-md-40-v">
            <?php echo get_the_post_thumbnail(); ?>
          </div>

          <div class="columns p-t-1 p-l-0 p-r-0 h-50">

            <h5 class="columns p-0 h-a font-light">
              <?php
              echo get_the_title();
              ?>
            </h5>
            <div class="columns p-0 h-a font-xs font-light">
              <?php
              echo get_the_date();
              ?>
            </div>
            <div class="columns p-0 p-t-1 h-a font-s font-sm-m font-md-s">
              <?php
              echo excerpt(28,'... Ver mas');
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
