@extends('layouts.homepage')

@section('page-title', 'Alumni Tracer')
@section('form-active', 'active')

@section('content')

    <div class="container my-3">
        <div class="row my-5">
            <div class="col-md-6">
                <h3>Forms for Graduating Students</h3>
            </div>
        </div>

        <div class="row mx-4 box-forms">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Form Name</th>
                        <th scope="col" style="width: 200px;">Status</th>
                        <th scope="col" style="width: 200px;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="align-middle">Exit Interview</th>
                        <td class="align-middle">Unanswered</td>
                        <td>
                            <a href="{{ route('user.exitInterviewP1') }}" type="button" class="btn btn-primary">Answer</a>
                            <button type="button" class="btn btn-success">Print</button>
                        </td>
                      </tr>
                      <tr>
                        <th class="align-middle">SAS Form</th>
                        <td class="align-middle">Unanswered</td>
                        <td>
                            <a href="{{ route('user.sasP1') }}" type="button" class="btn btn-primary">Answer</a>
                            <button type="button" class="btn btn-success">Print</button>
                        </td>
                      </tr>
                      <tr>
                        <th class="align-middle">Personal Data Sheet</th>
                        <td class="align-middle">Unanswered</td>
                        <td>
                            <a href="{{ route('user.pdsP1') }}" type="button" class="btn btn-primary">Answer</a>
                            <button type="button" class="btn btn-success">Print</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection
