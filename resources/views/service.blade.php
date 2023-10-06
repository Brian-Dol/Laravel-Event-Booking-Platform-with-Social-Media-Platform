@extends('frontlayout')
@section('content')

<!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('frontassets/img/services-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Services</h2>
        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>Services</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

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
    <section id="call-to-action" class="call-to-action" style="background-image: url('frontassets/img/masai-mara.jpg')">
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


@endsection