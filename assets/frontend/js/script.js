$(function () {
    // Preloader
    function preloader() {
        $('#preloader').delay(0).fadeOut();
    };

    $(window).on('load', function () {
        preloader(),
            wowanimation();
    });

    // Menu fixed
    var navoff = $('header').offset().top;

    $(window).scroll(function () {
        var scrolling = $(this).scrollTop();

        if (scrolling > navoff) {
            $('header').addClass('menufix');
        } else {
            $('header').removeClass('menufix');
        }

    });
    // Feedback
    // Slider
    $('.text_slider').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,

        arrows: false,
        asNavFor: '.client_slider',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
		},
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
		},
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
		}

		]
    });


    // Slider
    $('.client_slider').slick({
        infinite: false,
        speed: 300,
        asNavFor: '.text_slider',
        slidesToShow: 3,
        centerMode: true,
        centerPadding: 0,
        infinite: true,
        slidesToScroll: 1,
        arrows: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                }
		},
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
		},
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
		}

		]
    });

    // Scroll To Top
    $(".bto").click(function () {
        $("html,body").animate({
            scrollTop: 0,
        }, 2000);
    });

    $(window).scroll(function () {
        var scrolling = $(this).scrollTop();

        if (scrolling > 130) {
            $(".bto").fadeIn();
        } else {
            $(".bto").fadeOut();
        }
    });


    // Wow Js
    // new WOW().init();

    // couter js
    $('.counter').counterUp({
        delay: 10,
        time: 2000
    });


    //Wow Js
    var wow = new WOW({
        boxClass: 'wow', // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset: 0, // distance to the element when triggering the animation (default is 0)
        mobile: true, // trigger animations on mobile devices (default is true)
        live: true, // act on asynchronously loaded content (default is true)
        callback: function (box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
        },
        scrollContainer: null, // optional scroll container selector, otherwise use window,
        resetAnimation: true, // reset animation on end (default is true)
    });
    wow.init();


    // Slide
    $('.slide_main').slick({
        centerMode: true,
        centerPadding: 0,
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        // prevArrow: '<i class="fas fa-chevron-left"></i>',
        // nextArrow: '<i class="fas fa-chevron-right"></i>',
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: 0,
                    slidesToShow: 4,
                    autoplay: true,
                }
	},

            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: 0,
                    slidesToShow: 3,
                    autoplay: true,
                }
		},
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: 0,
                    slidesToShow: 2,
                    autoplay: true,
                }
		}
		]
    });


});