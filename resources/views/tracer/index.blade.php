@extends('layouts.homepage')

@section('page-title', 'Alumni Tracer')
@section('tracer-active', 'active')

@section('content')

    <div class="container my-5">
        <div class="row mt-5">
            <div class="col-md-6">
                <h3>Alumni Tracer</h3>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn btn-primary float-end">Answer Alumni Tracer</button>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Question</th>
                        <th scope="col">Answer</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($tracer as $questions)
                        <tr>
                            <th scope="row">{{ $questions->question }}</th>
                            <td>
                                @if (false)

                                @else
                                    No data yet.
                                @endif
                            </td>
                        </tr>
                        <tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
