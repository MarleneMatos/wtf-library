$(document).ready(function () {

    $(window).on("scroll", function () {
        if ($(document).scrollTop() > 50) {
            $('nav').addClass('scrolled');
            $('.bd-mode-toggle .btn').addClass('btn-bd');
        } else {
            $('nav').removeClass('scrolled');
            $('.bd-mode-toggle .btn').removeClass('btn-bd');
        }
    })

});