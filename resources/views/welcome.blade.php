
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    @vite(['resources/js/app.js'])

    <style>
      #intro {
        background-image: url('/images/bg-img.jpg') ;
        background-size:100%;
        background-repeat: no-repeat;
        height: 100vh;
      }

      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }
   </style>

</head>
<body id="intro" >
   
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="#" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="font-weight-bold"><h1>ANKA</h1></span>
      </a>

      <nav id="navbar" class="navbar">
                     
          <a class="getstarted scrollto" href="{{ route('customerRegistration') }}">Create Account</a>
       
        <i class="bi "></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center  vh-100 ">

    <div class="container vh-40 " style="background-color: rgba(255, 255, 255, .15); backdrop-filter: blur(3.5px);  " >
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-between">
          <h1 data-aos="fade-up">We offer support to growing your business</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">We have grat products from our growing business</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start just">
              <a href="{{ route('login') }}" class="btn btn-primary scrollto d-inline-flex align-items-center justify-content-center ">
                <span>Login</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>