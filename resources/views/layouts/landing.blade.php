<!DOCTYPE html>
<html lang="en">
<head>
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/navbar.css')}}">
    {{-- Fontawesome --}}
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <title>@yield('page-title')</title>
</head>
<body>

{{-- NavBar --}}
    <nav class="navbar navbar-expand-lg bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="{{ asset('img/pupLogo.png') }}" style="height: 50px"> <small> <b>PUP Taguig Alumni Portal </b></small>
            </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0" >
                <li class="nav-item">
                    <a class="nav-link @yield('home-active')" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('form-active')" aria-current="page" href="#forms">Forms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('job-active')" aria-current="page" href="#career">Careers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('tracer-active')" aria-current="page" href="#tracer">Tracer</a>
                </li>
            </ul>
            <div class="d-flex">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('login') }}" type="button" class="btn btn-primary" style="width: 120px">Login <i class="fa-solid fa-arrow-right-to-bracket"></i></a>
                    <a href="{{ route('registration') }}" type="button" class="btn btn-success style="width: 120px">Register <i class="fa-solid fa-user-plus"></i></a>
                </div>

            </div>
            </div>
            </div>
        </div>
    </nav>

{{-- End NavBar --}}

    @yield('content')





    {{-- JS --}}
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>

    {{-- Footer --}}
    <footer class="text-center text-lg-start text-white homepage-footer">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
          <!--Grid row-->
          <div class="row">
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Contact Us</h6>
              <p><a class="text-white">PUP Taguig No.</a></p>
            </div>
            <!-- Grid column -->
  
            <hr class="w-100 clearfix d-md-none" />
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">
                Stay Connected
              </h6>
              <p><a class="text-white">PUP Taguig Facebook Page</a> </p>
              <p><a class="text-white">Alumni Portal Facebook Page</a></p>
              <p><a class="text-white">CSC Facebook Page</a></p>
            </div>
  
            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />
  
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Need help?</h6>
                  <p><a class="text-white">FAQs</a></p>
                  <p><a class="text-white">Report a Problem</a></p>
            </div>
            <!-- Grid column -->
          </div>
          <!--Grid row-->
        </section>
  
        <hr class="my-2">
        <!-- Section: Copyright -->
        <section class="p-2 pt-0">
          <div class="row d-flex align-items-center">
            <!-- Grid column -->
            <div class="col-md-7 col-lg-8 text-center text-md-start">
              <div class="p-2">© PUP Taguig Alumni Portal - [All4One]</div>
            </div>
            <!-- Grid column -->
  
            {{-- <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
              <!-- Facebook -->
              <a
                 class="btn btn-outline-light btn-floating m-1"
                 class="text-white"
                 role="button"
                 ><i class="fab fa-facebook-f"></i
                ></a>
  
              <!-- Twitter -->
              <a
                 class="btn btn-outline-light btn-floating m-1"
                 class="text-white"
                 role="button"
                 ><i class="fab fa-twitter"></i
                ></a>
  
              <!-- Google -->
              <a
                 class="btn btn-outline-light btn-floating m-1"
                 class="text-white"
                 role="button"
                 ><i class="fab fa-google"></i
                ></a>
  
              <!-- Instagram -->
              <a
                 class="btn btn-outline-light btn-floating m-1"
                 class="text-white"
                 role="button"
                 ><i class="fab fa-instagram"></i
                ></a>
            </div> --}}
            <!-- Grid column -->
          </div>
        </section>
        <!-- Section: Copyright -->
      </div>
      <!-- Grid container -->
    </footer>
    <!-- Footer -->

</body>
</html>
