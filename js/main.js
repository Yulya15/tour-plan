const swiper = new Swiper('.swiper-container', {
  // Бесконечная прокрутка (дойдя до конца можем перелистывать слайдер заново)
  loop: true,

  // Кнопки
  navigation: {
    nextEl: '.slider-button--next',
    prevEl: '.slider-button--prev',
  },

  effect: 'coverflow',
  speed: 600,

  keyboard: {
    enabled: true,
    onlyInViewport: false,
  }
});

let map_container = document.getElementById('map');
let options_map = {
  once: true,//запуск один раз, и удаление наблюдателя сразу
  passive: true,
  capture: true
};
map_container.addEventListener('mouseover', start_lazy_map, options_map);
map_container.addEventListener('touchstart', start_lazy_map, options_map);
map_container.addEventListener('touchmove', start_lazy_map, options_map);

let map_loaded = false;
function start_lazy_map() {
    if (!map_loaded) {
        ymaps.ready(init);
        map_loaded = true;
    }
}

function init(){
  var myMap = new ymaps.Map("map", {
    center: [7.891945, 98.294742],
    zoom: 15,
    controls: ['zoomControl'],
  });
  var placemark = new ymaps.Placemark([7.890859, 98.294742], {
    hintContent: 'Click',
    balloonContent: ' <strong>Hilton Phuket Banthai Resort Hotel</strong> <br/> Address: 94 Thaveewong Rd, Patong Beach, Phuket 83150, Thailand',
  },
  {
    preset: 'islands#redIcon'
  });

  myMap.geoObjects.add(placemark);
  myMap.behaviors.disable('scrollZoom'); 
}
