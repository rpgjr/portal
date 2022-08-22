@extends('layouts.landing')

@section('page-title', 'Welcome to PUPT-APS')

@section('home-active', 'active')

@section('content')


<section class="greetings pt-5 pb-5" id="home">
    <div class="container container-greetings pt-5 pb-5">
        <div class="row">
            <div class="col-md glassBG">
                <center>
                    <h1 class="mb-4">Welcome to PUP Taguig Alumni Portal</h1>
                    <p>We are here to provide the best care and experience for our beloved alumni. Hop in and socialize, give opportunities, give back to our Sintang Paaralan and reminisce your life here at PUP Taguig.</p>
                </center>
            </div>
        </div>
    </div>
</section>

<section class="form-section" id="forms">
    <div class="container d-flex justify-content-center">
        <div class="row feature-design align-items-center">
            <div class="col-md-6 align-items-center justify-content-start">
                <img src="{{ asset('img/forms.jpg') }}" alt="">
            </div>
            <div class="col-md-6">
                <h3>Forms</h3>
                <p>We centralized the forms the you need to answer before and after graduating to our Sintant Paaralan!</p>
            </div>
        </div>
    </div>
</section>

<section class="career-section" id="career">
    <div class="container d-flex justify-content-center">
        <div class="row feature-design align-items-center">
            <div class="col-md-6">
                <h3>Careers</h3>
                <p>You and Me can provide Job Advertisment to our kapwa Isko at Iska for them to have better careers</p>
            </div>
            <div class="col-md-6 align-items-center justify-content-end">
                <img src="{{ asset('img/career.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="donation-section" id="tracer">
    <div class="container d-flex justify-content-center">
        <div class="row feature-design align-items-center">
            <div class="col-md-6 align-items-center justify-content-start">
                <img src="{{ asset('img/career-homepage.jpg') }}" alt="">
            </div>
            <div class="col-md-6">
                <h3>Tracer</h3>
                <p>You can update you information in the Tracer tab for us to check your current employment status. It will possitively help our university in assisting you in your career.</p>
            </div>
        </div>
    </div>
</section>


@endsection
