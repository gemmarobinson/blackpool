$(".js-image-and-list-slider").each(function (index) {
    var container = $(this),
        textSlider = container.find(".js-text-slider"),
        imageSlider = container.find(".js-image-slider");
    // next_arrow = container.find(".js-slider-arrows-next"),
    // prev_arrow = container.find(".js-slider-arrows-prev");

    textSlider.slick({
        infinite: true,
        asNavFor: imageSlider,
        arrows: false,
    });

    imageSlider.slick({
        infinite: true,
        asNavFor: textSlider,
        arrows: false,
    });
});
