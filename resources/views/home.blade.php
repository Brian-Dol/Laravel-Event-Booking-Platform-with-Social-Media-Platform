@extends('frontlayout')


 


  <main id="main">
    @section('content')

     <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center" style="background-image: url('frontassets/img/hero-new.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          @if(Session::has('customerlogin'))
          
            <h2 data-aos="fade-up">Welcome</h2>

            <blockquote data-aos="fade-up" data-aos-delay="100">
              <p>Welcome to the Home of amazing affordable events. For people of all ages. Book an event or visit our fun members social platform</p> 
              
            </blockquote>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            

            <a href="{{url('booking')}}" class="btn-get-started">Book Event</a>&nbsp &nbsp &nbsp
            <a href="{{url('social-home')}}" class="btn-get-started">Social Network</a>
                       
          </div>

            @else
             
          <h2 data-aos="fade-up">Welcome</h2>

          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p>Welcome to the Home of amazing affordable events. For people of all ages. Register and login to book events and join our fun social platform</p> 
          </blockquote>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            
            <a href="{{url('login')}}" class="btn-get-started">Login</a>&nbsp &nbsp &nbsp
            <a href="{{url('register')}}" class="btn-get-started">Register</a>
            
          </div>

          @endif        

        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->


    <!-- ======= Why Choose Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Why Choose Us</h2>

        </div>

        <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

          <div class="col-xl-5 img-bg" style="background-image: url('frontassets/img/banner-other.jpg')"></div>
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

    <!-- ======= Our Services Section ======= -->
    <section id="services-list" class="services-list">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Services</h2>

        </div>
        @foreach($services->groupBy('section') as $section => $servicesInSection)

        <section id="services" class="services">

          <div class="container">

            <div class="row gy-5">

            @foreach($servicesInSection as $service)

              <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="icon flex-shrink-0"><i class="bi bi-briefcase" style="color: #d90769;"></i></div>
                <div>
                  <h4 class="title"><a href="{{ url('service/'.$service->id) }}" class="stretched-link">{{ $service->title }}</a></h4>
                  <p class="description">{{ $service->small_desc }}</p>
                </div>
              </div>

            @endforeach

            </div>

          </div>

        </section>

        @endforeach


      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action" style="background-image: url('frontassets/img/kenya-faq.jpg')">
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


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>

        </div>

            

            <section id="testimonials" class="testimonials">

            <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">
                @foreach($testimonials as $index => $testi)

                <div class="swiper-slide">
                  
                  <div class="testimonial-item">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      {{$testi->testi_cont}}
                    </p>
                    <div class="profile mt-auto">
                      
                      <img src="{{ Storage::url($testi->customer->photo) }}" alt="{{$testi->customer->first_name}} {{$testi->customer->last_name}}" class="testimonial-img">

                      
                      <h3>{{$testi->customer->first_name}} {{$testi->customer->last_name}}</h3>
                      
                      
                    </div>
                  </div>
                </div><!-- End testimonial item -->
                @endforeach
                
              </div>
            
          </div>
          <div class="swiper-pagination"></div>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                @if(Session::has('customerlogin'))
                <a href="{{url('customer/add-testimonial')}}" class="btn btn-success my-button">Add New testimonial</a>

                  <style>
                    .my-button {
                        font-family: var(--font-secondary);
                        font-weight: 500;
                        font-size: 15px;
                        letter-spacing: 1px;
                        display: block;
                        padding: 12px 30px;
                        border-radius: 50px;
                        transition: 0.5s;
                        text-align: center;
                        color: #fff;
                        background: var(--color-primary);
                        margin: 0 auto;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                      }
                        

                  </style>

                  @else

                  <a href="{{url('register')}}" class="btn btn-success my-button">Register/Login To Add Testimonial</a>

                  <style>
                    .my-button {
                        font-family: var(--font-secondary);
                        font-weight: 500;
                        font-size: 15px;
                        letter-spacing: 1px;
                        display: block;
                        padding: 12px 30px;
                        border-radius: 50px;
                        transition: 0.5s;
                        text-align: center;
                        color: #fff;
                        background: var(--color-primary);
                        margin: 0 auto;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                      }

                  </style>

                  @endif
            </div>
        </section>

        
      </div>

      

    </section><!-- End Testimonials Section -->

          


    

  @section('scripts')

    <style type="text/css">
  .hide{
    display: none;
  }
  </style>

  @endsection

  @endsection


  