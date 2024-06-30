@extends('Layouts.master')

@section('content1')
<main id="main">

<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/1_6.png');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>SERVICES</h2>
      <ol>
        <li><a href="{{ route('welcom') }}">acceuil</a></li>
        <li>Services client</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->














<section id="about" class="services">
    <div class="container" data-aos="fade-up">

      <div class="row position-relative">

        <div class="col-lg-7 about-img" style="background-image: url(assets/img/GESTIONESC.png)"></div>

        <div class="col-lg-7">
          <h1>Services client</h1>
          <div class="notre-services">
            <h3>Client</h3>

            <p>Grâce à ces services, les clients ont le droit de connaître où se trouve leur navire contenant leurs marchandises. De plus, ils ont le choix du mode de transport pour acheminer leurs marchandises selon leurs préférences. Enfin, ils peuvent également obtenir des informations sur le délai d'arrivée prévu de leurs marchandises</p>

            <div class="watch-video d-flex align-items-center position-relative">
              <i class="bi bi-play-circle"></i>
              <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox stretched-link">Watch Video</a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- End About Section -->










  <section id="alt-services" class="alt-services">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-around gy-4">
        <div class="col-lg-6 img-bg" style="background-image: url(assets/img/1_6.png);" data-aos="zoom-in" data-aos-delay="100"></div>

        <div class="col-lg-5 d-flex flex-column justify-content-center">
          <h3>Les Avantages</h3>


          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
            <i class="bi bi-check-circle"></i>
            <div>
              <p>le client permet de suivre en temps réel le statut de leurs marchandises et de planifier leurs opérations en conséquence.</p>

            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-check-circle"></i>
            <div>
              <p>Les clients ont le droit de choisir le mode de transport qui convient le mieux à leurs besoins</p>

            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-check-circle"></i>
            <div>

              <p> En connaissant le délai d'arrivée prévu de leurs marchandises, les clients peuvent mieux planifier leurs activités commerciales, éviter les retards et réduire les coûts liés à la gestion des stocks ou à la production.</p>
            </div>
          </div><!-- End Icon Box -->



        </div>
      </div>

    </div>
  </section><!-- End Alt Services Section --


































@endsection
