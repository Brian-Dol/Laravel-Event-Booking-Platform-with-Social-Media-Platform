<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Event Kenya</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('frontassets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('frontassets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontassets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontassets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('frontassets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('frontassets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontassets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontassets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('frontassets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Nova
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="page-index">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{asset('frontassets/img/logo.png')}}" alt=""> -->
        <h1 class="d-flex align-items-center">Events Kenya</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{url('/')}}" class="active">Home</a></li>
          <li><a href="{{url('page/about-us')}}">About Us</a></li>
          <li><a href="{{url('service')}}">Services</a></li>
          <li><a href="{{url('page/contact-us')}}">Contact Us</a></li>
          
          @if(Session::has('customerlogin'))
          <li><a href="{{url('social-home')}}">Social Network</a></li>
          <li><a href="{{url('booking')}}">Book Event</a></li>
          <li><a href="{{url('logout')}}">Logout</a></li>
          
          @else
          <li class="dropdown"><a href="#"><span>Login/Register</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              
              <li><a href="{{url('login')}}">Login</a></li>
              <li><a href="{{url('register')}}">Register</a></li>
              
            </ul>
          </li>
          @endif
          
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <main id="main">
  @yield('content')

    

  

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <span>Event Kenya</span>
            </a>
            <p>Amazing adventures for all</p>
            <div class="social-links d-flex  mt-3">
              <a href="https://www.instagram.com/eventhousekenya/?hl=en" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://www.instagram.com/eventhousekenya/?hl=en" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/eventhousekenya/?hl=en" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://www.instagram.com/eventhousekenya/?hl=en" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="{{url('/')}}">Home</a></li>
              <li><i class="bi bi-dash"></i> <a href="{{url('page/about-us')}}">About us</a></li>
              <li><i class="bi bi-dash"></i> <a href="{{url('service')}}">Services</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-dash"></i> <a href="{{url('page/contact-us')}}">Contact Us</a></li>
            </ul>
          </div>

          

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Great Wall Gardens<br>
              Nairobi<br>
              Kenya <br><br>
              <strong>Phone:</strong> +254 714 073 497<br>
              <strong>Email:</strong> info@eventkenya.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>EventsKenya</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nova-bootstrap-business-template/ -->
          Designed by <a href="https://www.instagram.com/dol_brian/">Brian Dol</a>
        </div>
      </div>
    </div>
  </footer><!-- End Footer --><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('frontassets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontassets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('frontassets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('frontassets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('frontassets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontassets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontassets/js/main.js')}}"></script>

  

  @yield('scripts')

</body>

</html>