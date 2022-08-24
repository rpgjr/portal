@extends('layouts.homepage')

@section('page-title', 'Exit Interview')
@section('form-active', 'active')

@section('content')

    <div class="container my-3">
        <div class="row mt-5 mb-4">
            <div class="col-md-12">
                <h3>Student Affairs and Services (SAS) Program Page 1</h3>
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
                            <select class="form-select" aria-label="Default select example">
                                <option hidden selected>Please select one...</option>
                                <option value="18 and below">18 and below</option>
                                <option value="19 – 20">19 – 20</option>
                                <option value="21 – 22">21 – 22</option>
                                <option value="23 – 24">23 – 24</option>
                                <option value="25 and above">25 and above</option>
                            </select>
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="form-label">Stakeholder</label>
                            <select class="form-select" aria-label="Default select example">
                                <option hidden selected>Please select one...</option>
                                <option value="Student">Student</option>
                                <option value="Faculty">Faculty</option>
                                <option value="Support Staff">Support Staff</option>
                                <option value="School Administrator">School Administrator</option>
                            </select>
                        </div>
                        <div class="col-md-8 my-2">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="form-label">Number of Semesters with PUP</label>
                            <select class="form-select" aria-label="Default select example">
                                <option hidden selected>Please select one...</option>
                                <option value="Less than 1">Less than 1</option>
                                <option value="2 – 4">2 – 4</option>
                                <option value="5 – 7">5 – 7</option>
                                <option value="8 or more">8 or more</option>
                            </select>
                        </div>
                        {{-- End Fields --}}
                        <div class="col-md-12 mt-5">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                  <li class="page-item"><a class="page-link disabled" href="">Previous</a></li>
                                  <li class="page-item"><a class="page-link active" href="{{ route('user.sasP1') }}">1</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.sasP2') }}">2</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.sasP3') }}">3</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.sasP4') }}">4</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.sasP5') }}">5</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.sasP2') }}">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
