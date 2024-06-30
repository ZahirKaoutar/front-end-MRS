@extends('Layouts.master')

@section('content1')
<main id="main">

<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/1_6.png');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>SERVICES</h2>
      <ol>
        <li><a href="{{ route('welcom') }}">acceuil</a></li>
        <li>Services Traçabilité</li>

      </ol>

    </div>
  </div><!-- End Breadcrumbs -->














<section id="about" class="services">
    <div class="container" data-aos="fade-up">

      <div class="row position-relative">

        <div class="col-lg-7 about-img" style="background-image: url(assets/img/GESTIONESC.png)"></div>

        <div class="col-lg-7">
          <h1>Traçabilité</h1>
          <div class="notre-services">
            <h3>Track and trace</h3>

            <p>Le service Track and trace offre aux transitaires, transporteurs et importateurs, des informations sur la traçabilité permettant de suivre en temps réel l'évolution de leurs unités de fret sur les différents points de contrôle et de traitement dans les zones portuaires.</p>

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
              <p>Gestion et traçabilité des entrées et sorties de marchandises aux zones d'activités en temps réel</p>

            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-check-circle"></i>
            <div>
              <p>Gestion et traçabilité des flux inter et intra zones</p>

            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-check-circle"></i>
            <div>

              <p>Fiabilité et transparence des échanges d'informations avec les différents acteurs (Zones d’activités, Port, Opérateurs logistiques.etc.)</p>
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
