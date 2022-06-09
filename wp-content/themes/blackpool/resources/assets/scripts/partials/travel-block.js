$(".js-travel-tab").on("click", function (e) {
    e.preventDefault();
    var $this = $(this);

    if (!$this.hasClass("travel__single-tab--active")) {
        // tab switching
        $(".js-travel-tab").removeClass("travel__single-tab--active");
        $this.addClass("travel__single-tab--active");

        // content switching
        $(".js-travel-content").hide();
        var content = $this.attr("data-tab");
        $('.js-travel-content[data-tab="' + content + '"]').show();
    }
});

$(".js-accordion-trigger").on("click", function (e) {
    e.preventDefault();
    var $this = $(this);

    if ($this.hasClass("active")) {
        $this.removeClass("active");
        $this.siblings(".js-accordion-content").slideUp();
    } else {
        $(".js-accordion-trigger").removeClass("active");
        $(".js-accordion-content").slideUp();
        $this.addClass("active");
        $this.siblings(".js-accordion-content").slideDown();
    }

    // if (!$this.hasClass("travel__single-tab--active")) {
    //     // tab switching
    //     $(".js-travel-tab").removeClass("travel__single-tab--active");
    //     $this.addClass("travel__single-tab--active");

    //     // content switching
    //     $(".js-travel-content").hide();
    //     var content = $this.attr("data-tab");
    //     $('.js-travel-content[data-tab="' + content + '"]').show();
    // }
});
