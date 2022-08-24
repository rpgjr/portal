@extends('layouts.homepage')

@section('page-title', 'Exit Interview')
@section('form-active', 'active')

@section('content')

    <div class="container my-3">
        <div class="row mt-5 mb-4">
            <div class="col-md-6">
                <h3>Personal Data Sheet Page 2</h3>
            </div>
        </div>

        <div class="row mx-4 justify-content-center">
            <div class="col-md-10">
                <form action="">
                    <div class="row box-forms align-items-center">
                        {{-- Fields --}}
                        {{-- Work Experience --}}
                        <div class="col-md-12 mt-2">
                            <h5><b>WORK EXPERIENCE/S</b></h5>
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Department/Agency/Office</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="form-label">Position Title</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="form-label">Inclusive Dates</label>
                            <input type="text" class="form-control">
                        </div>
                        {{-- Seminars --}}
                        <div class="col-md-12 mt-4">
                            <h5><b>TRAININGS/SEMINARS ATTENDED</b></h5>
                        </div>

                        <div class="col-md-6 my-2">
                            <label class="form-label">Title of Seminar/Conference/Workshops</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="form-label">Inclusive Dates</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="col-md-6 my-2">
                            <label class="form-label">Title of Seminar/Conference/Workshops</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="form-label">Inclusive Dates</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="col-md-6 my-2">
                            <label class="form-label">Title of Seminar/Conference/Workshops</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="form-label">Inclusive Dates</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="col-md-12 mt-3">
                            <hr style="height:2px;border-width:5px;color:#000000;background-color:#000000">
                            <h5><b>WAIVER</b></h5>
                            <p>This is to signify that I am willing to be subjected to company calls for placement or employment purposes. This shall also authorize the Polytechnic University of The Philippines – Career Development and Placement Office (PUP-CDPO) to include my name and contact details in the directory of graduates.</p>
                            <hr style="height:2px;border-width:5px;color:#000000;background-color:#000000">
                        </div>

                        <div class="col-md-6 my-2">
                            <label class="form-label">Date</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="form-label">Signature over Printed Name</label>
                            <input type="file" class="form-control">
                        </div>
                        {{-- End Fields --}}
                        <div class="col-md-12 mt-4 text-center">
                            <button type="submit" class="btn btn-primary" style="width: 150px">Submit</button>
                        </div>
                        <div class="col-md-12 mt-4">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                  <li class="page-item"><a class="page-link" href="{{ route('user.pdsP1') }}">Previous</a></li>
                                  <li class="page-item"><a class="page-link disabled" href="">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
