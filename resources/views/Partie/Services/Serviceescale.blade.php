@extends('Layouts.master')

@section('content1')
<main id="main">

<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/1_6.png');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>SERVICES</h2>
      <ol>
        <li><a href="{{ route('welcom') }}">acceuil</a></li>
        <li>About</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->














<section id="about" class="services">
    <div class="container" data-aos="fade-up">

      <div class="row position-relative">

        <div class="col-lg-7 about-img" style="background-image: url(assets/img/GESTIONESC.png)"></div>

        <div class="col-lg-7">
          <h1>Maritime</h1>
          <div class="notre-services">
            <h3>Gestion Escales</h3>

            <p>La gestion des escales maritimes au port de Safi est entièrement dématérialisée. L'agent maritime, à travers le système de la communauté portuaire, fait la demande à la capitainerie pour l'attribution d'un poste à quai et transmet numériquement l'ensemble des documents de l'escale. L'agent maritime peut également, à travers le système de la communauté portuaire, faire les demandes de services complémentaires, tels que la demande d'attestation d'escale, la demande de location d'une pilotine, la demande de déballastage ou de travaux, etc.

                Ce service permet de consulter d'autres types d'informations, tels que le programme de rotation des navires, les informations sur les caractéristiques techniques du port ou le plan d'accostage.</p>

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
              <p>Réduire les attentes des navires</p>

            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-check-circle"></i>
            <div>
              <p>Reduire les attentes des navires
                Améliorer la sécurité du trafic maritime dans la zone portuaire de SAFI en réduisant le temps de dérive des grands navires en rade</p>

            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-check-circle"></i>
            <div>

              <p>Optimiser l'affectation des services aux navires (Pilotage, Remorquage et lamanage)</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-check-circle"></i>
            <div>

              <p>Réduction des émissions du CO2</p>
            </div>
          </div><!-- End Icon Box -->

        </div>
      </div>

    </div>
  </section><!-- End Alt Services Section --


































@endsection
