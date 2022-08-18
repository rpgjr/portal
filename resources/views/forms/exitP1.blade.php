@extends('layouts.homepage')

@section('page-title', 'Exit Interview')
@section('form-active', 'active')

@section('content')

    <div class="container my-3">
        <div class="row mt-5 mb-4">
            <div class="col-md-6">
                <h3>Exit Interview Page 1</h3>
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
                            <label class="form-label">Civil Status</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="form-label">Contact Number</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="form-label">Student Number</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-3 my-2">
                            <label class="form-label">Course</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected hidden>Please select one...</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->courseID }}">{{ $course->courseID }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 my-2">
                            <label class="form-label">Year</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected hidden>Please select one...</option>
                                <option value="1st Year">1st Year</option>
                                <option value="2nd Year">2nd Year</option>
                                <option value="3rd Year">3rd Year</option>
                                <option value="4th Year">4th Year</option>
                                <option value="5th Year">5th Year</option>

                            </select>
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">If employed (Position, Company/Company Address, Telephone Number).
                                If not employed (Put N/A)
                                </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="form-label">Reason/s for leaving PUP (Put a check on the box of your choice/s)</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label">Graduation</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label">Personal</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label">Family</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label">Academic</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label">Financial</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label">Work-related</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label">Others</label>
                            </div>
                        </div>
                        {{-- End Fields --}}
                        <div class="col-md-12 mt-5">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                  <li class="page-item"><a class="page-link disabled" href="">Previous</a></li>
                                  <li class="page-item"><a class="page-link active" href="{{ route('user.exitInterviewP1') }}">1</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.exitInterviewP2') }}">2</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.exitInterviewP3') }}">3</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.exitInterviewP4') }}">4</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.exitInterviewP5') }}">5</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.exitInterviewP2') }}">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
