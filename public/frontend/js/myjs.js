$(document).ready(function () {
    $(".bao-san-pham").owlCarousel({
        loop:true,
        margin:40,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            800:{
                items:3,
            },
            1000:{
                items:3,
            },
            1200:{
                items:4,
            }
        },
        nav:false,
        autoplay: true,
        navText: true,
        dots: false,
        scrollPerPage: 1,
        slideSpeed: 500
    });
    $(".bao-san-pham-nhap-khau").owlCarousel({
        loop:true,
        margin:40,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            800:{
                items:3,
            },
            1000:{
                items:3,
            },
            1200:{
                items:4,
            }
        },
        nav:false,
        autoplay: true,
        navText: true,
        dots: false,
        scrollPerPage: 1,
        slideSpeed: 500
    });
 $(".bao-san-pham-trong-nuoc").owlCarousel({
        loop:true,
        margin:40,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            800:{
                items:3,
            },
            1000:{
                items:3,
            },
            1200:{
                items:4,
            }
        },
        nav:false,
        autoplay: true,
        navText: true,
        dots: false,
        scrollPerPage: 1,
        slideSpeed: 500
    });
 $(".bao-san-pham-do-kho-sach").owlCarousel({
        loop:true,
        margin:40,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            800:{
                items:3,
            },
            1000:{
                items:3,
            },
            1200:{
                items:4,
            }
        },
        nav:false,
        autoplay: true,
        navText: true,
        dots: false,
        scrollPerPage: 1,
        slideSpeed: 500
    });
  $(".bao-san-pham-thuc-pham-da-che-bien").owlCarousel({
        loop:true,
        margin:40,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            800:{
                items:3,
            },
            1000:{
                items:3,
            },
            1200:{
                items:4,
            }
        },
        nav:false,
        autoplay: true,
        navText: true,
        dots: false,
        scrollPerPage: 1,
        slideSpeed: 500
    });


        $('.cau-tra-loi').css({"display":"none"});
    $('.nut-click').on({
    'click': function() {
        var rel=$(this).attr("rel");
        var src = ($(this).attr('src') === 'http://localhost/chohaisan/public/frontend/images/img-cau-hoi-2.png')
             ? 'http://localhost/chohaisan/public/frontend/images/img-cau-hoi-1.png'
             : 'http://localhost/chohaisan/public/frontend/images/img-cau-hoi-2.png';
         $(this).attr('src', src);
         $(rel).toggle();
     }
});

})
