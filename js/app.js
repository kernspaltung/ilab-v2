$(document).foundation()

u = new Utils()
//
$(document).ready(function() {

  // defaults todas las secciones
  setupResize()
  img_liquid()
  fullpage()
  menu_scroll()
  slider_footer()
})
//

function setupResize() {

  u.addWindowResizeFunction( mueve_menu )
  u.addWindowResizeFunction( u.verticalCenter )
  u.addWindowResizeFunction( u.shareW )
  u.addWindowResizeFunction( u.shareH )
  u.addWindowResizeFunction( menu_movil )

  //Carga especifica si es INICIO: si existen los svg es true
  if ($('object').length > 0) {

    console.log('inicio')
    // svgs()
    u.addWindowResizeFunction( slider_portada )
    u.addWindowResizeFunction( slider_aliados )
    u.addWindowResizeFunction( slider_sidebar )
    u.addWindowResizeFunction( svgs )

  } else {

    console.log('page or archive or single, or whatever')
    u.addWindowResizeFunction( menu_paginas )
    u.addWindowResizeFunction( sticky_sidebar )
    u.addWindowResizeFunction( slider_sidebar )
  }
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
  $("#sidebar-sticky").stick_in_parent();
}
//

function menu_movil() {
  var menumovil = $("#menu-movil")
  // registra su posicion inicial, fuera de la pantalla
  var anchomenumovil = menumovil.width() + 40

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

console.log('grande');
    li.removeClass('shareH h-a text-left');
    li.addClass('shareW h-100 text-center');

    setTimeout(function() {//activa anchos
      u.shareW()
    },100)

  } else {

    console.log('pequeno');
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

function fullpage() {
  // $('#fullpage').fullpage();
  $('#fullpage').fullpage({
    //Navigation
    menu: '#lista-menu',
    lockAnchors: false,
    anchors:['portada', 'quien-somos','bootcamp','incuba','startups','aliados','eventos-ac','contacto'],
    navigation: false,
    navigationPosition: 'left',
    // navigationTooltips: ['firstSlide', 'secondSlide'],
    // showActiveTooltip: false,
    // slidesNavigation: false,
    // slidesNavPosition: 'bottom',

    //Scrolling
    css3: true,
    scrollingSpeed: 900,
    autoScrolling: true,
    fitToSection: true,
    fitToSectionDelay: 500,
    scrollBar: true,
    easing: 'easeInOutCubic',
    easingcss3: 'ease',

    //Accessibility
    keyboardScrolling: true,
    animateAnchor: true,
    recordHistory: true,

    //Design
    // controlArrows: true,
    verticalCentered: false,
    paddingTop: '10vh',
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
    onLeave: function(index, nextIndex, direction){},
    afterLoad: function(anchorLink, index){},
    afterRender: function(){},
    afterResize: function(){},
    afterResponsive: function(isResponsive){},
    afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
    onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}
  });
}

function svgs() {

  new Vivus('nosotros-svg', {
    type: 'oneByOne',
    duration: 1100,
    animTimingFunction: Vivus.EASE
  })
  new Vivus('bootcamp-svg', {
    type: 'oneByOne',
    duration: 1100,
    animTimingFunction: Vivus.EASE
  })
  new Vivus('incuba-svg', {
    type: 'oneByOne',
    duration: 1100,
    animTimingFunction: Vivus.EASE
  })
  new Vivus('startups-svg', {
    type: 'oneByOne',
    duration: 1100,
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
    $('#sidebar-sticky').addClass('p-top-side')
    headTop.removeClass('altura-header-top')
    headBottom.addClass('altura-header-bottom-scroll')
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
        $('#sidebar-sticky').addClass('p-top-side')
      },10)
    } else {

      setTimeout(function() {
        head.removeClass('altura-header-scroll')
        head.addClass('altura-header')
        $('#sidebar-sticky').removeClass('p-top-side')
      },10)
      setTimeout(function() {
        headBottom.addClass('altura-header-bottom')
        headBottom.removeClass('altura-header-bottom-scroll')
      },10)
      setTimeout(function() {
        headTop.addClass('altura-header-top')
        headTop.removeClass('altura-header-top-scroll')
      },10)

    }

  })

}
