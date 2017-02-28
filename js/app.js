$(document).foundation();
$(document).ready(function() {

//
setup()


})
//
function setup() {
  var arr = ['s','e','t','u','p']
  var i = 0
  setInterval(
    function() {
      if (i > (arr.length - 1 )){
        i = 0
      } else {
      console.log( i + arr[i] )
      i = i + 1
    }
    },
    500)

}
