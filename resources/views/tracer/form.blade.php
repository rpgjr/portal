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
                <a href="{{ route('user.tracerIndex') }}" type="button" class="btn btn-primary float-end">Return</a>
            </div>
        </div>

        <div class="row my-3 justify-content-center">
            <div class="col-md-6 ">
                <form action="{{ route('user.inserAnswers') }}" method="post">
                    @csrf
                    <div class="row box-tracer">
                        @foreach ($tracer as $questions)
                            <div class="col-md-12 my-3">
                                @if (($questions->question) == null)
                                    <label for="exampleInputEmail1" class="form-label">{{ $questions->questionDate }}</label>
                                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='answerDate'>
                                @else
                                    <label for="exampleInputEmail1" class="form-label">{{ $questions->question }}</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='answerText'>
                                @endif
                            </div>
                            <div class="col-md-12 mt-3 float-center">
                                <center>
                                    <button type="submit" class="btn btn-primary" style="width: 150px">Submit</button>
                                </center>
                            </div>
                        @endforeach


                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
