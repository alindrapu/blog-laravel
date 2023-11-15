@extends('layouts/main')

@section('container')

  <section id="contact" class="contact section-bg mt-5 bg-dark rounded-3 p-5">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Let's Connect! Whether you have questions, feedback, or just want to say hello, I'm here. Feel free to reach
          out and let's start a conversation. Your thoughts matter, and I'm excited to hear from you!</p>
      </div>

      <div class="row mt-5">
        <div class="col-lg-4 col-md-4">
          <div class="contact-about">
            <h3 class="text-info">{{ auth()->user()->name }}</h3>
            <p class="text-white">nama saya Anggun Pratiwi, mahasiswa Institut Teknologi Indonesia. Saya sangat menyukai perkembangan UI/UX Designer.</p>
            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="info">
            <div class="d-flex align-items-center">
              <i class="bi bi-geo-alt"></i>
              <p>{{ auth()->user()->address }}</p>
            </div>

            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-envelope"></i>
              <p>{{ auth()->user()->email }}</p>
            </div>

            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-phone"></i>
              <p>{{ auth()->user()->phone }}</p>
            </div>

          </div>
        </div>

        <div class="col-lg-5 col-md-8">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="form-group mt-3">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
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
  </section>
@endsection
