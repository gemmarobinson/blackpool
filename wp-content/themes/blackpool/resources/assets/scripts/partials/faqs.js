/* eslint-disable */

// faqs functionality
var faqButton = $(".js-faq-btn");
faqContent = $(".js-faq-content");
listFaqContent = $("li .js-faq-content");
if (faqButton) {
    faqButton.click(function (e) {
        e.preventDefault();
        var clicked = $(this);
        if (clicked.next().hasClass("is-active")) {
            clicked.removeClass("is-active");
            clicked.next().removeClass("is-active");
            clicked.next().slideUp(300);
        } else {
            faqButton.removeClass("is-active");
            faqContent.removeClass("is-active");
            faqContent.slideUp(300);

            clicked
                .parent()
                .parent()
                .find(listFaqContent)
                .removeClass("is-active");
            clicked.parent().parent().find(listFaqContent).slideUp(300);
            clicked.toggleClass("is-active");
            clicked.next().toggleClass("is-active");
            clicked.next().slideToggle(300);
        }
    });
}
