$(document).foundation();

u = new Utils();
//
$(document).ready(function() {

  //
  setupResize()

  img_liquid()

  slider_heroscreen()

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
    vertical: true,
    verticalSwiping: true,
  })

}
