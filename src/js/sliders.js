// ==== MOBILE MENU ==== //

;(function($){
  $(function(){
    $('.js-feature-slider__slides').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      arrows: false,
      fade: true,
      asNavFor: '.js-feature-slider__nav'
    });
    $('.js-feature-slider__nav').slick({
      slidesToShow: 3,
      asNavFor: '.js-feature-slider__slides',
      rows: 1,
      slidesPerRow: 1,
      dots: false,
      centerMode: false,
      focusOnSelect: true
    });
  });
}(jQuery));
