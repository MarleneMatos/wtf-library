
$(document).ready(function () {

  $(window).on("scroll", function () {

    if ($(window).scrollTop() > 50) {
      $('#wtfHeader').addClass('header-bg');
      $('#wtfFooter').addClass('footer-bg');
    } else {
      $('#wtfHeader').removeClass('header-bg');
      $('#wtfFooter').removeClass('footer-bg');
    }

  });

});