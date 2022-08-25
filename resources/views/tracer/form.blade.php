@extends('layouts.homepage')

@section('page-title', 'Alumni Tracer')
@section('tracer-active', 'active')

@section('content')

@foreach ($account as $user)
    <div class="container my-3">
        <div class="row my-5">
            <div class="col-md-6">
                <h3>Alumni Tracer</h3>
            </div>
            <div class="col-md-6">
                <a href="{{ route('user.tracerIndex') }}" type="button" class="btn btn-primary float-end">Return</a>
            </div>
        </div>
    
    
        <div class="row my-3 justify-content-center">
            <div class="col-md-9">
                <form method="post" action="{{ route('user.tracerAnswer') }}">
                    @csrf
                    <div class="row box-tracer">
                        <div class="col-md-12 my-4">
                            <center>
                                <h3>Information Sheet</h3>
                            </center>
                        </div>
                        <input type="hidden" name="userID" value="{{ $user->userID}}">
                        <div class="col-md-4 my-2">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="lastName" value="{{ $user->lastName }}">
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" name="firstName" value="{{ $user->firstName }}">
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="form-label">Middle Name</label>
                            <input type="text" class="form-control" name="middleName" value="{{ $user->middleName }}">
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="form-label">Course</label>
                            <select class="form-select" name="courseID">
                                @foreach ($courses as $course)
                                    <option value="{{ $course->courseID }}"
                                        @if (($course->courseID) == $user->courseID)
                                            selected
                                        @endif
                                        >{{ $course->courseID }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="form-label">Contact Number</label>
                            <input type="text" class="form-control" name="number" value="{{ $user->number }}">
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" value="{{ $user->email }}">
                        </div>
                        <div class="col-md-12 my-4">
                            <center>
                                <h3>Questionnaire Form</h3>
                            </center>
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Date of First Employment:</label>
                            <input type="date" class="form-control" name="ff_firstEmployment">
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Date of Current Employment:</label>
                            <input type="date" class="form-control" name="cc_currentEmployment">
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Current Company name:</label>
                            <input type="text" class="form-control" name="cc_company">
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Current Nature/Type of Work:</label>
                            <input type="text" class="form-control" name="cc_typeOfWork">
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Current Plantilla Item/Work Position:</label>
                            <input type="text" class="form-control" name="cc_position">
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Current Status of Employment:</label>
                            <input type="text" class="form-control" name="cc_status">
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Current Monthly Income:</label>
                            <input type="text" class="form-control" name="cc_income">
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Is your job/work related to your undergraduate program?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="relatedToCourse" value="Yes">
                                <label class="form-check-label">
                                 Yes
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="relatedToCourse" value="No">
                                <label class="form-check-label">
                                 No
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Current Company Email Address:</label>
                            <input type="text" class="form-control" name="cc_email">
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Current Company Contact Number:</label>
                            <input type="text" class="form-control" name="cc_number">
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Company name (First Job):</label>
                            <input type="text" class="form-control" name="ff_company">
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">First Job/Title/Position:</label>
                            <input type="text" class="form-control" name="ff_position">
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Company Email Address (First Job):</label>
                            <input type="text" class="form-control" name="ff_email">
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Company Contact Number (First Job):</label>
                            <input type="text" class="form-control" name="ff_number">
                        </div>
                        <div class="col-md-12 mt-3 text-center">
                            <button type="submit" class="btn btn-primary" style="width: 150px">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endforeach
@endsection
