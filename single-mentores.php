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


      <?php

      if ( have_posts() ):
        while ( have_posts() ): the_post();


        ?>

        <div class="columns p-t-2 p-b-2 h-80 h-md-70 v-center">


          <div class="columns small-12 medium-6 large-4 p-0 h-40-v m-b-2 h-40 imgLiquid imgLiquidFill h-45-v h-md-40-v">
            <?php echo get_the_post_thumbnail(); ?>
          </div>

          <div class="columns small-12 medium-6 large-8 h-15-v m-b-2 h-md-40-v rel font-m font-lg-l">

            <div class="columns p-0 h-a p-l-1 absDownL">

              <div class="columns p-0 h-a font-light">
                <label for="">Nombre: </label>
                <?php
                  echo get_post_meta(get_the_ID(),"mentor-nombre",true);
                ?>
              </div>
              <div class="columns p-0 h-a font-light">
                <label for="">Tema: </label>
                <?php
                  echo get_post_meta(get_the_ID(),"mentor-tema",true);
                ?>
              </div>

            </div>

          </div>
          <hr>
          <div class="columns p-0 p-t-1 h-a font-s font-sm-m font-md-s">
            <label for="">Expertise: </label>
            <?php
              echo get_post_meta(get_the_ID(),"mentor-expertise",true);
            ?>
          </div>
          <div class="columns p-0 p-t-1 h-a font-s font-sm-m font-md-s">
            <label for="">Biografía: </label>
            <?php
              echo get_post_meta(get_the_ID(),"mentor-bio",true);
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
