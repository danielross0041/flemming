// $('#slider_Area').slick({
//     dots: false,
//     infinite: true,
//     speed: 500,
//     slidesToShow: 5,
//     slidesToScroll: 1,
//     autoplay: true,
//     autoplaySpeed: 2000,
//     arrows: false,
//     responsive: [{
//             breakpoint: 600,
//             settings: {
//                 slidesToShow: 3,
//                 slidesToScroll: 1
//             }
//         },
//         {
//             breakpoint: 400,
//             settings: {
//                 arrows: false,
//                 slidesToShow: 2,
//                 slidesToScroll: 1
//             }
//         }
//     ]
// });


jQuery(document).ready(function($) {
    var owl = $("#owl-demo-2");
    owl.owlCarousel({
        autoplay: false,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        items: 5,
        loop: true,
        mouseDrag: true,
        arrows: true,
        touchDrag: true,
        pullDrag: true,
        freeDrag: false,
        dots: false,
        margin: 0,
        stagePadding: 0,
        merge: false,
        autoWidth: true,
        startPosition: 0,
        rtl: false,
        smartSpeed: 250,
        fluidSpeed: false,
        dragEndSpeed: false,
        nav: true,

        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 3,
                nav: false
            },
            768: {
                items: 4,
                // nav: true,
                loop: false
            },
            992: {
                items: 5,
                // nav: true,
                loop: false
            }
        },
        responsiveRefreshRate: 200,
        responsiveBaseElement: window,
        fallbackEasing: "swing",
        info: false,
        nestedItemSelector: false,
        itemElement: "div",
        stageElement: "div",
        refreshClass: "owl-refresh",
        loadedClass: "owl-loaded",
        loadingClass: "owl-loading",
        rtlClass: "owl-rtl",
        responsiveClass: "owl-responsive",
        dragClass: "owl-drag",
        itemClass: "owl-item",
        stageClass: "owl-stage",
        stageOuterClass: "owl-stage-outer",
        grabClass: "owl-grab",
        autoHeight: false,
        lazyLoad: false
    });

    $(".owl-prev").html('<i class="fa fa-chevron-left"></i>');
    $(".owl-next").html('<i class="fa fa-chevron-right"></i>');
});