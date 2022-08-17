@extends('layouts.admin-layout')

@section('page-title', 'Admin-Tracer')
@section('tracer-status', 'active')
@section('tracer-collapse', 'show')
@section('update-tracer-status', 'active')

@section('content')



<div class="container-fluid box-content">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h3>Update Tracer Questionnaire</h3>
        </div>
        <div class="col-md-6">
            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addTracerQuestion">Add Question</button>
        </div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Question</th>
                    <th scope="col" style="width: 200px">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($tracer as $question)
                    <tr>
                        <td>{{ $question->question }}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editTracerQuestion{{ $question->questionID }}">Edit</button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteTracerQuestion{{ $question->questionID }}">Delete</button>
                            @include('admin-tracer.action')
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <form action="{{ route('admin.addTracerQuestion') }}" method="post" class="mt-3">
                @csrf
                <div id="wrapper">
                </div>
            </form>
        </div>
    </div>
</div>



@endsection
