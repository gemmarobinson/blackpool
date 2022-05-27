$(".js-image-and-list-slider").each(function (index) {
    var container = $(this),
        textSlider = container.find(".js-text-slider"),
        imageSlider = container.find(".js-image-slider"),
        counter = container.find(".js-image-and-list-slider-counter"),
        arrowContainer = container.find(".js-image-and-list-slider-arrows"),
        dotsContainer = container.find(".js-image-and-list-slider-dots");

    textSlider.slick({
        infinite: true,
        asNavFor: imageSlider,
        appendArrows: arrowContainer,
        prevArrow: "",
        nextArrow:
            '<button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next <i class="fas fa-chevron-right"></i></button>',
        dots: true,
        appendDots: dotsContainer,
    });

    imageSlider.slick({
        infinite: true,
        asNavFor: textSlider,
        arrows: false,
    });

    textSlider.on(
        "init reInit afterChange",
        function (event, slick, currentSlide, nextSlide) {
            //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
            var i = (currentSlide ? currentSlide : 0) + 1;
            counter.text(i + " / " + slick.slideCount);
        }
    );
});
