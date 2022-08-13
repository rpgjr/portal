@extends('layouts.admin-layout')

@section('page-title', 'Admin')
@section('alumni-list-status', 'active')
@section('monitor-collapse', 'show')
@section('user-status', 'active')

@section('content')

    <div class="container-fluid box-content">
        <div class="row">
            <div class="col-md-12">
                <h3 class="mb-5">List of Alumni</h3>

                <div class="row">
                    <div class="col-md-12 mb-2">
                        <form class="row g-3" method="post" enctype="multipart/form-data" action="{{ route('admin.addAlumni') }}">
                            @csrf
                            <div class="col-auto">
                                <input class="form-control" type="file" id="formFile" name="excel_file">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mb-3">Upload</button>
                            </div>
                            @error('excel_file')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </form>
                    </div>

                    <div class="col-md-12 my-2">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Last Name</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Middle Name</th>
                                <th scope="col">Student Number</th>
                                <th scope="col">Course</th>
                                <th scope="col">Batch</th>
                                <th scope="col">Birthday</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($alumni))
                                @foreach ($alumni as $alum)
                                    <tr>
                                        <th scope="row">{{ $alum->studNumber }}</th>
                                        <td>{{ $alum->lastname }}</td>
                                        <td>{{ $alum->firstname }}</td>
                                        <td>{{ $alum->middlename }}</td>
                                        <td>{{ $alum->course }}</td>
                                        <td>{{ $alum->batch }}</td>
                                        <td>{{ $alum->bmonth }}/{{ $alum->bday }}/{{ $alum->byear }}</td>
                                    </tr>
                                @endforeach
                                @else
                                    <tr>
                                        <td colspan="7">No Data Found</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection
