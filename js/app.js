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

var menumovil = $("#menu-movil");//
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
  var menuicono = $('#header-movil-boton-icono');

  // reset del icono en caso de resize
  if (menuicono.hasClass('fa-close')) {

    menuicono.removeClass('fa-close').addClass('fa-bars color-cerrado');

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

  // abre menu movil
  $('#header-movil-boton-menu').on('click', function() {

    var posicion = menumovil.position();

    // debug
    console.log(posicion);

    if(posicion.left >= $(document).width()) {
      // entra menu
      alert('entra?')
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

        menuicono.removeClass('fa-bars color-abierto')
        menuicono.addClass('fa-close color-cerrado');

      },125);

      // reset gira-icono-menu
      setTimeout(function() {

        menuicono.toggleClass('gira-icono-menu');

      },500)

    } else {
      // sale menu
      menumovil.css(salemenu);
      // gira
      menuicono.toggleClass('gira-icono-menu');
      //cambia el icono
      setTimeout(function() {

        menuicono.removeClass('fa-close color-abierto')
        menuicono.addClass('fa-bars color-cerrado');

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

    desk.removeClass('current-menu')
    mobile.addClass('current-menu')

  }

}
