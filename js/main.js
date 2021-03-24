$(document).ready(function () {

  const hotelSlider = new Swiper('.hotel-slider', {
    // Бесконечная прокрутка (дойдя до конца можем перелистывать слайдер заново)
    loop: true,
  
    // Кнопки
    navigation: {
      nextEl: '.hotel-slider__button--next',
      prevEl: '.hotel-slider__button--prev',
    },
  
    effect: 'coverflow',
    speed: 600,
  
    keyboard: {
      enabled: true,
      onlyInViewport: false,
    }
  });
  
  const reviewsSlider = new Swiper('.reviews-slider', {
    loop: true,
  
    navigation: {
      nextEl: '.reviews-slider__button--next',
      prevEl: '.reviews-slider__button--prev',
    },
  });
  
  let map_container = document.getElementById('map');
  let options_map = {
    once: true,
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
  
  var menuButton = $(".menu-button");
  menuButton.on("click", function() {
    $(".navbar-bottom").toggleClass("navbar-bottom--visible");
  });

  var modalButton = $('[data-toggle=modal]');
  var closeModalButton =$(".modal__close");
  modalButton.on('click', openModal);
  closeModalButton.on('click', closeModal);
  var scrollTop = window.pageYOffset;

    function openModal() {
      var modalOverlay = $(".modal__overlay");
      var modalDialog = $(".modal__dialog");
      modalOverlay.addClass('modal__overlay--visible');
      modalDialog.addClass('modal__dialog--visible');
     
      scrollTop = window.pageYOffset; // запоминаем текущую прокрутку сверху
      $('body').css({
        position: 'fixed',
        width: '100%',
        top: -scrollTop+'px',
        overflow: 'hidden'
      });
    }

    if ($( window ).height() < $(".modal__dialog").height()) {
      console.log("Меньше");
      $(".modal__dialog").css({
        height: '100%'
      });
    }
    
    $( window ).resize(function() {
      if ($( window ).height() < $(".modal__dialog").height()) {
        console.log("Меньше");
        $(".modal__dialog").css({
          height: '100%'
        });
      }
      else if ($( window ).height() > $(".modal__dialog").height()) {
        console.log("Больше");
        $(".modal__dialog").css({
          height: ''
        });
      }
    });

    function closeModal(event) {
      event.preventDefault();
      var modalOverlay = $(".modal__overlay");
      var modalDialog = $(".modal__dialog");
      modalOverlay.removeClass('modal__overlay--visible');
      modalDialog.removeClass('modal__dialog--visible');
      $('body').css({
        position: '',
        width: '',
        top: '',
        overflow: ''
      });
      window.scroll(0, scrollTop);
    }

    $("#myModal").click(function() {
      $(document).on('click', function(event) {
        var select = $(".modal__dialog");
        if ($(event.target).closest(select).length)
          return;
        closeModal(event);
        $(document).unbind('click');
        event.stopPropagation();
      });
    });

    $(document).on('keydown', function(event) {
      if (event.keyCode == 27)
        closeModal(event);
    });

    $("input[name='phone']").click(function(){
      $(this).attr("placeholder", "+7(___) ___-____)");
      $(this).mask("+7(999) 999-9999");
    });

    $(".form").each(function(){
      // Обработка форм
      $(this).validate({
        errorClass: "invalid",
        messages: {
          name: {
            required: "Please specify your name",
            minlenght: "Username must be longer than or equal to 2 characters",
          },
          email: {
            required: "We need your email address to contact you",
            email: "Your email address must be in the format of name@domain.com",
          },
            phone: {
              required: "A phone number is required",
              minlenght: "Please enter at least 10 characters.",
            }
        },    
      });
    });

  $('.hover').on('touchstart touchend', function(e) {
    e.preventDefault();
    $(this).toggleClass('hover_effect');
  });

    // $('body').bind('touchstart', function () {});

    AOS.init();
});
