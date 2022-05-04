// /* eslint-disable */
var distance = 50,
    hamburger = $(".js-menu-toggle"),
    header = $(".js-header");

// // navigation scroll functionality
$(window).bind("scroll", function () {
    if ($(window).scrollTop() > distance) {
        addClasses();
    } else {
        removeClasses();
    }
});

$(window).load(function () {
    if ($(window).scrollTop() > distance) {
        addClasses();
    } else {
        removeClasses();
    }
});

// navigation hover functionality
$(header).mouseenter(function () {
    addClasses();
});
$(header).mouseleave(function () {
    if ($(window).scrollTop() < distance) {
        removeClasses();
    }
});

function addClasses() {
    header.addClass("is-fixed");
    hamburger.addClass("is-fixed");
}

function removeClasses() {
    header.removeClass("is-fixed");
    hamburger.removeClass("is-fixed");
}
