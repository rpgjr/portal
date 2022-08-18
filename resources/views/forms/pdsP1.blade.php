@extends('layouts.homepage')

@section('page-title', 'Exit Interview')
@section('form-active', 'active')

@section('content')

    <div class="container my-3">
        <div class="row mt-5 mb-4">
            <div class="col-md-6">
                <h3>Personal Data Sheet Page 1</h3>
            </div>
        </div>

        <div class="row mx-4 justify-content-center">
            <div class="col-md-10">
                <form action="">
                    <div class="row box-forms align-items-center">
                        {{-- Fields --}}
                        <div class="col-md-12 my-2">
                            <h4>Personal Information</h4>
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="form-label">Middle Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="form-label">Gender: </label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Male
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                                <label class="form-check-label" for="flexRadioDefault2">
                                  Female
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="form-label">Age</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="form-label">Birthday</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="form-label">Landline/Mobile Number</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="form-label">Religion</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="form-label">Course</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected hidden>Please select one...</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->courseID }}">{{ $course->courseID }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="form-label">Year Graduated</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected hidden>Please select one...</option>
                                @for ($i = date('Y'); $i >= 1996; $i--)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">City Address</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Provincial Address</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-12 mt-2">
                            <hr style="height:2px;border-width:5px;color:#000000;background-color:#000000">
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="form-label">Father's Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="form-label">Father's Telephone/Cellphone No.</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="form-label">Mother's Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="form-label">Mother's Telephone/Cellphone No.</label>
                            <input type="text" class="form-control">
                        </div>
                        {{-- End Fields --}}
                        <div class="col-md-12 mt-5">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                  <li class="page-item"><a class="page-link disabled" href="">Previous</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.pdsP2') }}">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
