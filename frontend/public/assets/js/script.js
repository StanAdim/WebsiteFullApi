"use strict";
// Preloader ========
$(document).ready(function() {
    $('.preloader').fadeOut();
});

// console.log("this is from script")
$(document).ready(function(){
    
    // Mobile Menu ========
    $('.mobile_menu').meanmenu({
        meanScreenWidth: "992", 
    });


    // Brand Carousel ========
    $('.brands-slider').owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        autoplay:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            800:{
                items:3
            },
            1200:{
                items:4
            },
            1400:{
                items:4
            }
        }
    });


    // Testimonial Carousel ========
    $('.testimonial-silder').owlCarousel({
        loop:true,
        margin:30,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            800:{
                items:2
            },
            1200:{
                items:3
            }
        }
    });


    // Project Carousel ========
    $('.project-silder').owlCarousel({
        loop:true,
        margin:30,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    });


    // Counter ========
    $('.count-num').counterUp({
        delay: 10,
        time: 1000
    });


    // Wow js ========
    new WOW().init();


});




// Fixed navbar ========
// window.onscroll = function() {myFunction()};

// var navbar = document.querySelector('.main-navbar');

// var sticky = navbar.offsetTop;

// function myFunction() {
//     if (window.pageYOffset >= sticky) {
//         navbar.classList.add("sticky")
//     } else {
//         navbar.classList.remove("sticky");
//     }
// };

    

// Bottom to top scroll ========
// $(window).on("scroll", function (){

//     if (window.scrollY > window.outerHeight) {
//       $(".scrollTop").addClass("active");
//     } else {
//       $(".scrollTop").removeClass("active");
//     }

// });
  
// $('.scrollTop').on('click',function(){
//     $("html, body").animate({ scrollTop: 0 }, 1000);
// });



$(document).ready(function(){

    // Isotope filter ========
    var $grid = $('.item-details').isotope({
        // options
    });

    // Filter items on button click
    $('.item-menu').on( 'click', 'li', function(){

        $('li').removeClass('active');
        $(this).addClass('active');

        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });

});