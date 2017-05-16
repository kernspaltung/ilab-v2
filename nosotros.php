<?php
/*
Template Name: About
*/
get_header();
?>

<section id="content" class="content columns small-12 medium-8 large-9 p-0 h-100-v">

  <div class="columns p-1">

    <!--  -->
    <div class="bread columns p-0-2 h-a">
      <?php echo do_shortcode('[breadcrumb]'); ?>
    </div>
    <!--  -->

    <?php
    // $args =;
    // $query = new WP_Query($args);
    if (have_posts()):
      while (have_posts()): the_post();
      ?>

      <div class="columns small-12 medium-8 v-center">

        <div class="columns h-a p-1 font-s font-md-s">

          <?php echo get_the_content(); ?>

        </div>

      </div>

      <?php
    endwhile;
  endif;
  ?>

  <div class="columns small-12 medium-4 h-85 v-center">

    <div class="menu-pagina columns h-a ">

      <?php
      wp_nav_menu( array( 'theme_location' => 'menu-bootcamp', 'menu_id' => 'menu-bootcamp', 'container' => '', 'menu_class' => 'menu-page columns text-justify p-1' ));
      ?>

    </div>

  </div>



</div>

</section>

<?php
get_footer();
?>
