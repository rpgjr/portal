@extends('layouts.homepage')

@section('page-title', 'Careers')

@section('career-active', 'active')

@section('content')

    <div class="container mt-5">
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
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#callapse{{ $job->id }}" aria-expanded="true" aria-controls="collapseOne">
                                    Job: {{$job->job_name}} - [{{$job->category}}]
                                </button>
                            </h2>
                            <div id="callapse{{ $job->id }}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
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
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $job->id }}">Edit</button>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $job->id }}">Delete</button>
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

        {{-- <div class="mt-5">
            <div class="row">
                @foreach ($career as $job)
                    <div class="col-md-12">
                        <button class="career-box my-2" data-bs-toggle="collapse" data-bs-target="#career{{$job->id}}" aria-expanded="false" aria-controls="career{{$job->id}}">
                            <h4><b>Job Name: </b>{{ $job->job_name }}</h4>
                            <p><b>Company Name: </b>{{ $job->company }}</p>
                            <p><b>Category: </b>{{ $job->category }}</p>
                            <p><b>Job Description: </b></p>
                            <p class="desc" style="white-space: pre-wrap">{{ $job->description }}</p>
                        </button>
                        @include('career.career-details')
                    </div>
                @endforeach
            </div>
        </div> --}}

        {{-- <div class="row mt-5">
            <div class="col-md-12">
                <div class="row">
                    @foreach ($career as $job)
                        <div class="col-md-12">
                            <button class="career-box" data-bs-toggle="collapse" data-bs-target="#career{{$job->id}}" aria-expanded="false" aria-controls="career{{$job->id}}">
                                <h4><b>Job Name: </b>{{ $job->job_name }}</h4>
                                <p><b>Company Name: </b>{{ $job->company }}</p>
                                <p><b>Category: </b>{{ $job->category }}</p>
                                <p><b>Job Description: </b></p>
                                <p class="desc" style="white-space: pre-wrap">{{ $job->description }}</p>
                            </button>

                        </div>
                    @endforeach
                </div>
                @include('career.career-details')
            </div>
        </div> --}}

        {{-- <div class="row">
            <div class="col-md-12 mt-3">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Job Name</th>
                        <th scope="col">Company</th>
                        <th scope="col">Salary</th>
                        <th scope="col">Category</th>
                        <th scope="col">Email</th>
                        <th scope="col">Number</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($career as $job)
                        <tr>
                            <th scope="col">{{ $job->job_name }}</th>
                            <td>{{ $job->company }}</td>
                            <td>{{ $job->salary }}</td>
                            <td>{{ $job->category }}</td>
                            <td>{{ $job->email }}</td>
                            <td>{{ $job->number }}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $job->id }}">Edit</button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $job->id }}">Delete</button>
                                @include('career.action')
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>
        </div> --}}
    </div>

@endsection
