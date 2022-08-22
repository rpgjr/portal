@extends('layouts.admin-layout')

@section('page-title', 'Admin-Forms')
@section('forms-status', 'active')
@section('forms-collapse', 'show')
@section('monitor-forms-status', 'active')

@section('content')
    <div class="container-fluid box-content">
        <div class="row">
            <div class="col-md-12">
                <h3 class="mb-4">Monitor Forms</h3>
            </div>

            <div class="col-md-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Student Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">PDS Status</th>
                        <th scope="col">SAS Form Status</th>
                        <th scope="col">Exit Form Status</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($account as $user)
                            <tr>
                                <th>{{ $user->studNumber }}</th>
                                <td>{{ $user->lastName }}, {{ $user->firstName }}</td>
                                <td>
                                    @foreach ($pds as $pdsForm)
                                        @if ($pdsForm->userID == $user->userID)
                                            Completed <i class="fa-solid fa-circle-check" style="color: #27AE60;"></i>
                                        @else
                                            No response <i class="fa-solid fa-circle-exclamation" style="color: #E74C3C;"></i>
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($sas as $sasForm)
                                        @if ($sasForm->userID == $user->userID)
                                            Completed <i class="fa-solid fa-circle-check" style="color: #27AE60;"></i>
                                        @else
                                            No response <i class="fa-solid fa-circle-exclamation" style="color: #E74C3C;"></i>
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($exit as $exitForm)
                                        @if ($exitForm->userID == $user->userID)
                                            Completed <i class="fa-solid fa-circle-check" style="color: #27AE60;"></i>
                                        @else
                                            No response <i class="fa-solid fa-circle-exclamation" style="color: #E74C3C;"></i>
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
