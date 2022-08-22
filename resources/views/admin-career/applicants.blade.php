@extends('layouts.admin-layout')

@section('page-title', 'Admin-Career')
@section('careers-status', 'active')
@section('careers-collapse', 'show')
@section('manage-career-status', 'active')

@section('content')

    <div class="container-fluid box-content">
        <div class="row">
            <div class="col-md-12">
                <h3 class="mb-4">List of Applicants</h3>
            </div>

            <div class="col-md-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Student Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">Job Name</th>
                        <th scope="col">Company</th>
                        <th scope="col">Category</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($applicants as $applied)
                            <tr>
                                @foreach ($account as $user)
                                    @if ($applied->userID == $user->userID)
                                        <th>{{ $user->studNumber }}</th>
                                        <td>{{ $user->lastName }}, {{ $user->firstName }}</td>
                                    @endif
                                @endforeach
                                @foreach ($career as $job)
                                    @if ($applied->careerID == $job->careerID)
                                        <td>{{ $job->job_name }}</td>
                                        <td>{{ $job->company }}</td>
                                        <td>{{ $job->category }}</td>
                                    @endif
                                @endforeach
                                <td>Applied</td>


                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
