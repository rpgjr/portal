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

<section class="news-section mb-5">
    <div class="container">
        <div class="row align-items-center">
            <h2>News and Updates</h2>
            <div class="col-md-6 news mt-2">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="1500">
                        <img src="{{ asset('img/sample1.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="1500">
                        <img src="{{ asset('img/sample2.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="1500">
                        <img src="{{ asset('img/sample3.jpg') }}" class="d-block w-100" alt="...">
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

            <div class="col-md-6">
                <div class="box-news">
                    <h6 class="">For more updates for new and events, visit our PUPT official Facebook page.</h6>
                    <a type="button" class="btn btn-outline-primary mb-4">PUPT Facebook Page</a>

                    <h6 class="">Check out the new Alumni Portal Facebook page. Also, give us a follow and like!</h6>
                    <a type="button" class="btn btn-outline-primary mb-4">Alumni Portal Facebook Page</a>

                    <h6 class="">For other concerns, you can visit the PUPT Central Student Council Facebook page.</h6>
                    <a type="button" class="btn btn-outline-primary">CSC Facebook Page</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
