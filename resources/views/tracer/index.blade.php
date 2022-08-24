@extends('layouts.homepage')

@section('page-title', 'Alumni Tracer')
@section('tracer-active', 'active')

@section('content')

    <div class="container my-5">
        <div class="row my-5">
            <div class="col-md-6">
                <h3>Alumni Tracer</h3>
            </div>
            <div class="col-md-6">
                <a href="{{ route('user.tracerForm') }}" type="button" class="btn btn-primary float-end">Answer Alumni Tracer</a>
            </div>
        </div>

        <div class="row my-3 mx-5 box-tracer">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Questions</th>
                        <th scope="col">Answers</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Contact Number</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Email Address</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Date of Graduation</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Date of 1st Employment</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Date of Current Employment</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Current Nature/Type of Work</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Current Plantilla Item/Work Position</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Current Status of Employment</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Current Monthly Income</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Is your job/work related to your undergraduate program?</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Present Company Email Address</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Present Company Contact Number</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>First Job/Title/Position</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Company name (First Job)</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Company Email Address (First Job)</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Company Contact Number (First Job)</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
