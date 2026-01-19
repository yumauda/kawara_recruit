"use strict";

const slider2 = new Swiper(".slider-middle", {
  slidesPerView: 1.4,
  centeredSlides: true,
  loop: true,
  initialSlide: 0,
  spaceBetween: 20,
});
const sliderInterview = new Swiper(".slider-interview", {
  slidesPerView: "auto",
  centeredSlides: true,
  loop: true,
  initialSlide: 0,
  spaceBetween: 60,

  breakpoints: {
    768: {
      slidesPerView: "auto",
      loop: true,
      initialSlide: 0,
      spaceBetween: 20,
    },
    1540: {
      slidesPerView: "auto",
      loop: true,
      initialSlide: 0,
      spaceBetween: 90,
    },
  },
});
const sliderPageInterview = new Swiper(".slider-page-interview", {
  slidesPerView: "auto",
  centeredSlides: true,
  loop: true,
  initialSlide: 0,
  spaceBetween: 20,

  breakpoints: {
    768: {
      centeredSlides: false,
      slidesPerView: "auto",
      loop: true,
      initialSlide: 0,
      spaceBetween: 30,
    },
    1540: {
      slidesPerView: "auto",
      centeredSlides: false,
      loop: true,
      initialSlide: 0,
      spaceBetween: 40,
    },
  },
});
const slider3 = new Swiper(".slider3", {
  slidesPerView: 1.2,
  centeredSlides: true,
  loop: true,
  initialSlide: 0,
  breakpoints: {
    768: {
      effect: "slide",
      slidesPerView: 3,
      centeredSlides: false,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  scrollbar: {
    el: ".swiper-scrollbar",
  },
});


const slider4 = new Swiper(".slider4", {
  slidesPerView: 1.1,
  centeredSlides: true,
  loop: true,
  initialSlide: 0,
  spaceBetween: 10,
  breakpoints: {
    768: {
      effect: "slide",
      slidesPerView: 2.2,
      spaceBetween: 10,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  scrollbar: {
    el: ".swiper-scrollbar",
  },
});
const slider5 = new Swiper(".slider5", {
  slidesPerView: 1.1,
  centeredSlides: true,
  loop: true,
  initialSlide: 0,
  breakpoints: {
    768: {
      effect: "slide",
      slidesPerView: 1.8,
      spaceBetween: 10,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
    },
  },
  navigation: {
    nextEl: ".slider5 .swiper-button-next",
    prevEl: ".slider5 .swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});
