if ($(window).width() > 993) {
    var wrapEveryN = function (n, elements, wrapper) {
        for (var i = 0; i < elements.length; i += n) {
            elements.slice(i, i + n).wrapAll(wrapper);
        }
    };

    wrapEveryN(5, $(".gallery-slider img"), '<div></div>')
}
if ($(window).width() > 993) {
    $('.gallery-slider').slick({
        dots: true,
        infinite: true,
        arrows: false,
        speed: 1000,
        autoplay: true,
        appendDots: $(".dots-container")
    });
}

else {
    $('.gallery-slider').slick({
        infinite: true,
        speed: 1000,
        autoplay: true,
        arrows: false,
        centerMode: true,
        focusOnSelect: true,
        appendDots: $(".dots-container"),
        dots: true
    });
}

$('#other-news-left').click(function () {
    $('.gallery-slider').slick('slickPrev');
});

$('#other-news-right').click(function () {
    $('.gallery-slider').slick('slickNext');
});

$(function () {
    var slickParameters = {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 2000,
        centerMode: true,
        focusOnSelect: true
    };

    function slickUnslickCategory() {
        var windowWidth = $(window).width();
        if ($('.books__content__block').hasClass('slick-slider')) {
            $('.books__content__block').slick('unslick');
        }
    }

    slickUnslickCategory();

    $("#toggle").click(function () {
        $(this).toggleClass("on");
        $("#resize").toggleClass("active");
    });
});

// Init AOS
AOS.init();