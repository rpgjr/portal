@extends('layouts.homepage')

@section('page-title', 'Careers')

@section('career-active', 'active')

@section('content')

    <div class="container my-5">
        <div class="row mt-5">
            <div class="col-md-6">
                <h3>List of Job Advertisement</h3>
            </div>

            <div class="col-md-6">
                @include('career.add-modal')
                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addCareer">Add Job Ad</button>
            </div>

            <div class="col-md-12">
                @if(Session::has('success'))
                <center><div class="alert alert-success">{{ Session::get('success') }}</div></center>
                @endif
                @if(Session::has('fail'))
                    <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                @endif
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="accordion" id="accordionExample">
                    @foreach ($career as $job)
                        <div class="accordion-item my-3">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#callapse{{ $job->careerID }}" aria-expanded="true" aria-controls="collapseOne">
                                    Job: {{$job->job_name}} - [{{$job->category}}]
                                </button>
                            </h2>
                            <div id="callapse{{ $job->careerID }}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p><b>Company: </b>{{$job->company}}</p>
                                    <p><b>Job   Description: </b></p>
                                    <p class="desc">{{$job->description}}</p>
                                    <p><b>Salary: </b>{{$job->salary}}</p>
                                    <p><b>Email: </b>{{$job->email}}</p>
                                    <p><b>Contact No: </b>{{$job->number}}</p>
                                    <br>
                                    <p><i>Posted by: {{$job->username}}</i></p>
                                    @if ($job->username == $data)
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $job->careerID }}">Edit</button>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $job->careerID }}">Delete</button>
                                        @include('career.action')
                                    @else
                                        <button type="button" class="btn btn-primary">Apply</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
