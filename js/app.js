$(document).foundation();

u = new Utils();
// 
$(document).ready(function() {

  //
  setupResize()

  img_liquid()

})
//

function setupResize() {

  u.addWindowResizeFunction( u.verticalCenter )
  // u.addWindowResizeFunction( u.shareH )
  // u.addWindowResizeFunction( u.shareW )
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
