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
    <nav class="nav-design navbar navbar-expand-lg bg-light sticky-top">
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
                    <a class="nav-link @yield('home-active')" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('form-active')" aria-current="page" href="{{ route('user.formsIndex') }}">Forms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('career-active')" aria-current="page" href="{{ route('career.index') }}">Careers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('tracer-active')" aria-current="page" href="{{ route('user.tracerIndex') }}">Tracer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('profile-active')" aria-current="page" href="{{ route('user.profileIndex') }}">Profile</a>
                </li>
            </ul>
            <div class="d-flex">
                <div class="dropdown">
                    <button class="dropdown-toggle account-name" type="" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-circle-user"></i>  {{ Session::get('loginID') }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item @yield('setting-active')" aria-current="page" href="{{ route('user.accSetting') }}">Account Settings</a></li>
                        <li><a class="dropdown-item" href="#">Feedback</a></li>
                        <li><a class="dropdown-item" href="#">Report a Problem</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                    </ul>
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
    <script src="{{ asset('bootstrap/js/pds.js') }}"></script>

    <footer class="homepage-footer">
        <center>PUPT Alumni Portal System - [All4One]</center>
    </footer>
</body>
</html>
