
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MARSA MAROC</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"><!-- icons i -->
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">   <!-- biblio  pour fenetre modal -->
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"><!-- pour imges slide-->

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo1">MARSA <p class='logo2'>MAROC</p></h1>


      <nav id="navbar" class="navbar">
        <ul>
          <li>
            <a  class="nav-link scrollto active" href="">Acceuil</a>
          </li>
          <li><a class="nav-link scrollto" href="#about">A props Nous</a></li>
          <li><a class="nav-link scrollto" href="#featured-services">Services</a></li>
          <li><a class="nav-link scrollto " href="#actualitegb">Actualite</a></li>

          <li class="dropdown"><a href="#"><span>Connexion</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a  class="nav-link scrollto "href="{{ route('registration') }}">Inscription</a><li>
              <li><a  class="nav-link scrollto "href="{{ route('login') }}">login</a><li>

            </ul>
          </li>
          <li><a class="nav-link scrollto" href="contactacceil">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header>







@yield('content1')














































<!--FOOTER -->
 <!-- ======= Footer ======= -->
 <footer id="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3 class='footer-titre'>MARSA MAROC</h3>
            <p>
                BP.8 font de mer Safi <br>
             SAFI,MAROC<br>

              <strong>Phone:</strong> 212 5 24 46 23 90<br>
              <strong>Email:</strong> safi@marsamaroc.co.ma<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>NOUS CONNAITRE</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="">Acceuil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#actualitegb">Actualite</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#featured-services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">connecter</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contactacceil">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Notre Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Escale maritime</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tracbilite</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services-client</a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4> Notre Social Networks</h4>

            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4 ">
      <h6 class="copyright">
        &copy; Copyright <strong><span>MARSA MAROC</span></strong>. TOUS LES DROITS CONSERVES
      </h6>

    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script><!--counter des operations-->
  <script src="assets/vendor/aos/aos.js"></script><!--animation-->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script><!-- image modale fenetre-->

  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script><!--slider img-->



  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
