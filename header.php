<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ilab v2.0</title>
  <link rel="stylesheet" href="submodulos/js_utils/dist/stylesheet/js_utils.css">
  <link rel="stylesheet" href="bower_components/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="css/app.css">
</head>
<body>



  <div id="main" class="main columns">


    <div id="header-escritorio" class="columns h-15-v shadow fixed top left">

      <div class="columns h-35">
        <div class="columns medium-6"></div>

        <div id="header-top-social" class="columns medium-6">

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

      </div>

      <div class="columns h-65">

        <div id="header-escritorio-logo" class="columns medium-4 large-3 imgLiquid imgLiquidNoFillLeft">

          <img src="http://fakeimg.pl/340?text=Ilab-Logo" alt="">
        </div>


        <nav class="columns medium-8 large-9">

          <?php

          include "secciones/general/menu-lista.php";

          ?>

        </nav>

      </div>



    </div> <!-- header escritorio -->
