<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">


      <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">


      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.min.css">


       @vite('resources/css/app.css')
       @vite('resources/js/app.js')


      <title>Cactus website</title>
   </head>
   <body>

      <header class="header" id="header">
         <nav class="nav container">
            <a href="#" class="nav__logo">
               <i class="ri-cactus-line"></i> Cactus
            </a>

            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <li class="nav__item">
                     <a href="#home" class="nav__link active-link">Home</a>
                  </li>

                  <li class="nav__item">
                     <a href="#new" class="nav__link">News</a>
                  </li>

                  <li class="nav__item">
                     <a href="#shop" class="nav__link">Shop</a>
                  </li>

                  <li class="nav__item">
                     <a href="#care" class="nav__link">Care</a>
                  </li>

                  <li class="nav__item">
                     <a href="#contact" class="nav__link">Contact</a>
                  </li>
               </ul>
               <!--      CLOSE BUTTON         -->
               <div class="nav__close" id="nav-close">
                  <i class="ri-close-line"></i>
               </div>
            </div>

            <div class="nav__actions">
               <i class="ri-user-line"></i>
               <i class="ri-shopping-cart-line"></i>

               <!--        TOGGLE BUTTON       -->

               <div class="nav__toggle" id="nav-toggle">
                  <i class="ri-menu-line"></i>
               </div>
            </div>
         </nav>
      </header>


      <main class="main">

         <section class="home section" id="home">
            <div class="home__container container grid">
               <img src="{{ Vite::asset('resources/img/home-cactus.png') }}" alt="image" class="home__img">

               <div class="home__data">
                  <h1 class="home__title">
                     ORNAMENTAL <br> <span>PLANTS</span> FOR <br> YOUR HOME <br>
                  </h1>

                  <p class="home__description">
                     We design ornamental plants for your
                     home in-house for an original style and
                     quality you won't find anywhere else.
                  </p>

                  <div class="home__buttons">
                     <a href="#" class="button">
                        <span>
                           <i class="ri-arrow-right-line"></i>
                        </span>
                        GO TO SHOP
                     </a>

                     <a href="#" class="button__link">MORE DETAILS</a>
                  </div>
               </div>
            </div>
         </section>


         <section class="new section" id="new">
               <div class="new__container container grid">
                  <div class="new__data">
                     <h2 class="section__title">
                        NEW PLANTS FOR <br> YOUR HOME
                     </h2>

                     <p class="new__description">
                        Select new ornamental plants for home
                        decoration and obtain an atmosphere of
                        harmony and freshness.
                     </p>
                  </div>
                  <div class="new__content grid">
                     <article class="new__card">
                        <img src="{{ Vite::asset('resources/img/new-cactus-1.png') }}" alt="image" class="new__img">
                        <h2 class="new__title">Gymnocalycium Cactus</h2>
                     </article>

                     <article class="new__card">
                        <img src="{{ Vite::asset('resources/img/new-cactus-2.png') }}" alt="image" class="new__img">
                        <h2 class="new__title">Lily Pad Succulent</h2>
                     </article>

                     <article class="new__card">
                        <img src="{{ Vite::asset('resources/img/new-cactus-3.png') }}" alt="image" class="new__img">
                        <h2 class="new__title">Rebutia Cactus</h2>
                     </article>
                  </div>
               </div>
         </section>

         <section class="shop section" id="shop">
            <h2 class="section__title">
               THE BEST PLANTS
            </h2>

            <div class="shop__container container grid">
               <article class="shop__card">
                  <img src="{{ Vite::asset('resources/img/shop-cactus-1.png') }}" alt="" class="shop__img">

                  <h3 class="shop__title">Gymnocalycium <br> Cactus</h3>
                  <span class="shop__price">$15</span>
                  <button class="shop__button">
                     <i class="ri-shopping-bag-line"></i>
                  </button>
               </article>

               <article class="shop__card">
                  <img src="{{ Vite::asset('resources/img/shop-cactus-2.png') }}" alt="" class="shop__img">

                  <h3 class="shop__title">Echeveria <br> Succulent</h3>
                  <span class="shop__price">$10</span>
                  <button class="shop__button">
                     <i class="ri-shopping-bag-line"></i>
                  </button>
               </article>

               <article class="shop__card">
                  <img src="{{ Vite::asset('resources/img/shop-cactus-3.png') }}" alt="" class="shop__img">

                  <h3 class="shop__title">Ferocactus <br> Cactus</h3>
                  <span class="shop__price">$15</span>
                  <button class="shop__button">
                     <i class="ri-shopping-bag-line"></i>
                  </button>
               </article>

               <article class="shop__card">
                  <img src="{{ Vite::asset('resources/img/shop-cactus-4.png') }}" alt="" class="shop__img">

                  <h3 class="shop__title">Key Lime Pie <br> Succulent</h3>
                  <span class="shop__price">$10</span>
                  <button class="shop__button">
                     <i class="ri-shopping-bag-line"></i>
                  </button>
               </article>

               <article class="shop__card">
                  <img src="{{ Vite::asset('resources/img/shop-cactus-5.png') }}" alt="" class="shop__img">

                  <h3 class="shop__title">Melocactus <br> Cactus</h3>
                  <span class="shop__price">$15</span>
                  <button class="shop__button">
                     <i class="ri-shopping-bag-line"></i>
                  </button>
               </article>
            </div>
         </section>

         <section class="care section" id="care">
            <h2 class="section__title">
               CARE AND HEALTH FOR <br> YOUR CACTUS
            </h2>

            <div class="care__container container grid">
               <img src="{{ Vite::asset('resources/img/care-cactus.png') }}" alt="image" class="care__img">

               <ul class="care__list">
                  <li class="care__item">
                     <i class="ri-checkbox-fill"></i>
                     <p>
                        In cold times, add water once a month
                        and during the summer do it when the
                        soil is very dry.
                     </p>
                  </li>

                  <li class="care__item">
                     <i class="ri-checkbox-fill"></i>
                     <p>
                        Have good drainage so that the cactus
                        does not accumulate water.
                     </p>
                  </li>

                  <li class="care__item">
                     <i class="ri-checkbox-fill"></i>
                     <p>
                        Place your cactus or succulent in a
                        location with indirect light.
                     </p>
                  </li>

                  <li class="care__item">
                     <i class="ri-checkbox-fill"></i>
                     <p>
                        Do not water more than necessary, as
                        it can accumulate too much water and
                        the plant will rot.
                     </p>
                  </li>

                  <li class="care__item">
                     <i class="ri-checkbox-fill"></i>
                     <p>
                        Do not expose to high temperatures, as
                        succulent plants are not fans of
                        extremes.
                     </p>
                  </li>
               </ul>
            </div>

         </section>

         <section class="contact section" id="contact">
            <h2 class="section__title">
               YOU WANT A CACTUS <br> CONTACT US
            </h2>

            <div class="contact__container container grid">
               <img src="{{ Vite::asset('resources/img/contact-cactus.png') }}" alt="image" class="contact__img">

               <div class="contact__content">
                  <div>
                     <h3 class="contact__title">Write to us</h3>

                     <div class="contact__social">
                        <a href="https://www.whatsapp.com/?lang=ru_RU" target="_blank">
                           <i class="ri-whatsapp-fill"></i>
                        </a>

                        <a href="https://web.telegram.org/a/" target="_blank">
                           <i class="ri-messenger-fill"></i>
                        </a>

                        <a href="https://mail.google.com/mail/u/1/#inbox" target="_blank">
                           <i class="ri-mail-fill"></i>
                        </a>
                     </div>
                  </div>

                  <div>
                     <h3 class="contact__title">Call us at the numbers</h3>

                     <address class="contact__info">
                           +10-947-3572-342 <br>
                           +22-745389
                     </address>

                  </div>

                  <div>
                     <h3 class="contact__title">Find us here</h3>

                     <address class="contact__info">
                        Lima - Sun City - Peru <br>
                        Av. Moon #4321
                     </address>

                  </div>

               </div>
            </div>
         </section>
      </main>

      <footer class="footer">
         <div class="footer__container container grid">
            <div>
               <a href="#" class="footer__logo">
                  <i class="ri-cactus-line"></i> Cactus
               </a>

               <p class="footer__description">
                  Choose the best <br> plants for your home.
               </p>
            </div>

            <div class="footer__content grid">
               <div>
                  <h3 class="footer__title">COMPANY</h3>

                  <ul class="footer__links">
                     <li>
                        <a href="#" class="footer__link">About Us</a>
                     </li>

                     <li>
                        <a href="#" class="footer__link">Products</a>
                     </li>

                     <li>
                        <a href="#" class="footer__link">Features</a>
                     </li>
                  </ul>
               </div>

               <div>
                  <h3 class="footer__title">INFORMATION</h3>

                  <ul class="footer__links">
                     <li>
                        <a href="#" class="footer__link">Blog & News</a>
                     </li>

                     <li>
                        <a href="#" class="footer__link">Contacts Us</a>
                     </li>

                     <li>
                        <a href="#" class="footer__link">FAQs</a>
                     </li>
                  </ul>
               </div>

               <div>
                  <h3 class="footer__title">SOCIAL MEDIA</h3>

                  <div class="footer__social">
                     <a href="https://www.facebook.com/?locale=ru_RU" target="_blank" class="footer__social-link">
                        <i class="ri-facebook-circle-fill"></i>
                     </a>

                     <a href="https://twitter.com/?lang=ru" target="_blank" class="footer__social-link">
                        <i class="ri-instagram-fill"></i>
                     </a>

                     <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                        <i class="ri-twitter-x-line"></i>
                     </a>
                  </div>
               </div>
            </div>
         </div>

         <span class="footer__copy">&#169; MLK</span>
      </footer>

      <a href="#" class="scrollup" id="scroll-up">
         <i class="ri-arrow-up-line"></i>
      </a>

   </body>
</html>
