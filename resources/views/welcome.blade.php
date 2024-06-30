@extends('Layouts.master')

@section('content1')


      <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Bienvenue  à <span>MARSA MAROC</span></h1>
      <h2>nous allons à votre services</h2>
      <div class="d-flex">
        <a href="{{route('registration')}}" class="btn-get-started scrollto">inscrivez-vous</a>
        <a href="https://youtu.be/9kPmV3LKYzA?si=tJiHAlqaoYBrYPOH" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>regarder video</span></a>
      </div>
    </div>
  </section><!-- End Hero -->



    <!-- ======= Services ======= -->
    <section id="featured-services" class="featured-services">
        <h1 id='titreserv'> notre services</h1>
        <div class="container" data-aos="fade-up">

          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class='bx bx-user'></i></div>
                <h4 class="title"><a href="{{ route('Serviceclient') }}">Client</a></h4>
                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class='bx bx-anchor'></i></div>
                <h4 class="title"><a href="{{ route('Serviceescale') }}">Escale Maritimes</a></h4>
                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                <div class="icon"><i class='bx bxs-ship'></i></div>
                <h4 class="title"><a href="{{ route('ServiceTracabilite') }}">Tracibilite</a></h4>
                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
              </div>
            </div>


          </div>

        </div>
      </section><!-- End Featured Services Section -->





        <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

          <div class="row justify-content-center">

            <div class="col-lg-4 col-md-6">
              <div class="count-box">
                <i class='bx bxs-package'></i>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Opérations import  par jour</p>
              </div>
            </div>



            <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <i class="bi bi-headset"></i>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p>Messages electronique par jour</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <i class='bx bxs-ship'></i>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p>Opérations export par jour</p>
              </div>
            </div>

          </div>

        </div>
    </section><!-- End Counts Section -->



<!--contact-->

    <section id="contactacceil" class="contactacceil">
        <div class="container" data-aos="zoom-in">
            <h1>Nos Experts Sont À Votre
                Ecoute 24/7J</h1>
            <a id='btncontact' href="{{route('contact')}}"  class="btn-get-started contact">Contactez-Nous</a>




        </div>
    </section>
<!-- end contact-->


{{-- <!--actualite-->


<section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">
        <div class=" section-header">
        <h2>AGENDA</h2>
        <p>voici les derniers evenement</p>
        </div>

      <div class="row gy-5">

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="img/1.jpg" class="img-fluid" alt="">
              <span class="post-date">December 12</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">Evenement de digiweek à Ntic</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">samir ramah</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                </div>
              </div>

              <hr>

              <a href="blog read.html" class="readmore stretched-link"><span>lire plus</span><i class="bi bi-arrow-right"></i></a>

            </div>

        </div>
    </div><!-- End post item -->

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="img/2.jpg" class="img-fluid" alt="">
              <span class="post-date">July 17</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title"> 1er jour  Evenement  de digweek </h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Evenement</span>
                </div>
              </div>

              <hr>

              <a href="blog read.html" class="readmore stretched-link"><span>lire plus</span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post item -->

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="../img/tel2.jpg" class="img-fluid" alt="">
                <span class="post-date">July 17</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title"> 1er jour  Evenement  de digweek </h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Evenement</span>
                  </div>
                </div>

                <hr>

                <a href="blog read.html" class="readmore stretched-link"><span>lire plus</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
        </div><!-- End post item -->




    </section>




<!--end actualite--> --}}





       <!-- ======= Actualite======= -->
       <section id="actualitegb" class="actualitegb section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">

            <h3>Notre <span>Actaulite</span></h3>

          </div>

          <div class="row">

            <div class="col-lg-4 col-md-7 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="actualite">
                <div class="actualite-img">
                <a href="{{route('Actualit1')}}">
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
                    <a href="{{route('Actualit2')}}">
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
                    <a href="{{route('Actualit3')}}">
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
        <div class='rrr'>
        <a id='btnactualite' href="#about"  class="btn-get-started contact">TOUS Actualités</a>
        </div>
      </section><!-- End Team Section -->





@endsection



