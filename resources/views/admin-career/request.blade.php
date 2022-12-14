@extends('layouts.admin-layout')

@section('page-title', 'Admin-Career')
@section('careers-status', 'active')
@section('careers-collapse', 'show')
@section('admin.careerRequest', 'active')

@section('content')

    <div class="container-fluid box-content">
        <div class="row">
            <div class="col-md-12">
                <h3 class="mb-4">Requests for Job Posting</h3>
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

                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#approveModal{{ $job->careerID }}">Approve</button>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $job->careerID }}">Delete</button>
                                    @include('admin-career.approve')

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
