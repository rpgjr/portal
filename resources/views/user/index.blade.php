@extends('layouts.homepage')

@section('page-title', 'Homepage')

@section('home-active', 'active')

@section('content')

<section class="greetings pt-5 pb-5">
    <div class="container container-greetings pt-5 pb-5">
        <div class="row">
            <div class="col-md glassBG">
                <center>
                    <h1>Welcome to PUP Taguig Alumni Portal </h1>
                    {{-- <b>{{$data->username}}</b> --}}
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </center>
            </div>
        </div>
    </div>
</section>

<section class="news-section">
    <div class="container carousel-news">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 news">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                        <img src="{{ asset('img/career.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('img/donate.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('img/forms.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
