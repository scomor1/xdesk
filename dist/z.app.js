$(function() {
    App.init();
  });
  
  App = {
    init: function() {
        App.lazyLoad(); 
    },
    lazyLoad: function () {
      if ('loading' in HTMLImageElement.prototype) {
          //Native Lazy Loading Supported!
          const images = document.querySelectorAll('img[loading="lazy"]');
          images.forEach(function(img) {
              img.src = img.dataset.src;
          })
      } else {
          // Not supported!
          const script = document.createElement('script');
          script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.8/lazysizes.min.js';
          document.body.appendChild(script);
      }
  }, 
  };
var num = 0;   
$(window).bind('scroll', function () {
    if ($(window).scrollTop() > num) {
        $('.header').addClass('fixed-top'); 
        $('.logo').addClass('small-logo'); 
    } else {
        $('.header').removeClass('fixed-top');
        $('.logo').removeClass('small-logo'); 
    } 
});   
$(".navbar-toggler").click(function(){
    $(".close1").toggleClass("d-none");
    $(".hamburger").toggleClass("d-none");
  });

  $('.owl-carousel').owlCarousel({
    items: 3,
    nav: false,
    dots: true,
    loop:true,
    margin:10, 
    lazyLoad: true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1,
        },
        1000:{
            items:1
        }
    }
})
