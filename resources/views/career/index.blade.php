@extends('layouts.homepage')

@section('page-title', 'Careers')

@section('career-active', 'active')

@section('content')

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <h3>Careers</h3>
                @include('career.add-modal')
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCareer">Add Career</button>
            </div>

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
        </div>
    </div>

@endsection
