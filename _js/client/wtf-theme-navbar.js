
$(document).ready(function () {

  $(window).on("scroll", function () {

    if ($(window).scrollTop() > 50) {
      $('#wtfHeader').addClass('header-wtf');
      
    } else {
      $('#wtfHeader').removeClass('header-wtf');
    }

  });

});