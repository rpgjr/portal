@extends('layouts.homepage')

@section('page-title', 'Alumni Tracer')
@section('profile-active', 'active')

@section('content')

    <div class="container my-3">
        <div class="row my-5">
            <div class="col-md-6">
                <h3>Alumni Profile</h3>
            </div>
        </div>

        @foreach ($account as $acc)
        {!! Form::model($acc, [ 'method' => 'patch','route' => ['user.updateProfile', $acc->userID] ]) !!}
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row box-profile align-items-center">
                    <div class="col-md-12 my-4">
                        <h3>Information Settings</h3>
                    </div>
                    <div class="col-md-4 my-2">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lastName" value="{{ $acc->lastName }}">
                        <span class="text-danger">@error('lastName') {{$message}} @enderror</span>
                    </div>
                    <div class="col-md-4 my-2">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" name="firstName" value="{{ $acc->firstName }}">
                        <span class="text-danger">@error('firstName') {{$message}} @enderror</span>
                    </div>
                    <div class="col-md-4 my-2">
                        <label class="form-label">Middle Name</label>
                        <input type="text" class="form-control" name="middleName" value="{{ $acc->middleName }}">
                        <span class="text-danger">@error('middleName') {{$message}} @enderror</span>
                    </div>
                    <div class="col-md-4 my-2">
                        <label class="form-label">Course</label>
                        <select class="form-select" name="courseID">
                            @foreach ($courses as $course)
                                <option value="{{ $course->courseID }}"
                                    @if (($course->courseID) == $acc->courseID)
                                        selected
                                    @endif
                                    >{{ $course->courseID }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 my-2">
                        <label class="form-label">Batch</label>
                        <select class="form-select" name="batch">
                            @for ($i = date('Y'); $i >= 1996; $i--)
                                <option value="{{ $i }}"
                                    @if (($acc->batch) == $i)
                                        selected
                                    @endif
                                    >{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-md-4 my-2">
                        <label class="form-label">Student Number</label>
                        <input type="text" class="form-control" name="studNumber" value="{{ $acc->studNumber }}">
                        <span class="text-danger">@error('studNumber') {{$message}} @enderror</span>
                    </div>
                    <div class="col-md-3 my-2">
                        <label class="form-label">Gender:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="Male"
                                @if ('Male' == $acc->gender)
                                    checked
                                @endif>
                            <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="Female"
                                @if ('Female' == $acc->gender)
                                    checked
                                @endif>
                            <label class="form-check-label">Female</label>
                        </div>
                    </div>
                    <div class="col-md-3 my-2">
                        <label class="form-label">Birthday</label>
                        <input type="date" class="form-control" name="bday" value="{{ $acc->bday }}">
                        <span class="text-danger">@error('bday') {{$message}} @enderror</span>
                    </div>
                    <div class="col-md-3 my-2">
                        <label class="form-label">Age</label>
                        <input type="text" class="form-control" name="age" value="{{ $acc->age }}">
                        <span class="text-danger">@error('age') {{$message}} @enderror</span>
                    </div>
                    <div class="col-md-3 my-2">
                        <label class="form-label">Religion</label>
                        <input type="text" class="form-control" name="religion" value="{{ $acc->religion }}">
                        <span class="text-danger">@error('religion') {{$message}} @enderror</span>
                    </div>
                    <div class="col-md-6 my-2">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" value="{{ $acc->email }}">
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>
                    <div class="col-md-6 my-2">
                        <label class="form-label">Mobile Number</label>
                        <input type="text" class="form-control" name="number" value="{{ $acc->number }}">
                        <span class="text-danger">@error('number') {{$message}} @enderror</span>
                    </div>
                    <div class="col-md-12 my-2">
                        <label class="form-label">City Address</label>
                        <input type="text" class="form-control" name="cityAddress" value="{{ $acc->cityAddress }}">
                        <span class="text-danger">@error('cityAddress') {{$message}} @enderror</span>
                    </div>
                    <div class="col-md-12 my-2">
                        <label class="form-label">Provincial Address</label>
                        <input type="text" class="form-control" placeholder="Provincial Address" name="provincialAddress" value="{{ $acc->provincialAddress }}">
                        <span class="text-danger">@error('provincialAddress') {{$message}} @enderror</span>
                    </div>

                    <div class="col-md-12 text-center mt-5 mb-2">
                        <button type="submit" class="btn btn-primary" style="width: 200px">Save</button>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
        @endforeach
    </div>

@endsection
