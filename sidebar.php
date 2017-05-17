
<div class="sticky columns p-0" >

  <!-- banners slider -->
  <div id="sidebar-banner-slider" class="slick-sidebar columns p-0">

    <?php
    //
    $args = array(
      'post_type' => 'banner-sidebar',
      // 'orderby' => 'ID',
    	// 'order'   => 'ASC',
      'posts_per_page' => 6
    );
    $q = new WP_Query($args);
    // $imagen = get_the_post_thumbnail();

    if ($q->have_posts()):
      while ($q->have_posts()): $q->the_post();

      $texto = get_post_meta(get_the_ID(),"texto-banner",true);


      ?>
      <div class="columns p-0 rel">

        <div class="columns p-0 absUpL imgLiquid imgLiquidFill">

          <?php
          echo get_the_post_thumbnail();
          ?>

        </div>

        <div class="textos-slider h-35 columns z1k absDownL p-0 color-white v-center">

          <h5 class="columns p-0-2 h-a text-center text-shadow color-blanco">

            <?php

            echo $texto;
            ?>

          </h5>



        </div>


      </div>

      <?php
    endwhile;
  endif;
    ?>

  </div>


  <!--  -->

</div>
