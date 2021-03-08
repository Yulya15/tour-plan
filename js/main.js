const swiper = new Swiper('.swiper-container', {
  // Бесконечная прокрутка (дойдя до конца можем перелистывать слайдер заново)
  loop: true,

  // Кнопки
  navigation: {
    nextEl: '.slider-button--next',
    prevEl: '.slider-button--prev',
  },
});
