@extends('layouts.landing')

@section('page-title', 'Welcome to PUPT-APS')

@section('home-active', 'active')

@section('content')


<section class="greetings pt-5 pb-5" id="home">
    <div class="container container-greetings pt-5 pb-5">
        <div class="row">
            <h1 class="mb-4">PUP Taguig <br> Alumni Portal</h1><br>
            <div class="col-md glassBG">
                <h5>Providing the best care and experience for our beloved alumni.<br>Hop in and relish, give opportunities to your co-alumni, and reminisce your life<br>here at PUP Taguig.</h5>
            </div>
        </div>
    </div>
</section>

<section class="form-section" id="forms">
    <div class="container d-flex justify-content-center">
        <div class="row feature-design align-items-center">
            <div class="form-description">
                <h2>Forms</h2>
                <p>Here at PUP Taguig Alumni Portal, we centralized the forms that you need to answer before and after graduating to our Sintang Paaralan!</p>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-2">
                <div class="col">
                    <div class="card h-100">
                    <img src="{{asset('img/pds.png')}}" class="card-img-top">
                        <div class="card-body">
                        <button type="button" class="btn btn-primary">Personal Data Sheet</button>
                        </div>
                   </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{asset('img/sas.png')}}" class="card-img-top">
                        <div class="card-body">
                        <button type="button" class="btn btn-primary" btn-sm>Student's Affair and Services Questionnaire</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{asset('img/eif.png')}}" class="card-img-top">
                        <div class="card-body">
                        <button type="button" class="btn btn-primary">Exit Interview Form</button>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="career-section" id="career">
    <div class="container container-career pt-5 pb-5">
    <div class="container d-flex justify-content-center">
        <div class="row feature-design align-items-center justify-content-center">
            <div class="career-description">
                <h2>Careers</h2>
                <p>You and Me can provide Job Advertisment to our kapwa Isko at Iska for them to have better careers</p>
            </div>
            <div class="col-md-6"> 
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active carousel-img">
                        <img src="{{asset('img/career.jpg')}}" class="d-block " alt="...">
                      </div>
                      <div class="carousel-item carousel-img">
                        <img src="{{asset('img/job-offer.jpg')}}" class="d-block" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>
    </div>
</section>


<section class="section-tracer" id="tracer">
    <div class="container d-flex justify-content-center">
        <div class="row feature-design align-items-center justify-content-center">
            <div class="tracer-description">
                <h2>Tracer</h2>
                <p>You and Me can provide Job Advertisment to our kapwa Isko at Iska for them to have better careers</p>
            </div>
            <div class="col-md-6 align-items-center justify-content-start">
                <img src="{{asset('img/tracer.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>


@endsection
