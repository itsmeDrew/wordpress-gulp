//////////////////////
// MOBILE MENU
//////////////////////

;(function($){
  $(function(){

    $('.js-hamburger').click(function() {
      $(this).toggleClass('active');
      $('body').toggleClass('menu-active');
    });
    
  });
}(jQuery));
