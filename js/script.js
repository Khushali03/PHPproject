 "use strict";

 (function($) {
     var ScriptsBundle = ScriptsBundle || {};
     var $window = $(window);
     // var position = $(window).scrollTop();

     $(function() {
         ScriptsBundle = {
             init: function() {
                 ScriptsBundle.scrollAnimation();
                 ScriptsBundle.accordion();
                 ScriptsBundle.sliderTestimonials();
                 ScriptsBundle.clientslider();
                 ScriptsBundle.responsiveTabs();
                 ScriptsBundle.menuToggle();
             },
             scrollAnimation: function() {
                 var height = $(window).scrollTop();
                 if (height > 200) {
                     $(".site-header").addClass("headerup animate__animated animate__fadeInDown");
                 } else {
                     $(".site-header").removeClass("headerup animate__animated animate__fadeInDown");
                 }
                 if ($window.scrollTop() >= 200) {
                     $(".scroll__top").fadeIn("slow");
                 } else {
                     $(".scroll__top").fadeOut("slow");
                 }
             },
             accordion: function() {
                 if (jQuery(".accordian__block").length === 0) {
                     return false;
                 }
                 $(".accordian__block h3").click(function() {
                     $('.accordian__block h3').removeClass('active')
                     $('.accordian__block .accordian__content').slideUp();
                     $(this).addClass('active')
                     $(this).next().slideDown();
                 });
             },
             sliderTestimonials: function() {
                 if (jQuery(".testimonials__slider").length === 0) {
                     return false;
                 }
                 $('.testimonials__slider').slick({
                     slidesToShow: 1,
                     arrows: true,
                     dots: false,
                     autoplay: true,
                     autoplaySpeed: 1000,
                     responsive: [{
                         breakpoint: 767,
                         settings: {
                             arrows: false,
                         }
                     }]
                 });
             },
             clientslider: function() {
                 if (jQuery(".client-slide").length === 0) {
                     return false;
                 }
                 $('.client-slide').slick({
                     slidesToShow: 1,
                     arrows: false,
                     dots: true,
                     autoplay: true,
                     autoplaySpeed: 2000,
                 });
             },
             responsiveTabs: function() {
                 if (jQuery(".responsive--tabs").length === 0) {
                     return false;
                 }
                 var $tabs = $(".responsive--tabs");
                 $tabs.responsiveTabs({
                     startCollapsed: "accordion",
                     collapsible: "accordion",
                 });
             },
             menuToggle: function() {
                 if (jQuery(".menu-toggel").length === 0) {
                     return false;
                 }
                 $(".menu-toggel").click(function() {
                     $(".navbar").slideToggle("slow");
                 });
             },
         };

         $(document).ready(ScriptsBundle.init);
         $window.on("scroll", ScriptsBundle.scrollAnimation);
         //$window.on("resize", ScriptsBundle.mobileMenu);
     });

     $(window).ready(function($) {
         $("body").addClass("ready");
         new WOW().init();
     });

     $window.on("load", function() {

     });

     function setCookie(cname, cvalue, exdays) {
         var d = new Date();
         d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
         var expires = "expires=" + d.toGMTString();
         document.cookie = cname + "=" + cvalue + "; " + expires;
     }

     function getCookie(cname) {
         var name = cname + "=";
         var ca = document.cookie.split(';');
         for (var i = 0; i < ca.length; i++) {
             var c = ca[i];
             while (c.charAt(0) == ' ') c = c.substring(1);
             if (c.indexOf(name) == 0) {
                 return c.substring(name.length, c.length);
             }
         }
         return "";
     }
 })(jQuery);