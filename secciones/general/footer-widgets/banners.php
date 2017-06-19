
<div class="columns p-0" >

  <!-- banners slider -->
  <div id="footer-banner-slider" class="slick-footer columns p-0">

    <?php
    //
    $args = array(
      'post_type' => 'banner-footer',
      // 'orderby' => 'ID',
      // 'order'   => 'ASC',
      'posts_per_page' => 4
    );
    $q = new WP_Query($args);
    // $imagen = get_the_post_thumbnail();

    if ($q->have_posts()):
      while ($q->have_posts()): $q->the_post();


      ?>
      <div class="columns p-0 rel">
        <a href="<?php echo get_post_meta(get_the_ID(),"banner-link",true);?>" class="columns p-0 h-100 absUpL" target="_blank">

          <div class="columns p-0 imgLiquid imgLiquidFill">

            <?php
            echo get_the_post_thumbnail();
            ?>

          </div>

          <div class="textos-slider h-35 columns z1k absDownL p-0 color-white v-center">

            <h5 class="columns p-0-2 h-a text-center text-shadow color-blanco">

              <?php

              echo get_post_meta(get_the_ID(),"banner-texto",true);//nombre field metabox
              ?>

            </h5>



          </div>

        </a>

      </div>

      <?php
    endwhile;
  endif;
  ?>

</div>


<!--  -->

</div>
