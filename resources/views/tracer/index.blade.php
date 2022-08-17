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
                    @if (empty($tracerID))
                        <a href="{{ route('user.createForm') }}" type="button" class="btn btn-primary float-end">Answer Alumni Tracer</a>
                    @else
                        <button type="button" class="btn btn-primary float-end">Update Alumni Tracer</button>
                    @endif
                </form>
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
                        @foreach ($tracer as $questions)
                        <tr>

                                @if (($questions->question) == null)
                                    <td scope="row">{{ $questions->questionDate }}</td>
                                @else
                                    <td scope="row">{{ $questions->question }}</td>
                                @endif


                                @if (false)
                                    <td>Not Answered yet.</td>
                                @else
                                    <td>Lol</td>
                                @endif

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
