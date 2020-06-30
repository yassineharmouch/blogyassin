<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Accueil Génie informatique</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <!--le lien de laravel mix-->

  <!-- Favicons -->
  <link href="{{ asset('home1/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('home1/assets/img/apple-touch-icon.png') }}')" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
 
  <link href="{{ asset('home1/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('home1/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('home1/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('home1/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('home1/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('home1/assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('home1/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Squadfree - v2.0.1
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="/"><span><i class="fas fa-university"></i>Génie Informatique</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block" style="background-color: skyblue;">
        <ul>
          <li class="active"><a href="#home">Home</a></li>
          <li><a href="#about">About Us</a></li>

          
       <!-- <li class="drop-down"><a href="/admin"> Admin</a>
                   <ul>
                    <li ><a href="#">Gestion Users</a></li>
                    <li><a href="#">Gestion Roles</a></li>
                    <li><a href="#">gestion produits</a> </li>
                    </ul>-->
          </li>
  
          <li><a href="#contact">Contact Us</a></li>
          @guest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('connecter') }}</a>
          </li>
          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('enregistrer') }}</a>
              </li>
          @endif
      @else
          <li >
              

                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Quitter') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
           
          </li>
      @endguest


        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>License Génie Informatique</h1>
      <h2>Nous sommes des etudiant de la license Génie informatique </h2>
      <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <main id="main">

      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container">
  
          <div class="row no-gutters">
            <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
              <div class="content">
                <h3>Génie informatique</h3>
                <p>Le génie informatique, ou l'ingénierie informatique, est une discipline qui traite de la conception, du développement et de la fabrication de systèmes informatiques, aussi bien d'un point de vue matériels que logiciels.</p>
  
              
                <a href="#" class="about-btn">About us <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
            <div class="col-xl-7 d-flex align-items-stretch">
              <div class="icon-boxes d-flex flex-column justify-content-center">
                <div class="row">
                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                    <i class="bx bx-receipt"></i>
                    <h4>CONDITION D'ADMISSION</h4>
                    <p>   L’accès aux filières Licence en Sciences et Techniques peut se faire également à différents niveaux de la licence, sur étude de dossier et/ou par voie de test ou de concours, pour les
                         étudiants satisfaisant aux pré-requis relatifs à ces niveaux et qui sont précisés dans le descriptif de la filière.</p>
                  </div>
                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                    <i class="bx bx-cube-alt"></i>
                    <h4>compétences visées</h4>
                    <p>   Technicien supérieur en développement d’application en C++ et JAVA ; Technicien supérieur en réseaux locaux ; Technicien supérieur en SGBD-R : installation, configuration et administration des SGBD ; WebMaster et développeur des sites web dynamiques</p>
                  </div>
                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                    <i class="bx bx-images"></i>
                    <h4>Objectifs de la  formation</h4>
                    <p>
                - Avoir une culture de base scientifique ;<br>
                -  Acquérir une base solide dans les axes majeurs et fondamentaux de la discipline informatique :<br>
              Algorithmique, Programmation, Bases de Données, Technologies Web, Systèmes d’Exploitation et 
              Réseaux Informatiques,... ;<br>
  
               -  Développer un savoir-faire technique en informatique : technologie objet, informatique distribuée,
              architectures client-serveur et n-tiers, applications hétérogènes,… 
               </p>
                  </div>
                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                    <i class="bx bx-shield"></i>
                  
                    <h4>COORDINATEUR</h4>
                    <p>Coordinateur: Pr.Mohamed EL BRAK</p>
                    <i class="bx bx-envelope"></i>
                    <p>elbrak.m@gmail.com</p>
                  </div>
                </div>
              </div><!-- End .content-->
            </div>
          </div>
  
        </div>
      </section><!-- End About Section -->
  
      <!-- =======Annonce Section ======= --
      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <h2>Annonces</h2>
        <p>ici vous trouver touts les annonoces poster par adminstration et par les entreprises membres a notre universite</p>
      </div>
      @yield('content')
  
      <!-- ======= Portfolio Section ======= --
      <section id="portfolio" class="portfolio">
        <div class="container">
  
          <div class="section-title" data-aos="fade-in" data-aos-delay="100">
            <h2>Annonces</h2>
            <p>vous trouver ici touts ce qui conncerne les evenments universitaires </p>
          </div>
  
          <div class="row" data-aos="fade-in">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">GINF</li>
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-web">Web</li>
              </ul>
            </div>
          </div>
  
          <div class="row portfolio-container" data-aos="fade-up">
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="{{ asset('assets/img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="{{ asset('assets/img/portfolio/portfolio-2.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="{{ asset('assets/img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="{{ asset('assets/img/portfolio/portfolio-3.jpg') }}" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Portfolio Section -->
  
      <!-- ======= Testimonials Section ======= --
      <section id="testimonials" class="testimonials section-bg">
        <div class="container">
  
          <div class="section-title" data-aos="fade-in" data-aos-delay="100">
            <h2>Testimonials</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
  
          <div class="owl-carousel testimonials-carousel">
  
            <div class="testimonial-item" data-aos="fade-up">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
            </div>
  
            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
            </div>
  
            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
            </div>
  
            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
            </div>
  
            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Testimonials Section -->
  
      <!-- ======= Team Section ======= -->
      <section id="team" class="team">
        <div class="container">
  
          <div class="section-title" data-aos="fade-in" data-aos-delay="100">
            <h2>Notre Equipe</h2>
            <p>nous sommes des étudiants en licence Génie informatique </p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-4 col-md-6">
              <div class="member" data-aos="fade-up">
                <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Harmouch Yassin</h4>
                  <span>étudiant</span>
                  <div class="social">
                    <a href="https://twitter.com/HarmouchY"><i class="icofont-twitter"></i></a>
                    <a href="https://www.facebook.com/harmouc"><i class="icofont-facebook"></i></a>
                    <a href="https://www.instagram.com/yassineharmouch05/"><i class="icofont-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6">
              <div class="member" data-aos="fade-up" data-aos-delay="150">
                <div class="pic"><img src="assets/img/team/team-5.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Tighdouini Abdelatif</h4>
                  <span>étudiant</span>
                  <div class="social">
                    <a href="https://twitter.com/etteghdouini"><i class="icofont-twitter"></i></a>
                    <a href="https://www.facebook.com/abdellatifettag"><i class="icofont-facebook"></i></a>
                    <a href="https://www.instagram.com/abdellatifettagd/"><i class="icofont-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6">
              <div class="member" data-aos="fade-up" data-aos-delay="300">
                <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Elbrak mohamed</h4>
                  <span>Encadrant</span>
                  
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Team Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Contact</h2>
          <p>ce site web est un fruit de nous travail au projet de fin d'etude qui permet d'etablir une connections entre les etudiant de la lisence génie informatique et leur professeurs </p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Notre Adresse</h3>
              <p>Route Boukhalef, Tanger, Maroc</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>envoyer un Email</h3>
              <p>ettagdouini@ettagdouini.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Appelez nous</h3>
              <p>+212 6424449646</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.5706028400896!2d-5.898070384739683!3d35.736777580181446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b87d70ba911f7%3A0xeac7ab752a671db2!2sFacult%C3%A9%20des%20Sciences%20et%20Techniques%20de%20Tanger!5e0!3m2!1sfr!2sma!4v1590661621278!5m2!1sfr!2sma" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

            @yield('contact')
         

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

 <!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="footer-info" data-aos="fade-up" data-aos-delay="50">
            <h3>Génie informatique</h3>
            <p class="pb-3"><em>la lisence Génie informatique est une filière qui perment d'informer des etudiants dans le domaine informatique</em></p>
            <p>
              Route Boukhalef  <br>
              Tanger, Maroc<br><br>
              <strong>Phone:</strong> +212 642449646<br>
              <strong>Email:</strong> abdellatifettag@gmail.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://web.facebook.com/?_rdc=1&_rdr" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="150">
          <h4>LIENS UTILES</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">a propos de nous </a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">informations</a></li>
           
          </ul>
        </div>

        <div class="col-lg-2 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="250">
          <h4>Our Services</h4>
          <!--<ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
          </ul> -->
        </div>
     
        <div class="col-lg-4 col-md-6 footer-newsletter" data-aos="fade-up" data-aos-delay="350">
          <h4>Our Newsletter</h4>
          <p>Inscrivez-vous à la newsletter</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>

        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>FST DE TANGER</span></strong>. All Rights Reserved
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('/home1/assets/vendor/jquery/jquery.min.js') }} "></script>
<script src="{{ asset('/home1/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('home1/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('home1/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('home1/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('home1/assets/vendor/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('home1/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('home1/assets/vendor/venobox/venobox.min.js') }}"></script>
<script src="{{ asset('home1/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('home1/assets/vendor/aos/aos.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('home1/assets/js/main.js') }}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
  
</body>

</html>