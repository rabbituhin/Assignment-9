@extends('layouts.app')

@section('content')

    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>I'm eager to connect with you! Whether you have questions, inquiries, or potential collaboration opportunities,
            please don't hesitate to use the contact form below. Your feedback, project ideas, or just a desire to connect
            are all valued. I appreciate every interaction and look forward to hearing from you.
        </p></p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
              <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Sylhet, Bangladesh</p>
              </div>

              <div class="email">
              <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>tuhin1886@gmail.com</p>
              </div>

              <div class="phone">
              <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+8801799016497</p>
              </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="#" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
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