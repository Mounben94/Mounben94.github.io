<?php

if (!isset($_GET['load_url']) || $_GET['load_url'] !== 'true') {
  header("Location: load_url?current_url=" . urlencode($_SERVER['REQUEST_URI']));
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Site officiel de Mounir BENTEFRIT</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <link rel="stylesheet" href="css/swiper.min.css">
  <link href="css/style.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Open+Sans:300,400,700" rel="stylesheet">


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <header class="hero">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-6 col-xs-12">
              <nav>
                <div id="menu-toggle">
                  <div class="hamburger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                  </div>
                  <div class="cross">
                    <span class="line"></span>
                    <span class="line"></span>
                  </div>
                </div>
                <ul class="main-nav">
                  <li><a href="#">Accueil</a></li>
                  <li><a href="#">Mon portfolio</a></li>
                  <li><a href="#">A propos de moi</a></li>
                  <li><a href="contact-me">Contactez-moi</a></li>
                </ul>
              </nav>
              <!-- <a href="#" class="menu"><img src="assets/menu.png"></a> -->
              <style>
              @import url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0');
              .material-symbols-outlined {
                  font-family: 'Material Symbols Outlined';
                  display: flex;
                  align-items: center;
                  font-size: 20px;
                }


                /* Ajoutez ce style CSS pour aligner la flèche à droite et limiter la largeur du bouton */
                .btn {
                    display: flex;
                    max-width: 370px; /* Ajustez la largeur maximale selon vos besoins */
                    align-items: center;
                }

                .btn-text {
                    margin-right: 10px; /* Ajustez la marge selon vos besoins */
                }
                </style>
              <div class="hero-text">
                <h1>Mounir BENTEFRIT<br></h1>
                <h3>Étudiant à l'IUT de Créteil-Vitry</h3>
                <a href="#" class="btn btn-lg btn-primary">
                    <span class="btn-text">En savoir plus</span>
                    <span class="material-symbols-outlined">stat_minus_1</span>
                </a>
                <ul class="social-links">
                  <li class="label">Mes réseaux sociaux</li>
                  <br>
                  <br>
                  <li><a href="#"><img src="assets/behance.png"></a></li>
                  <li><a href="https://www.linkedin.com/in/mounir-bentefrit-9851b6251/" target="_blank"><img src="assets/linkedin-logo.png"></a></li>
                  <li><a href="#"><img src="assets/twitter.png"></a></li>
                  <li><a href="https://www.github.com/Mounben94" target="_blank"><img src="assets/github.png"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>

      <section class="case-study">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h4 class="sub-heading">Projets</h4>
              <h1 class="heading purple"><span class="purple">Retrouvez ici</span>  <br>mes derniers projets réalisés.</h1>
              <!-- Swiper -->
              <div class="swiper-container client-swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide client-box">
                    <img src="assets/logo-1.png" class="client-logo">
                    <h3 class="text-left title">Réalisation d'un réseau hospitalier</h3>
                    <p class="text-left tag">Mise en situation professionnelle - SAÉ 21</p>
                    <p class="text-left"><a href="#">Know More &#8594;</a></p>
                  </div>
                  <div class="swiper-slide client-box">
                    <img src="assets/logo-2.png" class="client-logo">
                    <h3 class="text-left title">User Experience design for the AI</h3>
                    <p class="text-left tag">Branding, UI, Website</p>
                    <p class="text-left"><a href="#">Know More &#8594;</a></p>
                  </div>
                  <div class="swiper-slide client-box">
                    <img src="assets/logo-3.png" class="client-logo">
                    <h3 class="text-left title">Rebranding of the best motion studio</h3>
                    <p class="text-left tag">Branding, UI, Website</p>
                    <p class="text-left"><a href="#">Know More &#8594;</a></p>
                  </div>
                  <div class="swiper-slide client-box">
                    <img src="assets/logo-1.png" class="client-logo">
                    <h3 class="text-left title">Visual identity for upsidedown</h3>
                    <p class="text-left tag">Branding, UI, Website</p>
                    <p class="text-left"><a href="#">Know More &#8594;</a></p>
                  </div>
                </div>
                
              </div>
              <!-- Add Arrows -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
        </div>
      </section>

      <section class="testimonial">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h4 class="sub-heading">Happy</h4>
              <h1 class="heading pink"><span class="pink">Client's</span> hello <br>testimonials</h1>
            </div>
          </div>  
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <!-- Swiper -->
              <div class="swiper-container testimonial-swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide testimonial-box yellow">
                    <h1>Pixel Perfect design</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- John Doe</p>
                      <p class="designation">Founder, Arrow</p>
                    </div>
                  </div>
                  <div class="swiper-slide testimonial-box purple">
                    <h1>Minimal and Clean</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- Rocky Hych</p>
                      <p class="designation">CTO, Upside Down</p>
                    </div>
                  </div>
                  <div class="swiper-slide testimonial-box blue">
                    <h1>Built with Bootstrap</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- John Doe</p>
                      <p class="designation">Founder, Arrow</p>
                    </div>
                  </div>
                  <div class="swiper-slide testimonial-box pink">
                    <h1>Responsive template</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- Rocky Hych</p>
                      <p class="designation">CTO, Upside Down</p>
                    </div>
                  </div>
                  <div class="swiper-slide testimonial-box yellow">
                    <h1>Pixel Perfect</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- John Doe</p>
                      <p class="designation">Founder, Arrow</p>
                    </div>
                  </div>
                  <div class="swiper-slide testimonial-box purple">
                    <h1>Minimal and Clean</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- Rocky Hych</p>
                      <p class="designation">CTO, Upside Down</p>
                    </div>
                  </div>
                  <div class="swiper-slide testimonial-box blue">
                    <h1>Pixel Perfect</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- John Doe</p>
                      <p class="designation">Founder, Arrow</p>
                    </div>
                  </div>
                  <div class="swiper-slide testimonial-box pink">
                    <h1>Minimal and Clean</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- Rocky Hych</p>
                      <p class="designation">CTO, Upside Down</p>
                    </div>
                  </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Statistics -->
      <section class="stats">
        <div class="container">
          <div class="row">
            <div class="col-md-4 text-center stat-box">
              <h1 class="purple">+<span class="counter">200</span></h1>
              <h3>heures d'apprentissage en autonomie</h3>
            </div>
            <div class="col-md-4 text-center stat-box">
              <h1 class="blue counter">3</h1>
              <h3>Projets</h3>
            </div>
            <div class="col-md-4 text-center stat-box">
              <h3>Âge : </h3>
              <h1 class="pink"><span class="counter">18</span></h1>
              <h3>ans</h3>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact Banner -->
      <section class="contact-banner">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <style>

                #btn-center {
                color: #fff;
                padding: 25px 25px;
                background-color: #38D2D2;
                background-image: radial-gradient(93% 87% at 87% 89%, rgba(0, 0, 0, 0.23) 0%, transparent 86.18%), radial-gradient(66% 66% at 26% 20%, rgba(255, 255, 255, 0.55) 0%, rgba(255, 255, 255, 0) 69.79%, rgba(255, 255, 255, 0) 100%);
                box-shadow: inset -3px -3px 9px rgba(255, 255, 255, 0.25), inset 0px 3px 9px rgba(255, 255, 255, 0.3), inset 0px 1px 1px rgba(255, 255, 255, 0.6), inset 0px -8px 36px rgba(0, 0, 0, 0.3), inset 0px 1px 5px rgba(255, 255, 255, 0.6), 2px 19px 31px rgba(0, 0, 0, 0.2);
                border-radius: 14px;
                font-weight: bold;
                font-size: 16px;

                border: 0;

                user-select: none;
                -webkit-user-select: none;
                touch-action: manipulation;

                cursor: pointer;
                display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-left: 20%;
                    margin-right: 20%;
              }
            </style>
              <h1 style="font-size: 40px;">Vous souhaitez rentrer en contact avec moi ?</h1>
              <a href="contact-me" id="btn-center">
                <span class="btn-text">Découvrez les différents moyens pour me contacter</span>
                <span class="material-symbols-outlined">touch_app</span>
            </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Footer -->
      <footer>
        <div class="container-fluid">
          <div class="row footer">
            <div class="col-md-12 text-center">
              <h1>Mounir<br><span>BENTEFRIT</span></h1>
              <ul class="social-links">
                <li><a href="#"><img src="assets/behance.png"></a></li>
                <li><a href="#"><img src="assets/dribbble.png"></a></li>
                <li><a href="#"><img src="assets/twitter.png"></a></li>
                <li><a href="#"><img src="assets/github.png"></a></li>
              </ul>
            </div>
          </div>
          <div class="row sub-footer">
            <div class="col-md-12 text-center">
              <p>© Mounir BENTEFRIT</a> | 2023 - Tous droits réservés.</a></p>
            </div>
          </div>
        </div>
      </footer>

      <!-- Some Javascript -->
      <script src="js/jquery-2.1.1.js"></script>
      <script src="js/swiper.jquery.min.js"></script>
      <!-- Initialize Client Swiper -->
      <script>
      var swiper1 = new Swiper('.client-swiper', {
        slidesPerView: 3,
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 60,
        // Responsive breakpoints
        breakpoints: {
          // when window width is <= 320px
          320: {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: '.swiper-pagination'
          },
          // when window width is <= 480px
          480: {
            slidesPerView: 1,
            spaceBetween: 20
          },
          // when window width is <= 640px
          640: {
            slidesPerView: 1,
            spaceBetween: 30
          }
        }
      });
      // Initialize Testimonial Swiper
      var swiper2 = new Swiper('.testimonial-swiper', {
        slidesPerView: 3,
        pagination: '.swiper-pagination',
        paginationClickable: true,
        spaceBetween: 30,
        grabCursor: true,
        freeMode: true,
        breakpoints: {
          // when window width is <= 320px
          320: {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          // when window width is <= 480px
          480: {
            slidesPerView: 1,
            spaceBetween: 10
          },
          // when window width is <= 640px
          640: {
            slidesPerView: 1,
            spaceBetween: 10
          }
        }
      });
      </script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>
      <script>
      // Counterup
      $('.counter').counterUp({
        time: 1000
      });

      // Main Navigation
      $('#menu-toggle').click(function(){
        $(this).toggleClass('open'),
        $('.main-nav').toggleClass('show-it');
      })
      </script>

      <!-- Google Analytics - You should remove this -->
      <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-29231762-2', 'auto');
      ga('send', 'pageview');

      </script>
    </body>
    </html>
