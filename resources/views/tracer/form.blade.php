@extends('layouts.homepage')

@section('page-title', 'Alumni Tracer')
@section('tracer-active', 'active')

@section('content')

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
            <div class="col-md-7">
                <form>
                    @csrf
                    <div class="row box-tracer">
                        <div class="col-md-12 my-4">
                            <center>
                                <h3>Questionnaire Form</h3>
                            </center>
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Date of First Employment:</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Date of Current Employment:</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Current Nature/Type of Work:</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Current Plantilla Item/Work Positio:</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Current Status of Employment:</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Current Monthly Income:</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Is your job/work related to your undergraduate program?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                 Yes
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                 No
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Present Company Email Address:</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Present Company Contact Number:</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">First Job/Title/Position:</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Company name (First Job):</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Company Email Address (First Job):</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Company Contact Number (First Job):</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-12 mt-3 text-center">
                            <button type="submit" class="btn btn-primary" style="width: 150px">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
