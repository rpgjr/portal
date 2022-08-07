<!DOCTYPE html>
<html lang="en">
<head>
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/styles.css') }}">
    {{-- Fontawesome --}}
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <title>@yield('page-title')</title>
</head>
<body>

{{-- NavBar --}}
    <nav class="navbar navbar-expand-lg bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="{{ asset('img/pupLogo.png') }}" style="height: 50px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
                    <a class="nav-link @yield('donation-active')" aria-current="page" href="#donation">Donations</a>
                </li>
            </ul>
            <div class="d-flex">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('login') }}" type="button" class="btn btn-primary" style="width: 150px">Login <i class="fa-solid fa-arrow-right-to-bracket"></i></a>
                    <a href="{{ route('registration') }}" type="button" class="btn btn-success" style="width: 150px">Register <i class="fa-solid fa-user-plus"></i></a>
                </div>

            </div>
            </div>
            </div>
        </div>
    </nav>
{{-- End NavBar --}}

    @yield('content')

{{-- Footer --}}



    {{-- JS --}}
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
