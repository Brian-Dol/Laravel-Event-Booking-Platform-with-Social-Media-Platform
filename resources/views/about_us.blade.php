@extends('frontlayout')
@section('content')



    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('frontassets/img/masai-mara.jpg') }}');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>About Us</h2>
        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>About</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4" data-aos="fade-up">
          <div class="col-lg-4">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8">
            <div class="content ps-lg-5">
              <h3>Who we are</h3>
              <p>
               We are a small roup of Kenyans who got tired of doing the same old things every weekedn or every time we were free. So we got together to plan events, ans soon other people wanted to join in. That is how Events Kenya was started. Our <strong>MOTTO'S</strong> are:
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Make every event memorable.</li>
                <li><i class="bi bi-check-circle-fill"></i> Safety comes first.</li>
                <li><i class="bi bi-check-circle-fill"></i> Customer satisfaction is everything.</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action" style="background-image: url('{{ asset('frontassets/img/about_us-why.jpg') }}');"> 
      <div class="container" data-aos="fade-up" >
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            @if(Session::has('customerlogin'))
            <p>Book an event today</p>
            <a class="cta-btn" href="{{url('booking')}}">Book Event</a>
            @else
            <h3>Register and book an event today</h3>
            <p>You will also be able to join our members social platform</p>
            <a class="cta-btn" href="{{url('register')}}">Register</a>
            @endif
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->
    
    <!-- ======= Why Choose Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Why Choose Us</h2>

        </div>

        <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

          <div class="col-xl-5 img-bg" style="background-image: url('{{ asset('frontassets/img/private-africa.jpg') }}');"></div> 
          <div class="col-xl-7 slides  position-relative">

            <div class="slides-1 swiper">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Let's have fun together</h3>
                    <h4 class="mb-3">We plan amazing events</h4>
                    <p>Amazing adventures for the whole family to enjoy.</p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">We do not attck your pocket</h3>
                    <h4 class="mb-3">Affordable for everyone</h4>
                    <p>We prise our events with your pockets in mind.</p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Time out doors</h3>
                    <h4 class="mb-3">Not your average event.</h4>
                    <p>We dont plan ordinary events, because you deserve <strong>EXTRA-ORDINARY</strong>.</p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Fun for the family</h3>
                    <h4 class="mb-3">Kids day out.</h4>
                    <p>Let your kids be kids. We bring them together with other kids to fun it out.</p>
                  </div>
                </div><!-- End slide item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>
    </section><!-- End Why Choose Us Section -->

   

  

@endsection