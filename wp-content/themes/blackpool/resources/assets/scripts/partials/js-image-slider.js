$(".js-image-slider-container").each(function (index) {
    var container = $(this),
        slider = container.find(".js-image-slider"),
        dotsContainer = container.find(".js-image-slider-dots");

    slider.slick({
        infinite: true,
        arrows: false,
        appendDots: dotsContainer,
        dots: true,
        adaptiveHeight: true,
    });
});
