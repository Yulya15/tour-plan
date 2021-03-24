<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Best Tour Plan - Hotel Booking</title>
    <link rel="icon" href="https://yasnikowa.ru/tour-plan/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="https://yasnikowa.ru/tour-plan/favicon.ico" type="image/x-icon">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;400;600;700&family=Nunito:wght@400;600;800&display=swap" rel="preload"> 
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <header class="navbar navbar_mobile_fixed">
      <div class="container">
        <div class="navbar-top">
          <a href="index.php" class="logo">
            <img
              src="img/horizontal-logo.svg"
              alt="Logo: Best Tour Plan"
              class="logo__image"
            />
          </a>
          <form action="#" class="search navbar__search navbar__search_mobile_hidden">
            <input
              type="text"
              class="search__input"
              placeholder="Search Location"
            />
            <button class="search__button">
              <img src="img/search.svg" alt="Icon: search" />
            </button>
          </form>
          <a href="#" class="user navbar__user navbar__user_mobile_hidden">
            <img
              src="img/user-avatar.jpg"
              alt="Avatar: Nathan"
              class="user__avatar"
            />
            <span class="user__name">Nathan</span>
          </a>
          <!-- /.user -->
          <button class="menu-button navbar-top__menu-button">
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
          </button>
        </div>
        <!-- /.navbar-top -->       
      </div>
      <!-- /.container -->

      <nav class="navbar-bottom">
        <div class="container">
          <ul class="navbar-menu">
            <li class="navbar-menu__item navbar-menu__item_mobile_visible">
              <a href="#" class="user navbar__user navbar__user_mobile_visible">
                <img
                  src="img/user-avatar.jpg"
                  alt="Avatar: Nathan"
                  class="user__avatar"
                />
                <span class="user__name user__name_light">Nathan</span>
              </a>
              <!-- /.user -->
            </li>
            <li class="navbar-menu__item navbar-menu__item_mobile_visible">
              <form action="#" class="search navbar__search navbar__search_mobile_visible">
                <input
                  type="text"
                  class="search__input"
                  placeholder="Search Location"
                />
                <button class="search__button">
                  <img src="img/search.svg" alt="Icon: search" />
                </button>
              </form>
            </li>
            <li class="navbar-menu__item" data-aos="fade-right" data-aos-delay="100">
              <a href="#" class="navbar-menu__link">All Deals</a>
            </li>
            <li class="navbar-menu__item" data-aos="fade-right" data-aos-delay="200">
              <a href="#" class="navbar-menu__link">Hotels</a>
            </li>
            <li class="navbar-menu__item" data-aos="fade-right" data-aos-delay="300">
              <a href="#" class="navbar-menu__link">Activities</a>
            </li>
            <li class="navbar-menu__item" data-aos="fade-right" data-aos-delay="400">
              <a href="#" class="navbar-menu__link">Hotel Day Packages</a>
            </li>
            <li class="navbar-menu__item" data-aos="fade-right" data-aos-delay="500">
              <a href="#" class="navbar-menu__link">Restaurants</a>
            </li>
            <li class="navbar-menu__item" data-aos="fade-right" data-aos-delay="600">
              <a href="#" class="navbar-menu__link">Events</a>
            </li>
            <li class="navbar-menu__item" data-aos="fade-right" data-aos-delay="700">
              <a href="#" class="navbar-menu__link">Rodrigues</a>
            </li>
          </ul>
          <!-- /.navbar-menu -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar-bottom --> 
    </header>

    <nav class="breadcrumb">
      <div class="container">
        <ul class="breadcrumb-list">
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Home</a>
          </li>
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Flash Offers</a>
          </li>
          <li class="breadcrumb-list__item">Grand Hilton Hotel</li>
        </ul>
      </div>
      <!-- /.container -->
    </nav>
    <!-- /.breadcrumb -->