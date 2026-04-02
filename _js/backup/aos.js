/*document.addEventListener("DOMContentLoaded", function () {
  AOS.init({
    duration: 800,
    once: true
  });
});*/

document.addEventListener("DOMContentLoaded", function () {
    AOS.init({
      duration: 800,
      once: true,
      offset: 80,
      easing: 'ease-out-cubic'
    });
  });