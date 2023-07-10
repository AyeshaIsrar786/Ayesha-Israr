
$(document).ready(function () {
    "use strict"; // Start of use strict

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 50
        }
    });


    //back to top
    $('body').append('<div id="toTop" class="btn btn-top "><span class="glyphicon glyphicon-chevron-up"></span></div>');
    $(window).scroll(function () {
        if ($(this).scrollTop() !== 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    $('#toTop').on("click", function () {
        $("html, body").animate({scrollTop: 0}, 600);
        return false;
    });


    //load function
    $(window).on("load", function () {
        $('.slider').fractionSlider({
            'fullWidth': true,
            'controls': true,
            'pager': true,
            'responsive': true,
            'dimensions': "1000,400",
            'increase': false,
            'pauseOnHover': true
        });
    });

    // datepicker
    $("#datepicker1").datepicker();
    $("#datepicker2").datepicker();
    $("#datepicker3").datepicker();
    $("#datepicker4").datepicker();

    //popular slide
    $("#popular-slide").owlCarousel({
        //  autoPlay: 5000,
        items: 4,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [980, 3],
        itemsTablet: [768, 3],
        itemsTabletSmall: false,
        itemsMobile: [479, 1],
        lazyLoad: true,
        pagination: false,
        navigation: true,
        navigationText: [
            "<i class='fa fa-arrow-left'></i>",
            "<i class='fa fa-arrow-right'></i>"
        ]
    });

    //hotel details slide
    var sync1 = $("#sync1");
    var sync2 = $("#sync2");
    sync1.owlCarousel({
        singleItem: true,
        slideSpeed: 1000,
        navigation: false,
        pagination: false,
        afterAction: syncPosition,
        responsiveRefreshRate: 200
    });
    sync2.owlCarousel({
        items: 5,
        itemsDesktop: [1199, 10],
        itemsDesktopSmall: [979, 10],
        itemsTablet: [768, 8],
        itemsMobile: [479, 4],
        pagination: false,
        responsiveRefreshRate: 100,
        afterInit: function (el) {
            el.find(".owl-item").eq(0).addClass("synced");
        }
    });
    function syncPosition(el) {
        var current = this.currentItem;
        $("#sync2")
                .find(".owl-item")
                .removeClass("synced")
                .eq(current)
                .addClass("synced");
        if ($("#sync2").data("owlCarousel") !== undefined) {
            center(current);
        }
    }

    $("#sync2").on("click", ".owl-item", function (e) {
        e.preventDefault();
        var number = $(this).data("owlItem");
        sync1.trigger("owl.goTo", number);
    });
    function center(number) {
        var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
        var num = number;
        var found = false;
        for (var i in sync2visible) {
            if (num === sync2visible[i]) {
                var found = true;
            }
        }

        if (found === false) {
            if (num > sync2visible[sync2visible.length - 1]) {
                sync2.trigger("owl.goTo", num - sync2visible.length + 2);
            } else {
                if (num - 1 === -1) {
                    num = 0;
                }
                sync2.trigger("owl.goTo", num);
            }
        } else if (num === sync2visible[sync2visible.length - 1]) {
            sync2.trigger("owl.goTo", sync2visible[1]);
        } else if (num === sync2visible[0]) {
            sync2.trigger("owl.goTo", num - 1);
        }

    }

    //blog slide
    $("#blog-slide").owlCarousel({
        autoPlay: 5000,
        items: 4,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [980, 3],
        itemsTablet: [768, 2],
        itemsTabletSmall: false,
        itemsMobile: [479, 1],
        lazyLoad: true,
        pagination: false,
        navigation: false
    });

    //tour slide
    $("#tour-slide").owlCarousel({
        navigation: false, // Show next and prev buttons
        //slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true
    });

    // tooltip
    $('[data-toggle="tooltip"]').tooltip();
    //counter
    $('.count-number').counterUp({
        delay: 10,
        time: 5000
    });
    //gallery
    $('.zoom-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        closeOnContentClick: false,
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        image: {
            verticalFit: true,
            titleSrc: function (item) {
                return item.el.attr('title') + ' &middot; <a class="image-source-link" href="' + item.el.attr('data-source') + '" target="_blank">image source</a>';
            }
        },
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
            duration: 300, // don't foget to change the duration also in CSS
            opener: function (element) {
                return element.find('img');
            }
        }

    });
    //spinner
    $(document).on("click", '.number-spinner a', function () {
        var btn = $(this),
                oldValue = btn.closest('.number-spinner').find('input').val().trim(),
                newVal = 0;
        if (btn.attr('data-dir') === 'up') {
            newVal = parseInt(oldValue,10) + 1;
        } else {
            if (oldValue > 1) {
                newVal = parseInt(oldValue,10) - 1;
            } else {
                newVal = 1;
            }
        }
        btn.closest('.number-spinner').find('input').val(newVal);
    });


    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function (event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.tour-nav',
        offset: 100
    });


    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");

});


