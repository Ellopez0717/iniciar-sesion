// funcion para cambiar el navbar
$(document).ready(function(){
  var checkScrollBar = function(){
    $('.bg-main').css({
          backgroundColor: $(this)
          .scrollTop() > 1 ?
          'rgb(52, 73, 94, .5)' : 'bg-centro'
    })
  }
  $(window).on('load resize scroll', checkScrollBar)
});
