$(".js-menu-toggle").on("click", function (e) {
    e.preventDefault();
    $(".js-menu").toggleClass("active");
    $("body").toggleClass("is-active");
    $("html").toggleClass("is-active");
    $(this).toggleClass("is-active");
    $(".js-header").toggleClass("header--menu-open");
});

$(".menu-item-has-children").click(function (e) {
    if (e.target == this) {
        $(this).children(".sub-menu").slideToggle();
        if ($(this).hasClass("opened")) {
            $(this).removeClass("opened");
        } else {
            $(this).addClass("opened");
        }

        $(this)
            .siblings()
            .each(function (index, value) {
                var slider = $(value);
                if (slider.hasClass("opened")) {
                    slider.removeClass("opened");
                    slider.children(".sub-menu").slideToggle();
                }
            });
    }
});

var distance = 50,
    lastScrollTop = 0,
    header = $(".js-header");

$(window).on("scroll", function () {
    var st = $(this).scrollTop();
    if (st > distance) {
        header.addClass("hide");
    } else {
        header.removeClass("hide");
    }

    if (st < lastScrollTop) {
        header.removeClass("hide");
    } else {
        if (st > distance) {
            header.addClass("hide");
        }
    }
    lastScrollTop = st;
});

$(window).on("resize", function () {
    header.removeClass("hide");
});
