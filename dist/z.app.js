$(function(){App.init()}),App={init:function(){App.lazyLoad()},lazyLoad:function(){if("loading"in HTMLImageElement.prototype){document.querySelectorAll('img[loading="lazy"]').forEach(function(o){o.src=o.dataset.src})}else{const o=document.createElement("script");o.src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.8/lazysizes.min.js",document.body.appendChild(o)}}};var num=0;$(window).bind("scroll",function(){$(window).scrollTop()>num?($(".header").addClass("fixed-top"),$(".logo").addClass("small-logo")):($(".header").removeClass("fixed-top"),$(".logo").removeClass("small-logo"))}),$(".navbar-toggler").click(function(){$(".close1").toggleClass("d-none"),$(".hamburger").toggleClass("d-none")}),$(".owl-carousel").owlCarousel({items:3,nav:!1,dots:!0,loop:!0,margin:10,lazyLoad:!0,responsiveClass:!0,responsive:{0:{items:1},600:{items:1},1000:{items:1}}});