<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
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
                    <a class="nav-link @yield('home-active')" aria-current="page" href="">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('form-active')" aria-current="page" href="#">Forms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('job-active')" aria-current="page" href="">Careers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('donation-active')" aria-current="page" href="#">Donations</a>
                </li>
            </ul>
            <div class="d-flex" role="search">
                <form class="d-flex ms-auto me-2" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-primary" type="button" id="button-addon2">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>
                <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-gear"></i> Settings</button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Help</a></li>
                        <li><a class="dropdown-item" href="#">Report a problem</a></li>
                        <li><hr class="dropdown-divider"></li>
                        {{-- @if (!Session()->has('loginID'))
                            <li><a class="dropdown-item" href="">Login</a></li>
                        @else
                            <li><a class="dropdown-item" href="">Account Settings</a></li>
                            <li><a class="dropdown-item" href="">Logout</a></li>
                        @endif --}}


                    </ul>
                </div>
            </div>
            </div>
        </div>
    </nav>
{{-- End NavBar --}}

    @yield('content')

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
