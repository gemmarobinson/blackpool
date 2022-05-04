/* eslint-disable */

// hero full height functionality
// First we get the viewport height and we multiple it by 1% to get a value for a vh unit
var vh = window.innerHeight * 0.01;

// Then we set the value in the --vh custom property to the root of the document
var root = document.documentElement;
root.style.setProperty("--vh", "".concat(vh, "px"));

// We listen to the resize event
window.addEventListener("resize", function () {
    var vh = window.innerHeight * 0.01;

    if (
        window.innerWidth > window.innerHeight ||
        Math.abs(this.lastHeight - window.innerHeight) > 100
    ) {
        // We execute the same script as before
        var root = document.documentElement;
        root.style.setProperty("--vh", "".concat(vh, "px"));
        this.lastHeight = window.innerHeight;
    }
});
