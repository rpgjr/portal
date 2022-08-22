@extends('layouts.homepage')

@section('page-title', 'SAS Form')
@section('form-active', 'active')

@section('content')

    <div class="container my-3">
        <div class="row mt-5 mb-4">
            <div class="col-md-6">
                <h3>Student Affairs and Services (SAS) Program</h3>
            </div>
        </div>

        <div class="row mx-4 justify-content-center">
            <div class="col-md-10">
                <div class="row box-forms align-items-center">
                    {{-- Start of Column --}}
                    <div class="col-md-12">
                        {{-- Start of Form --}}
                        <form action="{{ route('user.sasAnswer') }}" method="post">
                        @csrf
                        {{-- start of Carousel --}}
                        <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="false" data-bs-wrap="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active"> @include('forms.sasP1') </div>
                                <div class="carousel-item"> @include('forms.sasP2') </div>
                                <div class="carousel-item"> @include('forms.sasP3') </div>
                                <div class="carousel-item"> @include('forms.sasP4') </div>
                                <div class="carousel-item"> @include('forms.sasP5') </div>
                            </div>

                            {{-- Buttons Next, Previous and Pages --}}
                            <div class="text-center mt-4 mb-2">
                                <div class="btn-group">
                                    <button class="btn btn-outline-primary" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span>Previous</span>
                                    </button>
                                    <button class="btn btn-outline-primary" type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0">
                                        <span>1</span>
                                    </button>
                                    <button class="btn btn-outline-primary" type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1">
                                        <span>2</span>
                                    </button>
                                    <button class="btn btn-outline-primary" type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2">
                                        <span>3</span>
                                    </button>
                                    <button class="btn btn-outline-primary" type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="3">
                                        <span>4</span>
                                    </button>
                                    <button class="btn btn-outline-primary" type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="4">
                                        <span>5</span>
                                    </button>
                                    <button class="btn btn-outline-primary" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span>Next</span>
                                    </button>
                                </div>
                            </div>{{-- End of Buttons --}}
                        </div>{{-- End of Carousel --}}
                        </form>{{-- End of Form --}}
                    </div>{{-- End of Column --}}
                </div>
            </div>
        </div>
    </div>

@endsection
