$(document).ready( function () {

  // Sliders
  
  //// Slider Top
  $('.js-items-slider-container .slider-for').slick({
     slidesToShow: 1,
     slidesToScroll: 1,
     arrows: false,
     autoplay:true,
     autoplaySpeed:1500,
     fade: true,
     asNavFor: '.js-items-slider-container .slider-nav'
     
  });
  $('.js-items-slider-container .slider-nav').slick({
     slidesToShow: 4,
     slidesToScroll: 1,
     asNavFor: '.js-items-slider-container .slider-for',
     dots: false,
     centerMode: false,
     focusOnSelect: true,
     arrows: false,
     accessibility: true,
     onAfterChange: function (slide, index) {
       console.log("slider-nav change");
       console.log(this.$slides.get(index));
       $('.current-slide').removeClass('current-slide');
       $(this.$slides.get(index)).addClass('current-slide');
     },
     onInit: function (slick) {
       $(slick.$slides.get(0)).addClass('current-slide');
     }
  });
  });