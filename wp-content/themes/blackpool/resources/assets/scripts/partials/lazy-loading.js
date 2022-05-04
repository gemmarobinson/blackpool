/* eslint-disable */

// lazy loading functionality
jQuery(document).ready(function () {
    var lazyloadImages;

    if ("IntersectionObserver" in window) {
        lazyloadImages = document.querySelectorAll(".lazy");
        var imageObserver = new IntersectionObserver(function (
            entries,
            observer
        ) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var image = entry.target;
                    image.src = image.dataset.src;
                    image.classList.remove("lazy");
                    imageObserver.unobserve(image);
                }
            });
        });

        lazyloadImages.forEach(function (image) {
            imageObserver.observe(image);
        });
    } else {
        var lazyloadThrottleTimeout;
        lazyloadImages = jQuery(".lazy");

        function lazyload() {
            if (lazyloadThrottleTimeout) {
                clearTimeout(lazyloadThrottleTimeout);
            }

            lazyloadThrottleTimeout = setTimeout(function () {
                var scrollTop = jQuery(window).scrollTop();
                lazyloadImages.each(function () {
                    var el = jQuery(this);
                    if (el.offset().top - scrollTop < window.innerHeight) {
                        var url = el.attr("data-src");
                        el.attr("src", url);
                        el.removeClass("lazy");
                        lazyloadImages = jQuery(".lazy");
                    }
                });
                if (lazyloadImages.length == 0) {
                    jQuery(document).off("scroll");
                    jQuery(window).off("resize");
                }
            }, 20);
        }

        jQuery(document).on("scroll", lazyload);
        jQuery(window).on("resize", lazyload);
    }
});
