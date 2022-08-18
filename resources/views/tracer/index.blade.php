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

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
