document.addEventListener("DOMContentLoaded", function () {
    AOS.init({
        duration: 900,
        once: false, //once: true → animation only happens the first time
        mirror: true, //mirror: false → no reverse/re-trigger behavior when scrolling back
        offset: 80,
        easing: 'ease-out-cubic'
    });
});

window.addEventListener('load', function () {
    AOS.refresh();

    if (typeof Masonry !== "undefined") {
        const grid = document.querySelector('.grid');
        if (grid) {
            new Masonry(grid, {
                itemSelector: '.grid-item',
                percentPosition: true
            });

            setTimeout(function () {
                AOS.refresh();
            }, 300);
        }
    }

});