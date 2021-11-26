(function ($) {
    'use strict';


// owl carousel for home page

$('.me-home-slider').owlCarousel({
    loop:true,
    margin:10,
    animateOut: 'fadeOut',
    nav:true,
    autoplay:true,
    autoplayTimeout:7000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

// owl carousel for other page

$('.me-other-slider').owlCarousel({
    loop:true,
    smartSpeed:2000,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:6000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

// owl carousel for category page

$('.me-category-slider').owlCarousel({
    loop:true,
    margin:10,
    animateOut: 'slideOutDown',
    nav:true,
    autoplay:true,
    autoplayTimeout:6000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});



// owl carousel for home page popular product

$('.me-popular-item').owlCarousel({
    loop:true,
    smartSpeed:1000,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:4000,
    responsive:{
        0:{
            items:3
        },
        576:{
            items:4
        },
        1000:{
            items:6
        }
    }
});

// owl carousel for home page discount product

$('.me-discount-item').owlCarousel({
    loop:true,
    smartSpeed:700,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:5000,
    responsive:{
        0:{
            items:3
        },
        576:{
            items:4
        },
        1000:{
            items:6
        }
    }
});


// owl carousel for home page new arrival product

$('.me-newarrival-item').owlCarousel({
    loop:true,
    smartSpeed:500,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:6000,
    responsive:{
        0:{
            items:3
        },
        576:{
            items:4
        },
        1000:{
            items:6
        }
    }
});

   // wow js

new WOW().init();

// For Sticky header

    window.addEventListener("scroll",function () {
       var header = document.querySelector("header");
       header.classList.toggle("sticky-header", window.scrollY > 0);
   });


// scrollar js

$(window).scroll(function() {
    
    var goTop = $(window).scrollTop();

 if (goTop > 600) {

    $(".me-scrollar").css({'opacity' :'1'});
 }
 
 else {
    $(".me-scrollar").css({'opacity' :'0'});
 }

});

$(".me-scrollar").on('click', function () {
    
    $('html').animate({'scrollTop' : '0'});
});

// This Functions For Category Menu 

$(".me-categories-menu-title h5").on("click",function () {
    $(".me-category-menu").slideToggle();
});


// This function for FAQ and Payment Toggle

$(".me-faqandpayment-faq-header h2").on("click", function () {
   $(".me-payment").css({'display' : 'none'});
   $(".me-faq").css({'display' : 'block'});
});

$(".me-faqandpayment-payment-header h2").on("click", function () {
    $(".me-faq").css({'display' : 'none'});
   $(".me-payment").css({'display' : 'block'});
});

// This function for FAQ active button

$(".me-faqandpayment-faq-header h2").on("click", function () {
    $(".me-faqandpayment-payment-header h2").removeClass("active");
    $(".me-faqandpayment-faq-header h2").addClass("active");
});

$(".me-faqandpayment-payment-header h2").on("click", function () {
    $(".me-faqandpayment-faq-header h2").removeClass("active");
    $(".me-faqandpayment-payment-header h2").addClass("active");
});



// This Functions For FAQ 

 $("#open1 i").on("click",function () {

   if ($("#ans1").slideDown()) {
 
  $("#open1 i").css({'display' : 'none'});
  $("#close1 i").css({'display' : 'block'});

 }
 });

 $("#close1 i").on("click",function () {
  
   if ($("#ans1").slideUp()) {
 
  $("#close1 i").css({'display' : 'none'});
  $("#open1 i").css({'display' : 'block'});

 }
 });

 $("#open2 i").on("click",function () {

   if ($("#ans2").slideDown()) {
 
  $("#open2 i").css({'display' : 'none'});
  $("#close2 i").css({'display' : 'block'});

 }
 });

 $("#close2 i").on("click",function () {
  
   if ($("#ans2").slideUp()) {
 
  $("#close2 i").css({'display' : 'none'});
  $("#open2 i").css({'display' : 'block'});

 }
 });

 $("#open3 i").on("click",function () {

   if ($("#ans3").slideDown()) {
 
  $("#open3 i").css({'display' : 'none'});
  $("#close3 i").css({'display' : 'block'});

 }
 });

 $("#close3 i").on("click",function () {
  
   if ($("#ans3").slideUp()) {
 
  $("#close3 i").css({'display' : 'none'});
  $("#open3 i").css({'display' : 'block'});

 }
 });

 $("#open4 i").on("click",function () {

   if ($("#ans4").slideDown()) {
 
  $("#open4 i").css({'display' : 'none'});
  $("#close4 i").css({'display' : 'block'});

 }
 });

 $("#close4 i").on("click",function () {
  
   if ($("#ans4").slideUp()) {
 
  $("#close4 i").css({'display' : 'none'});
  $("#open4 i").css({'display' : 'block'});

 }
 });

 $("#open5 i").on("click",function () {

   if ($("#ans5").slideDown()) {
 
  $("#open5 i").css({'display' : 'none'});
  $("#close5 i").css({'display' : 'block'});

 }
 });

 $("#close5 i").on("click",function () {
  
   if ($("#ans5").slideUp()) {
 
  $("#close5 i").css({'display' : 'none'});
  $("#open5 i").css({'display' : 'block'});

 }
 });

 $("#open6 i").on("click",function () {

   if ($("#ans6").slideDown()) {
 
  $("#open6 i").css({'display' : 'none'});
  $("#close6 i").css({'display' : 'block'});

 }
 });

 $("#close6 i").on("click",function () {
  
   if ($("#ans6").slideUp()) {
 
  $("#close6 i").css({'display' : 'none'});
  $("#open6 i").css({'display' : 'block'});

 }
 });

// This function for offer countdown 
  
 var meDate = $('#offer-date').val();
  
 $("#me-offer-started")
   .countdown(meDate, function(event) {
     $(this).html(
       event.strftime('<div><span>%D</span><span>days</span></div><div><span>%H</span><span>hours</span></div><div><span>%M</span><span>minutes</span></div><div><span>%S</span><span>seconds</span></div>')
     );
   });

// This function for 404 page Icon moving

 $("html").on("mouseover", function () {
    
     $(".me-erorr-icon").animate({"width":"100px"}, 5000);
     $(".me-erorr-icon").animate({"width":"200px"}, 5000);

 });




}) (jQuery);


















