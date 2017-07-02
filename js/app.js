//scripts Ilab.v2
u = new Utils()
//
$(document).ready(function() {

  $(document).foundation()
  // defaults todas las secciones
  setup()
  img_liquid()
  fullpage()
  menu_scroll()
  slider_footer()
  pasarela_roockies()
  header_login()

  //
  resize()
  //
})
//

function setup() {

  // u.addWindowResizeFunction( mueve_menu )
  // u.addWindowResizeFunction( u.verticalCenter )
  // u.addWindowResizeFunction( u.shareW )
  // u.addWindowResizeFunction( u.shareH )
  // u.addWindowResizeFunction( u.squareH )
  // u.addWindowResizeFunction( menu_movil )
  mueve_menu()
  color_menu_footer()
  menu_movil()


  //
  //Carga especifica; si es INICIO o no por valor -> (var inicio) en headers
  if (inicio == 1) {

    slider_portada()
    slider_aliados()
    svgs()
    paralax()

  } else if (inicio == 0) {

    mapa_sitio()
    menu_paginas()
    colores_menu()
    color_menu_footer()
    slider_sidebar()
    proyectos_roockies()
    setTimeout(function(){
      sticky_sidebar()
    },100)

  }
  //ultimos en ejecutar
  u.shareW()
  u.shareH()
  u.verticalCenter()
  // u.squareH()
  // setTimeout(function(){
  //
  //   $(window).trigger('resize')
  //
  // },100);

}

function resize() {
  $(window).resize(function() {

    mueve_menu()
    u.shareW()
    u.shareH()
    // u.squareH()
    menu_movil()
    u.verticalCenter()


    //Carga especifica; si es INICIO: var inicio = 1
    // Esta declarada en el header
    if (inicio == 1) {

      setTimeout(function() {

        console.log('inicio')
        // slider_portada()
        // slider_aliados()
        svgs()
        // paralax()
      },100)

    } else {

      sticky_sidebar()
      setTimeout(function() {
        menu_paginas()
        // colores_menu()
        // proyectos_roockies()
      },100)

    }

  })//resize func

}
//
function img_liquid() {


  $(".imgLiquid.imgLiquidFill").imgLiquid()

  $(".imgLiquid.imgLiquidNoFill").imgLiquid({fill:false})

  $(".imgLiquid.imgLiquidNoFillLeft").imgLiquid({
    fill:false,
    horizontalAlign:"left",
  });
  $(".imgLiquid.imgLiquidFillLeft").imgLiquid({
    fill:true,
    horizontalAlign:"left",
  });

  $(".imgLiquid.imgLiquidNoFillRight").imgLiquid({
    fill:false,
    horizontalAlign:"right",
  });
  $(".imgLiquid.imgLiquidFillRight").imgLiquid({
    fill:true,
    horizontalAlign:"right",
  });
  $(".imgLiquid.imgLiquidPasarela").imgLiquid({
    fill:true,
    horizontalAlign:"left",
    fadeInTime: 1000
  });

}
//
// sliders
function slider_portada() {

  $('.slick-portada').slick({
    autoplay: true,
    autoPlaySpeed: 5000,
    arrows: false,
    dots: true,
    // vertical: true,
    // verticalSwiping: true,
  })
}

function slider_sidebar() {
  $('.slick-sidebar').slick({
    autoplay: true,
    autoPlaySpeed: 7000,
    arrows: false,
    dots: true,
    lazyLoad: 'ondemand',
    // vertical: true,
    // verticalSwiping: true
  })
}
function slider_footer() {
  $('.slick-footer').slick({
    autoplay: true,
    autoPlaySpeed: 5000,
    arrows: false,
    dots: true,
    lazyLoad: 'ondemand',
    // vertical: true,
    // verticalSwiping: true
  })
}

function slider_aliados() {

  $('.slick-aliados').slick({
    autoplay: true,
    autoPlaySpeed: 5000,
    arrows: false,
    dots: true,
    slidesToShow: 4,
    slidesToScroll: 4,
    lazyLoad: 'ondemand',
    responsive: [
      {
        breakpoint: 1024,
        autoPlaySpeed: 3500,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3
        }
      },
      {
        breakpoint: 640,
        autoPlaySpeed: 2500,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        autoPlaySpeed: 2000,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  })

}
// terminan sliders

//
function sticky_sidebar() {

  $('#sidebar-sticky').stick_in_parent({
    // recalc_every:1
  })

  // fix bug con el sticky desbordandose en ciertas resoluciones
  //restandole 2px al contenedor
  setTimeout(function() {
    var fixSticky = $('#sidebar-sticky').parent()
    var ancho = fixSticky.width()
    var fix = ancho - 1
    fixSticky.css('width',fix)
  },50)
}
//

function menu_movil() {
  var menumovil = $("#menu-movil")
  // registra su posicion inicial, fuera de la pantalla
  var anchomenumovil = menumovil.width() + 40

  var posicioninicial = menumovil.css({
    'transition': '0.01s',
    '-webkit-transform': 'translateX(' + anchomenumovil + 'px)',
    '-webkit-transform': '-webkit-translateX(' + anchomenumovil + 'px)',
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
    '-webkit-transform': '-webkit-translateX(' + anchomenumovil + 'px)',
    '-moz-transform': 'translateX(' + anchomenumovil +'px)',
    '-ms-transform': 'translateX(' + anchomenumovil +'px)',
    '-o-transform': 'translateX(' + anchomenumovil +'px)',
    'transform': 'translateX(' + anchomenumovil +'px)'
  }

  // abre menu movil
  $('#header-movil-boton-menu').on('click', function() {


    var posicion = menumovil.position();

    if(posicion.left >= $(document).width()) {
      // entra menu
      menumovil.css({
        'transition': '0.25s',
        '-webkit-transform': 'translateX(0px)',
        '-webkit-transform': '-webkit-translateX(0px)',
        '-moz-transform': 'translateX(0px)',
        '-ms-transform': 'translateX(0px)',
        '-o-transform': 'translateX(0px)',
        'transform': 'translateX(0px)'
      });
      //
      // gira
      menuicono.toggleClass('gira-icono-menu');
      menuicono.removeClass('color-cerrado')
      menuicono.addClass('color-abierto');

      //cambia el icono
      setTimeout(function() {
        menuicono.removeClass('fa-bars')
        menuicono.addClass('fa-close');

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
      menuicono.removeClass('color-abierto')
      menuicono.addClass('color-cerrado');
      //cambia el icono
      setTimeout(function() {

        menuicono.removeClass('fa-close ')
        menuicono.addClass('fa-bars');

      },125);

      //reset giro
      setTimeout(function() {

        menuicono.toggleClass('gira-icono-menu');

      },500);

    }

  });

}

function mueve_menu() {

  var mobile = $("#menu-movil")
  var mobilelist = $("#menu-movil ul")
  var mobileelement = $("#menu-movil ul li")
  var desk = $('#menu-escritorio')
  var desklist = $('#menu-escritorio ul')
  var deskelement = $('#menu-escritorio ul li')
  var menor, mayor;

  if ($(window).width() >= 1024) {

    mobileelement.removeClass('shareH text-left');
    mobileelement.addClass('shareW h-100 text-center');
    mayor = mobilelist.detach();
    mobilelist.removeClass('h-100-v text-left p-l-1 color-primary-4-bg');
    mobilelist.addClass('h-100 text-center');
    desk.append(mayor);

  } else {

    deskelement.removeClass('shareW h-100 text-center');
    deskelement.addClass('shareH text-left');
    menor = desklist.detach();
    mobilelist.removeClass('h-100 text-center color-neutral-1-3');
    mobilelist.addClass('h-100-v text-left p-l-1 color-primary-4-bg');
    mobile.append(menor);
  }

}

function menu_paginas() {
  var menupaginas = $('#lista-menu.menu')
  var li = $('#lista-menu.menu .menu-item')
  var link = $('#lista-menu.menu .menu-item a')

  li.addClass('v-center')

  if ($(window).width() >= 1024) {

    li.removeClass('shareH h-a text-left');
    li.addClass('shareW h-100 text-center');

    setTimeout(function() {//activa anchos
      u.shareW()
    },100)

  } else {

    li.removeClass('shareW h-100 text-center');
    li.addClass('shareH h-a text-left');

    setTimeout(function() {//activa alturas
      u.shareH()
    },100)

  }

  setTimeout(function() {//activa alturas
    u.verticalCenter()
  },200)
}

function colores_menu() {
  // colorea los botones de paginas con el patone ilab
  var botonpagina = $('.menu-page li ')
  var colores = ['color-azul-bg','color-naranja-bg','color-verde-bg','color-amarillo-bg','color-azul-bg','color-naranja-bg','color-verde-bg','color-amarillo-bg']
  botonpagina.each(function(i){
    // console.log(i);
    $(this).addClass(colores[i])

  })

  // tamano botones
  if ($(window).width() >= 1024) {

    $('.menu-pagina ul li').removeClass('h-15-v')
    $('.menu-pagina ul li').addClass('shareW')

  } else {

    $('.menu-pagina ul li').removeClass('shareW')
    $('.menu-pagina ul li').addClass('h-15-v')

  }

}
function color_menu_footer() {
  // colorea los botones de paginas con el patone ilab
  var botonpagina = $('.menu-footer li ')
  var colores = ['color-azul-bg','color-naranja-bg','color-verde-bg', 'color-amarillo-bg']
  var color = colores[Math.floor(Math.random()*colores.length)]
  botonpagina.each(function(){

    $(this).addClass(color)

  })
  // tamano botones
  if ($(window).width() >= 1024) {

    $('.menu-pagina ul li').removeClass('h-15-v')
    $('.menu-pagina ul li').addClass('shareW')

  } else {

    $('.menu-pagina ul li').removeClass('shareW')
    $('.menu-pagina ul li').addClass('h-15-v')


  }

}

function fullpage() {
  // $('#fullpage').fullpage();
  $('#fullpage').fullpage({
    //Navigation
    menu: '#lista-menu',
    lockAnchors: false,
    anchors:['portada', 'quien-somos','bootcamp','incuba',/*'startups',*/'aliados','eventos-ac','contacto'],
    navigation: false,
    navigationPosition: 'left',
    // navigationTooltips: ['firstSlide', 'secondSlide'],
    // showActiveTooltip: false,
    // slidesNavigation: false,
    // slidesNavPosition: 'bottom',

    //Scrolling
    css3: true,
    scrollingSpeed: 1000,
    autoScrolling: false,
    fitToSection: true,
    fitToSectionDelay: 750,
    scrollBar: true,
    easing: 'easeInOutCubic',//'easeInOutCubic',
    easingcss3: 'ease',

    //Accessibility
    keyboardScrolling: true,
    animateAnchor: true,
    recordHistory: true,

    //Design
    // controlArrows: true,
    verticalCentered: false,
    paddingTop: '0vh',//10vh
    paddingBottom: '0vh',
    fixedElements: false,
    responsiveWidth: 0,
    responsiveHeight: 0,
    responsiveSlides: false,

    //Custom selectors
    sectionSelector: '.section',
    slideSelector: '.slide',

    lazyLoading: false,

    //events
    // onLeave: function(index, nextIndex, direction){},
    // afterLoad: function(anchorLink, index){},
    // afterRender: function(){},
    // afterResize: function(){},
    // afterResponsive: function(isResponsive){},
    // afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
    // onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}

  });
}

function svgs() {

  new Vivus('nosotros-svg', {
    type: 'oneByOne',
    duration: 400,
    animTimingFunction: Vivus.EASE
  })
  new Vivus('bootcamp-svg', {
    type: 'oneByOne',
    duration: 400,
    animTimingFunction: Vivus.EASE
  })
  new Vivus('incuba-svg', {
    type: 'oneByOne',
    duration: 400,
    animTimingFunction: Vivus.EASE
  })

}


function menu_scroll() {

  var head = $("#header")
  var headTop = $("#header-top")
  var headBottom = $("#header-bottom")

  // default
  if ($(document).scrollTop() > 150) {
    head.removeClass('altura-header')
    head.addClass('altura-header-scroll')
    headTop.removeClass('altura-header-top')
    headBottom.addClass('altura-header-bottom-scroll')
    //evita el padding top del sidebar si es movil
    if ($(window).width() >= 1024) {
      $('#sidebar-sticky').addClass('p-top-side')
    } else {
      $('#sidebar-sticky').removeClass('p-top-side')//proteccion
    }
    //
  }
  // al scrolear
  $(window).on('scroll', function() {

    if ($(document).scrollTop() > 250) {

      setTimeout(function() {
        headBottom.removeClass('altura-header-bottom')
        headBottom.addClass('altura-header-bottom-scroll')
      },20)
      setTimeout(function() {
        headTop.removeClass('altura-header-top')
        headTop.addClass('altura-header-top-scroll')
      },10)
      setTimeout(function() {
        head.removeClass('altura-header')
        head.addClass('altura-header-scroll')
        //
        if ($(window).width() >= 1024) {
          $('#sidebar-sticky').addClass('p-top-side')
        } else {
          $('#sidebar-sticky').removeClass('p-top-side')//proteccion
        }
        //
      },10)
    } else {

      setTimeout(function() {
        head.removeClass('altura-header-scroll')
        head.addClass('altura-header')
      },10)
      setTimeout(function() {
        headBottom.addClass('altura-header-bottom')
        headBottom.removeClass('altura-header-bottom-scroll')
      },10)
      setTimeout(function() {
        headTop.addClass('altura-header-top')
        headTop.removeClass('altura-header-top-scroll')
        //
        if ($(window).width() >= 1024) {
          $('#sidebar-sticky').removeClass('p-top-side')
        } else {
          $('#sidebar-sticky').removeClass('p-top-side')
        }
        //
      },10)

    }

  })

}

// roockies
function pasarela_roockies() {

  // para ejecutarse comprueba que sea la pagina de roockies
  // para ejecutar el codigo para la imagen
  if ($('.cont-pasarela').is(":visible")) {

    var x = 0
    var pasarela = $('.pasarela')

    setInterval(function(){
      x-=1
      // console.log(x)
      pasarela.css('background-position', x + 'px 0')

    }, 60)

    // aplica loop de imagen haciendo override de imgLiquid
    setTimeout(function() {
      $('#pasarela.imgLiquid.imgLiquidPasarela').css('background-repeat','repeat-x')
    },10000)

  }

}

// complemento del paralax con css
function paralax() {
  var parallax = document.querySelectorAll(".fondo"),
  speed = 0.19;

  window.onscroll = function(){
    [].slice.call(parallax).forEach(function(el,i){

      var windowYOffset = window.pageYOffset/7,
      elBackgrounPos = "50% " + (windowYOffset * speed) + "px";

      el.style.backgroundPosition = elBackgrounPos;

    });
  };
}

function header_login() {
  var fondo = $("#header-login")
  var altura = fondo.height()
  var negativo = altura * -1.25

  var posicioninicial = {
    'transition': '0.35s',
    '-webkit-transform': 'translateY(0px)',
    '-webkit-transform': '-webkit-translateY(0px)',
    '-moz-transform': 'translateY(0px)',
    '-ms-transform': 'translateY(0px)',
    '-o-transform': 'translateY(0px)',
    'transform': 'translateY(0px)'
  }
  var posicioncerrada = {
    'transition': '0.35s',
    '-webkit-transform': 'translateY(' + negativo + 'px)',
    '-webkit-transform': '-webkit-translateY(' + negativo + 'px)',
    '-moz-transform': 'translateY(' + negativo +'px)',
    '-ms-transform': 'translateY(' + negativo +'px)',
    '-o-transform': 'translateY(' + negativo +'px)',
    'transform': 'translateY(' + negativo +'px)'
  }

  // abre menu movil
  $('#boton-login .button').on('click', function() {

    var posicion = fondo.position()

    if( (posicion.top - 1 ) <= negativo) {
      // console.log("menor o igual a negativo" + " " + posicion.top + " " + negativo );
      // entra formulario
      fondo.css(posicioninicial)

      $(this).html('X')
    } else {
      // sale formulario
      // console.log("mayor o igual a negativo" + " " + posicion.top + " " + negativo);
      fondo.css(posicioncerrada)

      $(this).html('Ingresa')

    }

  });

}


function proyectos_roockies() {

  // default
  // $("#proyecto-header").addClass("p-l-1 absDownL");

  if($(window).width() >= 1024) {

    $("#proyecto-header").addClass("p-l-1 absDownL");

  } else {
    //
    $("#proyecto-header").removeClass("p-l-1 absDownL");

  }


}
//breadcrumbs hack
function mapa_sitio() {
  $(".trail-browse").html("Mapa: ")
}
