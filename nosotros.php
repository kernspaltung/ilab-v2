<?php
/*
Template Name: About
*/
get_header();
?>

<section id="content" class="content columns small-12 large-9 p-0 h-a h-md-100-v">

  <div class="columns p-1">

    <!--  -->
    <div class="bread columns p-0-2 h-10">
      <?php echo do_shortcode('[breadcrumb]'); ?>
    </div>
    <!--  -->

    <?php
    // $args =;
    // $query = new WP_Query($args);
    if (have_posts()):
      while (have_posts()): the_post();
      ?>

      <div class="columns small-12 medium-8 h-80 h-md-70 v-center">


              <h3 class="columns text-left font-light">
                <?php
                echo get_the_title();
                ?>
              </h3>

        <div class="columns h-a p-1 font-s font-md-s text-justify">

          <?php echo get_the_content(); ?>

        </div>

      </div>

      <?php
    endwhile;
  endif;
  ?>

  <!-- inicia menu de paginas -->
  <div class="columns small-12 medium-4 h-80 h-md-70 v-center">

    <div class="menu-pagina p-0 columns h-a text-center">

      <?php
      // wp_nav_menu( array( 'theme_location' => 'menu-bootcamp', 'menu_id' => 'menu-bootcamp', 'container' => '', 'menu_class' => 'menu-page columns text-justify p-1' ));
      menu_paginas('menu-about', 'menu-about' )
      ?>

    </div>

  </div>
  <!-- fin menu de paginas -->


</div>

</section>

<?php
get_footer();
?>