$(document).foundation();

u = new Utils();
//
$(document).ready(function() {

  //
  setupResize()
  img_liquid()
  slider_heroscreen()
  menu_movil()
  mueve_menu()

})
//

function setupResize() {

  u.addWindowResizeFunction( u.verticalCenter )
  u.addWindowResizeFunction( u.shareW )
  u.addWindowResizeFunction( u.shareH )
  //
  setTimeout(function(){

    $(window).trigger('resize')

  },100);
}
//

function img_liquid() {

  $(".imgLiquid.imgLiquidFill").imgLiquid()

  $(".imgLiquid.imgLiquidNoFill").imgLiquid({fill:false})

  $(".imgLiquid.imgLiquidNoFillLeft").imgLiquid({
    fill:false,
    horizontalAlign:"left",
  });

  $(".imgLiquid.imgLiquidNoFillRight").imgLiquid({
    fill:false,
    horizontalAlign:"right",
  });

}
//

function slider_heroscreen() {

  $('#inicio-heroscreen-slider').slick({
    autoplay: true,
    autoPlaySpeed: 5000,
    arrows: false,
    dots: false,
    // vertical: true,
    // verticalSwiping: true,
  })

}


function menu_movil() {
  // registra su posicion actual, fuera de la pantalla
  var anchomenumovil = menumovil.width()
  var posicioninicial = menumovil.css({
    'transition': '0.01s',
    '-webkit-transform': 'translateX(' + anchomenumovil + 'px)',
    '-moz-transform': 'translateX(' + anchomenumovil +'px)',
    '-ms-transform': 'translateX(' + anchomenumovil +'px)',
    '-o-transform': 'translateX(' + anchomenumovil +'px)',
    'transform': 'translateX(' + anchomenumovil +'px)'
  })
  var menuicono = $('#menu-movil-boton i');

  // reset del icono en caso de resize
  if (menuicono.hasClass('fa-close')) {

    menuicono.removeClass('fa-close').addClass('fa-bars color-secondary-1-2');

  }
  //
  var salemenu = {
    'transition': '0.25s',
    '-webkit-transform': 'translateX(' + anchomenumovil + 'px)',
    '-moz-transform': 'translateX(' + anchomenumovil +'px)',
    '-ms-transform': 'translateX(' + anchomenumovil +'px)',
    '-o-transform': 'translateX(' + anchomenumovil +'px)',
    'transform': 'translateX(' + anchomenumovil +'px)'
  }

  $('#menu-movil-boton').on('click', function() {

    var posicion = menumovil.position();

    if(posicion.left >= $(document).width()) {
      // entra menu
      menumovil.css({
        'transition': '0.25s',
        '-webkit-transform': 'translateX(0px)',
        '-moz-transform': 'translateX(0px)',
        '-ms-transform': 'translateX(0px)',
        '-o-transform': 'translateX(0px)',
        'transform': 'translateX(0px)'
      });
      //
      // gira
      menuicono.toggleClass('gira-icono-menu');

      //cambia el icono
      setTimeout(function() {

        menuicono.removeClass('fa-bars color-secondary-1-2').addClass('fa-close color-complement-2');

      },125);

      // reset gira-icono-menu
      setTimeout(function() {

        menuicono.toggleClass('gira-icono-menu');

      },500)


      // resetea la posicion si un link es presionado
      $('#level-menu ul li div a').on('click', function() {

        // retrasa cierre del menu despues del scroll
        setTimeout(function() {

          menumovil.css(salemenu);
          setTimeout(function() {

            menuicono.toggleClass('gira-icono-menu');
            menuicono.removeClass('fa-close color-complement-2').addClass('fa-bars color-secondary-1-2');

          },125);
          // reset giro
          setTimeout(function() {

            menuicono.toggleClass('gira-icono-menu');

          },500)

        },750)

      })

    } else {
      // sale menu
      menumovil.css(salemenu);
      // gira
      menuicono.toggleClass('gira-icono-menu');
      //cambia el icono
      setTimeout(function() {

        menuicono.removeClass('fa-close color-complement-2').addClass('fa-bars color-secondary-1-2');

      },125);

      //reset giro
      setTimeout(function() {

        menuicono.toggleClass('gira-icono-menu');

      },500);

    }

  });

}

function mueve_menu() {

  var mobile = $("#level-menu");
  var mobilelist = $("#level-menu ul");
  var mobileelement = $("#level-menu ul li");
  var desk = $('#level-menu-desk');
  var desklist = $('#level-menu-desk ul');
  var deskelement = $('#level-menu-desk ul li');
  var menor, mayor;

  if ($(window).width() >= 1024) {

    mayor = mobilelist.detach();
    mobilelist.removeClass('h-100-v text-left top-movil p-l-1 color-primary-4-bg');
    mobilelist.addClass('h-100 text-center');
    mobileelement.removeClass('shareH');
    mobileelement.addClass('shareW h-100');
    desk.append(mayor);
    deskelement.eq(0).removeClass('hidden');
    //
    // scroll seccion contacto
    $('#herum-contacto').addClass('scrollY');

    mobile.removeClass('current-menu')
    desk.addClass('current-menu')

  } else {

    menor = desklist.detach();
    mobilelist.removeClass('h-100 text-center color-neutral-1-3');
    mobilelist.addClass('h-100-v text-left top-movil p-l-1 color-primary-4-bg');
    deskelement.removeClass('shareW h-100');
    deskelement.addClass('shareH');
    mobile.append(menor);
    deskelement.eq(0).addClass('hidden')

    // scroll contacto
    $('#herum-contacto').removeClass('scrollY')

    desk.removeClass('current-menu')
    mobile.addClass('current-menu')

  }

}
