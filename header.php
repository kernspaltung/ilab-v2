<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ilab v2.0</title>
  <link rel="stylesheet" href="submodulos/js_utils/dist/stylesheet/js_utils.css">
  <link rel="stylesheet" href="bower_components/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="bower_components/slick-carousel/slick/slick-theme.css">
  <link rel="stylesheet" href="css/app.css">
</head>

<body>

    <header id="header" class="columns h-15-v shadow fixed top left z1k1">

      <div id="header-top" class="columns p-0 h-35">

        <!-- Este div vacio desaparece en movil para que no mueva las redes -->
        <div class="columns medium-6 hide-for-small-only"></div>

        <div id="header-top-social" class="columns small-12 medium-6">

          <?php

          $redes = array('facebook','twitter','linkedin-square','google-plus','instagram','youtube-play');

          for ($i=0; $i < 6 ; $i++):

          ?>

          <div class="columns small-2 v-center">

            <div class="columns p-0 h-a text-center">

              <a class="columns p-0 h-100" href="http://www.facebook.com/" target="_blank">

                <i class="fa fa-<?php echo $redes[$i];?> text-shadow"></i>

              </a>

            </div>

          </div>



        <?php endfor; ?>

      </div>

    </div><!-- header top -->




    <div id="header-bottom" class="columns p-0 h-65">

      <div id="header-escritorio-logo" class="columns small-4 large-2 imgLiquid imgLiquidNoFillLeft">

        <img src="http://fakeimg.pl/340?text=Ilab-Logo" alt="">
      </div>


      <!-- seccion header escritorio-->
      <nav id="menu-escritorio" class="columns medium-8 large-10 show-for-large">

        <?php

        include "secciones/general/menu-lista.php";

        ?>

      </nav>
      <!-- fin seccion header escritorio-->


      <!-- seccion header movil + medium-->
      <div class="columns small-8 p-0 hide-for-large">

        <div class="columns small-9 medium-10 p-0"></div>

        <div class="columns small-3 medium-2">

          <a href="#" class="columns p-0 h-100 v-center">

            <div class="columns p-0 h-a text-center">

              <i class="fa fa-bars font-l"></i>

            </div>

          </a>

        </div>

      </div>

      <nav id="menu-mobil" class="columns small-7 medium-4 h-100-v posicion-menu hide-for-large hidden">
        <!-- el menu se pasa aqui en movil -->
      </nav>
      <!-- fin seccion header movil -->


    </div>



  </header> <!-- header escritorio -->


  <div id="main" class="main columns">
