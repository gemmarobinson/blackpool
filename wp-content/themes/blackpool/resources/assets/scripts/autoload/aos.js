/** animate on scroll */
import AOS from "aos";

$(function () {
    AOS.init({
        duration: 800,
    });
});

window.addEventListener("load", function () {
    AOS.refresh();
});
