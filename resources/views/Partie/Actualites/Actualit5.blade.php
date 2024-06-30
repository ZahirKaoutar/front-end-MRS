@extends('Layouts.master')

@section('content1')
<main id="main">

<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/1_6.png');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>MARSA MAROC participe à 10éme édition de logismed</h2>
      <ol>
        <li><a href="{{ route('welcome') }}">acceuil</a></li>
        <li>Actualite</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- Actualite -->
<div class="contineractualite">


    <div class="col-lg-11 col-md-12 d-flex align-items-stretch justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="actualiteDETAILLE">
          <div class="actualiteDETAILLE-img">
              <a href="">
                  <img src="assets/img/Actualite/logismed.jpg" class="img-fluid" alt="">
              </a>

          </div>
          <div class="actualite-infoDETAILLE">

            <h4>MARSA MAROC participe à 10éme édition de logismed</h4>
            <p class="icon"> <i class='bx bxs-calendar'> 06/12/2022</i></p>
            <p class='text'>
                Marsa Maroc a pris part au Salon International du Transport et de la Logistique pour la Méditerranée – LOGISMED placé sous le Haut patronage de Sa Majesté le Roi Mohammed VI que Dieu l’Assiste, qui s’est tenu du 13 au 15 juin au Hyatt Regency de Casablanca.<br>Inaugurée par M. Mohammed ABDELJALIL -Ministre du Transport et de la Logistique , cette édition qui avait pour thématique : « L’omnicanalité au coeur de la logistique de la distribution : tendances et défis»», s’est attelée à faire la lumière sur les enjeux, tendances et perspectives de la digitalisation dans la Supply Chain.<br>Ce rendez-vous des professionnels du transport et de la logistique qui œuvre à promouvoir le Maroc en tant que plateforme logistique régionale incontournable, constitue un carrefour d’échange, de rencontres et de networking.  En outre cette 10ème édition a été rythmée par de multiples conférences et tables rondes et accueilli  « les Rencontres du Digital by PortNet ».<br>Le stand du Groupe Tanger MED regroupant Marsa Maroc et Tanger Med Port Authority a connu  durant cette manifestation, une fréquentation soutenue d’une part des professionnels, ce qui a permis de communiquer sur les projets phares de développement, et d’autre part, du grand public venu s’enquérir sur l’activité de la société.
            </div>
          </div>
        </div>

      </div>








</div>




  <section id="actualitegb" class="actualitegb section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">

        <h3>Autre <span>Actaulites</span></h3>

      </div>

      <div class="row">

        <div class="col-lg-4 col-md-7 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="actualite">
            <div class="actualite-img">
            <a href="">
              <img src="assets/img/Actualite/recontreregiona.jpg" class="img-fluid" alt="">
            </a>

            </div>
            <div class="actualite-info">

              <p class="icon"> <i class='bx bxs-calendar'> 06/12/2022</i></p>
              <h4> MARSA MAROC participe aux rencontres Regionales de logistique</h4>

              <p></p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="actualite">
            <div class="actualite-img">
                <a href="">
                    <img src="assets/img/Actualite/logismed.jpg" class="img-fluid" alt="">
                </a>

            </div>
            <div class="actualite-info">
                <p class="icon"> <i class='bx bxs-calendar'>14/10/2022</i> </p>
              <h4>MARSA MAROC participe à 10éme édition de logismed</h4>

            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="actualite">
            <div class="actualite-img">
                <a href="">
                    <img src="assets/img/Actualite/SMART_PORT.png" class="img-fluid" alt="">
                </a>

            </div>
            <div class="actualite-info">
                <p class="icon"> <i class='bx bxs-calendar'>14/10/2022</i></p>
              <h4>2éme HACKATHON portuaire-2022"smart port chalenge</h4>

            </div>
          </div>
        </div>



      </div>

    </div>

  </section><!-- End Team Section -->






















  @endsection
