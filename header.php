<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon.png" type="image/png" />

  <title>
    <?php wp_title('&raquo;',true,'right'); ?>
    <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>
  </title>
  <!--  -->

<!-- codigo analytics -->

<!--  -->

<?php wp_head(); ?>

</head>

<body>

  <header id="header" class="altura-header columns shadow fixed top left z1k1 ovH color-blanco-bg">

    <div id="header-top" class="columns p-0 h-35">

      <!-- Este div vacio desaparece en movil para que no mueva las redes -->
      <div class="columns medium-6 large-8 hide-for-small-only"></div>

      <div class="columns p-0 medium-6 large-4">


        <div id="header-top-social" class="columns p-0 small-9">

          <?php echo get_template_part('secciones/general/social'); ?>


        </div><!-- fin top social -->

        <!-- boton login  -->
        <div class="columns small-3 p-0">
          <a href="#" class="columns p-0 h-100">
            <div class="columns p-0 v-center">

              <div class="button columns h-a p-0-1 p-0 text-center color-blanco font-xs font-sm-s font-lg-m">
                Login
              </div>

            </div>
          </a>
        </div>



      </div>

    </div><!-- header top -->




    <div id="header-bottom" class="columns p-0 h-65">

      <div id="header-escritorio-logo" class="columns small-4 large-2 p-0-1">

        <a class="columns p-0 h-100" href="index.php">

          <div id="header-escritorio-logo" class="columns p-0 imgLiquid imgLiquidNoFillLeft">

            <img src="<?php echo get_stylesheet_directory_uri();?>/img/logo-ilab-negro.png" alt="">

          </div>

        </a>

      </div>


      <!-- seccion header escritorio-->
      <nav id="menu-escritorio" class="columns medium-8 large-10 p-0 show-for-large">

        <?php

        // get_template_part("secciones/general/menu-lista");
        wp_nav_menu( array( 'theme_location' => 'menu-paginas', 'menu_id' => 'lista-menu', 'container' => '' ));

        ?>

      </nav>
      <!-- fin seccion header escritorio-->


      <!-- seccion header movil + medium-->
      <div id="header-movil" class="columns small-8 p-0 hide-for-large">

        <div class="columns small-9 medium-10 p-0"></div>

        <div class="columns small-3 medium-2">

          <div id="header-movil-boton-menu" class="columns p-0 h-100 pointer color-primary-0 v-center">

            <div class="columns p-0 h-a text-center">

              <i id="header-movil-boton-icono" class="fa fa-bars font-xl"></i>

            </div>

          </div>

        </div>

      </div>


      <!-- fin seccion header movil -->


    </div>



  </header> <!-- header escritorio -->
  <nav id="menu-movil" class="columns small-7 medium-4 h-100-v posicion-menu-fuera p-top fixed top right z1k shadow-up color-blanco-bg hide-for-large">
    <!-- el menu se pasa aqui en movil -->
    <?php

    // include_once "secciones/general/menu-movil.php";
    get_template_part("secciones/general/menu-movil");

    ?>
  </nav>

  <div id="main" class="main columns p-top">
