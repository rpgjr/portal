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
                @if(!$answers -> count())
                <a href="{{ route('user.tracerForm') }}" type="button" class="btn btn-primary float-end">Answer Alumni Tracer</a>
                @else
                <a href="{{ route('user.updateTracer') }}" type="button" class="btn btn-primary float-end">Update Alumni Tracer</a>
                @endif
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

                    @foreach($answers as $answer)
                    <tbody>
                        <tr>
                            <td>Contact Number</td>
                            <td>{{$answer->number}}</td>
                        </tr>
                        <tr>
                            <td>Email Address</td>
                            <td>{{$answer->email}}</td>
                        </tr>
                        <tr>
                            <td>Date of 1st Employment</td>
                            <td>{{$answer->ff_firstEmployment}}</td>
                        </tr>
                        <tr>
                            <td>Date of Current Employment</td>
                            <td>{{$answer->cc_currentEmployment}}</td>
                        </tr>
                        <tr>
                            <td>Current Nature/Type of Work</td>
                            <td>{{$answer->cc_typeOfWork}}</td>
                        </tr>
                        <tr>
                            <td>Current Plantilla Item/Work Position</td>
                            <td>{{$answer->cc_position}}</td>
                        </tr>
                        <tr>
                            <td>Current Status of Employment</td>
                            <td>{{$answer->cc_status}}</td>
                        </tr>
                        <tr>
                            <td>Current Monthly Income</td>
                            <td>{{$answer->cc_income}}</td>
                        </tr>
                        <tr>
                            <td>Is your job/work related to your undergraduate program?</td>
                            <td>{{$answer->relatedToCourse}}</td>
                        </tr>
                        <tr>
                            <td>Present Company Email Address</td>
                            <td>{{$answer->cc_email}}</td>
                        </tr>
                        <tr>
                            <td>Present Company Contact Number</td>
                            <td>{{$answer->cc_number}}</td>
                        </tr>
                        <tr>
                            <td>First Job/Title/Position</td>
                            <td>{{$answer->ff_position}}</td>
                        </tr>
                        <tr>
                            <td>Company name (First Job)</td>
                            <td>{{$answer->ff_email}}</td>
                        </tr>
                        <tr>
                            <td>Company Email Address (First Job)</td>
                            <td>{{$answer->ff_email}}</td>
                        </tr>
                        <tr>
                            <td>Company Contact Number (First Job)</td>
                            <td>{{$answer->ff_number}}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection

