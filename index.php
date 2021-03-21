<?php include('header.php') ?>

    <section class="hotel">
      <div class="container">
        <div class="hotel-info">
          <div class="hotel-info__text">
            <div class="hotel-wrapper">
              <div class="stars">
                <img src="img/star.svg" alt="star">
                <img src="img/star.svg" alt="star">
                <img src="img/star.svg" alt="star">
                <img src="img/star.svg" alt="star">
                <img src="img/star.svg" alt="star">
              </div>
              <!-- /.stars -->
              <h1 class="hotel-name hotel-info__name">Grand Hilton Hotel</h1>
              <span class="offer hotel-info__offer">Flash Offer</span>
            </div>
            <!-- /.hotel-wrapper -->
            <p class="hotel-description hotel-info__description">Half-Board / All Inclusive + Complimentary Activities + Child Stays Free</p>
          </div>
          <!-- /.hotel-info__text -->
          <div class="rating hotel-info__rating">
            <span class="rating__text">User Rattings</span>
            <span class="rating__counter">4.5/5</span>
          </div>
          <!-- /.rating -->
        </div>
        <!-- /.hotel-info -->

        <div class="hotel-grid">   
            <div class="swiper-container hotel-slider hotel__slider">  
              <div class="swiper-wrapper">    
                <div class="swiper-slide hotel-slider__item">
                  <img class="hotel-slider__image" src="img/slide-1.jpg" alt="Slide">
                </div>
                <div class="swiper-slide hotel-slider__item">
                  <img class="hotel-slider__image" src="img/slide-2.jpg" alt="Slide">
                </div>
                <div class="swiper-slide hotel-slider__item">
                  <img class="hotel-slider__image" src="img/slide-3.jpg" alt="Slide">
                </div>
                <div class="swiper-slide hotel-slider__item">
                  <img class="hotel-slider__image" src="img/slide-4.jpg" alt="Slide">
                </div>
                <div class="swiper-slide hotel-slider__item">
                  <img class="hotel-slider__image" src="img/slide-5.jpg" alt="Slide">
                </div>
              </div>         
              <button class="hotel-slider__button hotel-slider__button--prev"></button>
              <button class="hotel-slider__button hotel-slider__button--next"></button>
            </div>
            <!-- /.swiper-container -->

          <div class="hotel-about">
            <div class="booking">
              <div class="booking__info">
                <div class="booking__price">
                  <span class="booking__start">price starts as</span>
                  <strong class="booking__pricetag">$ 8,500</strong>
                  <span class="booking__per-room">per room / night</span>
                </div>
                <!-- /.booking__price -->
                <div class="booking__room">
                  <div class="booking__text">
                    <img src="img/user.svg" alt="Icon: user" class="booking__icon">
                    <span class="booking__description">2 x Guests</span>
                  </div>
                  <div class="booking__text">
                    <img src="img/home.svg" alt="Icon: home" class="booking__icon">
                    <span class="booking__description">1 x Room</span>
                  </div>
                </div>
                <!-- /.booking__room -->
              </div>
              <!-- /.booking__info -->
              <div class="booking__call-center">
                <span class="booking__heading">Quick Booking</span>
                <a href="tel:12100" class="booking__number">
                  <img src="img/phone-call.svg" alt="Icon: phone">
                  <span class="booking__num">12100</span>
                </a>
              </div>
              <!-- /.booking__call-center -->
              <button data-toggle="modal" class="booking__button">View Other Options</button>
            </div>
            <!-- /.booking -->
            <div id="map" class="map"></div>
            <!-- /.map -->
          </div>
          <!-- /.hotel-about -->
        </div>
        <!-- /.hotel-grid -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.hotel -->


    <section class="packages">
      <div class="container">
        <h2 class="packages__title">Other packages</h2>
        <div class="packages-wrapper">
          <div class="package packages__package">
            
            <div class="package__images-first">
              <img src="img/hotel-1.jpg" alt="Hotel Blue Haven" class="package__image-first">
              <span class="package__offer-first">Flash Offer</span>
            </div>
            <!-- /.package__image -->
            <div class="package__info-first">
              <div class="package__raiting">
                <img src="img/star.svg" alt="star">
                <img src="img/star.svg" alt="star">
                <img src="img/star.svg" alt="star">
                <img src="img/star.svg" alt="star">
                <img src="img/star.svg" alt="star">
              </div>
              <span class="package__name">Hotel Blue Haven</span>
              <p class="package__about">Aute quis duis excepteur excepteur 
                ipsum cat eiusmod consectetur enim laborum magna llit. Ipsum 
                est fugiat velit ea llamco do esse ut in veniam sun in onsequat. 
                Aute quis duis epteur excepteur ipsum occaecat eiusmod nsectetur 
                enim laborum magna mollit. Ipsum est fugiat velit ea ullamco do</p>
              <div class="package__rooms">
                <div class="package__text">
                  <img src="img/map.svg" alt="Icon: map" class="package__icon">
                  <span class="package__description">1749 Wheeler Ridge  Delaware</span>
                </div>
                <!-- /.package__text -->
                <div class="package__text">
                  <img src="img/user.svg" alt="Icon: user" class="package__icon">
                  <span class="package__description">2 x Guests</span>
                </div>
                <!-- /.package__text -->
                <div class="package__text">
                  <img src="img/home.svg" alt="Icon: home" class="package__icon">
                  <span class="package__description">1 x Room</span>
                </div>
                <!-- /.package__text -->
              </div>
              <!-- /.package__rooms -->
              <div class="package__prices">
                <div class="package__price">
                  <span class="price-to">$ 10,500</span>
                  <span class="price-after">$ 8,500</span>
                </div>
                <!-- /.package__price -->
                <div class="package__buttons">
                  <button data-toggle="modal" class="package__button">Book Now</button>
                </div>
              </div>
              <!-- /.package-prices -->
            </div>
            <!-- /.package__info -->
          </div>
          <!-- /.package -->

          <div class="package packages__package">
            <div class="package__images">
              <img src="img/hotel-2.jpg" alt="LUX* Belle Mare" class="package__image">
              <span class="package__offer">Flash Offer</span>
            </div>
            <!-- /.package__image -->
            <div class="package__info">
              <span class="package__name">LUX* Belle Mare</span>
              <div class="package__rooms">
                <div class="package__text">
                  <img src="img/map.svg" alt="Icon: map" class="package__icon">
                  <span class="package__description">1749 Wheeler Ridge  Delaware</span>
                </div>
                <!-- /.package__text -->
                <div class="package__text">
                  <img src="img/user.svg" alt="Icon: user" class="package__icon">
                  <span class="package__description">2 x Guests</span>
                </div>
                <!-- /.package__text -->
                <div class="package__text">
                  <img src="img/home.svg" alt="Icon: home" class="package__icon">
                  <span class="package__description">1 x Room</span>
                </div>
                <!-- /.package__text -->
              </div>
              <!-- /.packages__rooms -->
              <div class="package__prices">
                <div class="package__price">
                  <span class="price-to">$ 8,500</span>
                  <span class="price-after">$ 3,000</span>
                </div>
                <!-- /.package__price -->
                <div class="package__buttons">
                  <button data-toggle="modal" class="package__button">Book Now</button>
                </div>
              </div>
              <!-- /.package-prices -->
            </div>
            <!-- /.package__info -->
          </div>
          <!-- /.package -->

          <div class="package packages__package">
            <div class="package__images">
              <img src="img/hotel-3.jpg" alt="White Palace" class="package__image">
              <span class="package__offer">Flash Offer</span>
            </div>
            <!-- /.package__image -->
            <div class="package__info">
              <span class="package__name">White Palace</span>
              <div class="package__rooms">
                <div class="package__text">
                  <img src="img/map.svg" alt="Icon: map" class="package__icon">
                  <span class="package__description">1749 Wheeler Ridge  Delaware</span>
                </div>
                <!-- /.package__text -->
                <div class="package__text">
                  <img src="img/user.svg" alt="Icon: user" class="package__icon">
                  <span class="package__description">2 x Guests</span>
                </div>
                <!-- /.package__text -->
                <div class="package__text">
                  <img src="img/home.svg" alt="Icon: home" class="package__icon">
                  <span class="package__description">1 x Room</span>
                </div>
                <!-- /.package__text -->
              </div>
              <!-- /.package__rooms -->
              <div class="package__prices">
                <div class="package__price">
                  <span class="price-to">$ 10,500</span>
                  <span class="price-after">$ 9,500</span>
                </div>
                <!-- /.package__price -->
                <div class="package__buttons">
                  <button data-toggle="modal" class="package__button">Book Now</button>
                </div>
              </div>
              <!-- /.package-prices -->
            </div>
            <!-- /.package__info -->
          </div>
          <!-- /.package -->

        <div class="package packages__package">
          <div class="package__images">
            <img src="img/hotel-4.jpg" alt="Luxury Place" class="package__image">
            <span class="package__offer">Flash Offer</span>
          </div>
          <!-- /.package__image -->
          <div class="package__info">
            <span class="package__name">Luxury Place</span>

            <div class="package__rooms">
              <div class="package__text">
                <img src="img/map.svg" alt="Icon: map" class="package__icon">
                <span class="package__description">1749 Wheeler Ridge  Delaware</span>
              </div>
              <!-- /.package__text -->
              <div class="package__text">
                <img src="img/user.svg" alt="Icon: user" class="package__icon">
                <span class="package__description">2 x Guests</span>
              </div>
              <!-- /.package__text -->
              <div class="package__text">
                <img src="img/home.svg" alt="Icon: home" class="package__icon">
                <span class="package__description">1 x Room</span>
              </div>
              <!-- /.package__text -->
            </div>
            <!-- /.package__rooms -->
            <div class="package__prices">
              <div class="package__price">
                <span class="price-to">$ 4,500</span>
                <span class="price-after">$ 2,500</span>
              </div>
              <!-- /.package__price -->
              <div class="package__buttons">
                <button data-toggle="modal" class="package__button">Book Now</button>
              </div>
            </div>
            <!-- /.package-prices -->
          </div>
          <!-- /.package__info -->
        </div>
        <!-- /.package -->

        <div class="package packages__package">
          <div class="package__images">
            <img src="img/hotel-5.jpg" alt="Hotel Five Star" class="package__image">
            <span class="package__offer">Flash Offer</span>
          </div>
          <!-- /.package__image -->
          <div class="package__info">
            <span class="package__name">Hotel Five Star</span>

            <div class="package__rooms">
              <div class="package__text">
                <img src="img/map.svg" alt="Icon: map" class="package__icon">
                <span class="package__description">1749 Wheeler Ridge  Delaware</span>
              </div>
              <!-- /.package__text -->
              <div class="package__text">
                <img src="img/user.svg" alt="Icon: user" class="package__icon">
                <span class="package__description">2 x Guests</span>
              </div>
              <!-- /.package__text -->
              <div class="package__text">
                <img src="img/home.svg" alt="Icon: home" class="package__icon">
                <span class="package__description">1 x Room</span>
              </div>
              <!-- /.package__text -->
            </div>
            <!-- /.package__rooms -->

            <div class="package__prices">
              <div class="package__price">
                <span class="price-to">$ 6,500</span>
                <span class="price-after">$ 3,500</span>
              </div>
              <!-- /.package__price -->
              <div class="package__buttons">
                <button data-toggle="modal" class="package__button">Book Now</button>
              </div>
            </div>
            <!-- /.package-prices -->
          </div>
          <!-- /.package__info -->
        </div>
        <!-- /.package -->

        </div>
        <!-- /.packages-wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.packages -->


    <section class="newsletter" data-parallax="scroll" data-image-src="img/newsletter-bg.jpg">
      <div class="newsletter-wrapper">
        <h2 class="newsletter-title newsletter__title">subscribe to our 
        <span class="newsletter-title__strong">Newsletter</span></h2>
        <form action="send.php" method="POST" class="subscribe newsletter__subscribe">
          <input
            type="text"
            class="subscribe__input"
            placeholder="Your email address"
            name="email"
          />
          <button class="subscribe__button" name="newsletter-btn">Send</button>
        </form>
      </div>
      <!-- /.newsletter-wrapper -->
    </section>
    <!-- /.newsletter -->

    <section class="reviews">
      <div class="container">
        <h2 class="reviews__title">What people think about us</h2>
        <div class="swiper-container reviews-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="reviews-slider__item">
                <div class="reviews-slider__profile">
                  <img src="img/reviews-avatar.jpg" alt="Photo: Megan Fox" class="reviews-slider__avatar">
                  <h3 class="reviews-slider__username">Megan Fox</h3>
                  <span class="reviews-slider__date">Stayed 18 Nov, 2019</span>
                  <div class="reviews-slider__raiting">
                    <img src="img/star.svg" alt="star">
                    <img src="img/star.svg" alt="star">
                    <img src="img/star.svg" alt="star">
                    <img src="img/star.svg" alt="star">
                    <img src="img/star.svg" alt="star">
                  </div>
                  <!-- /.reviews-slider__raiting -->
                </div>
                <!-- /.reviews-slider__profile -->
                <p class="reviews-slider__text">It was very nice hotel with cleanliness. 
                  Staff behavior was good and polite. They welcome us very well. Issue was 
                  only that Lift was not in working and we were allotted to 3rd floor and 
                  amenities articles were in corner of gallery which were giving bad feeling. 
                  Breakfast was good and support of the staff was also very nice. Location is 
                  not good as per atmosphere, it is very nearby most of the popular places but 
                  self location in a narrow street is not good. Overall it was a good experience 
                  and could recommend.</p>
              </div>
              <!-- /.reviews-slider__item -->
            </div>
            <!-- /.swiper-slide -->

            <div class="swiper-slide">
              <div class="reviews-slider__item">
                <div class="reviews-slider__profile">
                  <img src="img/reviews-avatar-2.jpg" alt="Photo: Maria Daines" class="reviews-slider__avatar">
                  <h3 class="reviews-slider__username">Maria Daines</h3>
                  <span class="reviews-slider__date">Stayed 20 Jul, 2018</span>
                  <div class="reviews-slider__raiting">
                    <img src="img/star.svg" alt="star">
                    <img src="img/star.svg" alt="star">
                    <img src="img/star.svg" alt="star">
                    <img src="img/star.svg" alt="star">
                    <img src="img/star.svg" alt="star">
                  </div>
                  <!-- /.reviews-slider__raiting -->
                </div>
                <!-- /.reviews-slider__profile -->
                <p class="reviews-slider__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                  Enim, debitis. Quo asperiores quam magni ab reprehenderit sapiente eum omnis nostrum 
                  blanditiis fuga? Ad alias distinctio mollitia quam assumenda nemo dignissimos. Lorem 
                  ipsum dolor sit amet consectetur adipisicing elit. Exercitationem dolor nam perspiciatis 
                  corrupti consequatur maxime error nihil saepe eum dolores dicta est natus optio eos officia 
                  minima, excepturi cumque voluptas?</p>
              </div>
              <!-- /.reviews-slider__item -->
            </div>
            <!-- /.swiper-slide -->

          </div>
          <!-- /.swiper-wrapper -->
          <button class="reviews-slider__button reviews-slider__button--prev"></button>
          <button class="reviews-slider__button reviews-slider__button--next"></button>
        </div>
        <!-- /.reviews-slider -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.reviews -->

    <section class="activities">
      <div class="container">
        <h2 class="activities__title">Other activities</h2>
        <div class="activities-wrapper">
          <div class="card activities__card">
            <img src="img/activity-1.jpg" alt="The curious corner of chamarel" class="card__image">
            <h3 class="card__title">The curious corner of&nbsp;chamarel</h3>
            <button data-toggle="modal" class="card__button">Book Now</button>
          </div>
          <!-- /.card -->
          <div class="card activities__card">
            <img src="img/activity-2.jpg" alt="Gymkhana club golf course" class="card__image">
            <h3 class="card__title">Gymkhana club golf course</h3>
            <button data-toggle="modal" class="card__button">Book Now</button>
          </div>
          <!-- /.card -->
          <div class="card activities__card">
            <img src="img/activity-3.jpg" alt="Tamarind falls hiking trip - full day" class="card__image">
            <h3 class="card__title">Tamarind falls hiking trip&nbsp;-&nbsp;full day</h3>
            <button data-toggle="modal" class="card__button">Book Now</button>
          </div>
          <!-- /.card -->
          <div class="card activities__card">
            <img src="img/activity-4.jpg" alt="The blue marine discovery quest" class="card__image">
            <h3 class="card__title">The blue marine discovery quest</h3>
            <button data-toggle="modal" class="card__button">Book Now</button>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.ativities-wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.activities -->

<?php include('footer.php')?>

<div id="modal" class="modal">
  <div class="modal__overlay"></div>
  <!-- /.modal__overlay -->
  <div class="modal__dialog">
    <a href="#" class="modal__close">
      <img src="img/close.svg" alt="Icon: close">
    </a>
    <h3 class="modal__title modal__title-message">Booking</h3>
    <form action="send.php" method="POST" class="modal__form">
      <input type="text" class="input modal__input" placeholder="Your Full Name*" name="name">
      <input type="text" class="input modal__input" placeholder="Phone Number*" name="phone">
      <input type="text" class="input modal__input" placeholder="Email*" name="email">
      <textarea class="message modal__message" placeholder="Message" name="message"></textarea>
      <div class="modal__btn-info">
        <button class="button modal__button" name="modal-btn">Send</button>
        <span class="modal__info">* Required Fields</span>
      </div>
      <!-- /.modal__btn-info -->
  </div>
  <!-- /.modal__dialog -->
</div>
<!-- /.modal -->