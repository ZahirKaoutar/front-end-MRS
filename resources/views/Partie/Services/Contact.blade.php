@extends('Layouts.master')

@section('content1')
<main id="main">

<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/1_6.png');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>CONTACT</h2>
      <ol>
        <li><a href="{{ route('welcom') }}">acceuil</a></li>
        <li>Contact</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->








<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>

        <p>Nous à votre service </p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Notre Address</h3>
            <p>8Q63+688, Rte de Safi, Safi</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>Notre Email</h3>
            <p>safi@marsamaroc.co.ma </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>Appel</h3>
            <p>+212 5 24 46 23</p>
          </div>
        </div>

      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-6 ">
          <iframe class="mb-4 mb-lg-0"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3372.048652590238!2d-9.244095574463456!3d32.31054660768077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac21002d026139%3A0xb34c9b38b3cf32e2!2sMarsa%20Maroc!5e0!3m2!1sar!2sma!4v1713140088364!5m2!1sar!2sma" width="560" height="390" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" required>
              </div>
              <div class="col form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="societe" id="subject" placeholder="nom de societe" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->
@endsection
