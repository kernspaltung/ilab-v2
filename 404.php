<?php

get_header(); ?>

<section id="content" class="content columns small-12 medium-8 large-9">

  <div class="columns p-1">

    <!--  -->
    <div class="bread columns p-0-2 h-a">
      <?php
      get_template_part('secciones/general/breadcrumbs')
      ?>
    </div>
    <!--  -->

    <div class="wrap">
      <div id="primary" class="content-area">
        <main id="main" class="site-main columns v-center" role="main">

          <section class="error-404 columns p-t-1 p-b-1 h-a not-found">
            <header class="page-header">
              <h1 class="page-title texto-gigante"><?php _e( '¡404!', 'ilabv20' ); ?></h1>
              <h1 class="page-title"><?php _e( 'No se encontró esa página.', 'ilabv20' ); ?></h1>
            </header><!-- .page-header -->
            <div class="page-content">
              <p class="columns p-0 m-b-2"><?php _e( 'Parece que no hay nada en esa ubicación ¿quieres probar a buscar?', 'ilabv20' ); ?></p>

              <?php get_search_form(); ?>

            </div><!-- .page-content -->
          </section><!-- .error-404 -->
        </main><!-- #main -->
      </div><!-- #primary -->
    </div><!-- .wrap -->


  </div>

</section>

<?php get_footer();
