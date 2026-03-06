var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 0,
    effect: "fade",
    
    fadeEffect: {
        crossFade: true,
    },

    navigation: {
        nextEl: ".btn-next",
        prevEl: ".btn-prev",
    },
});