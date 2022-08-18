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
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row box-profile align-items-center">
                    <div class="col-md-12 my-4">
                        <h3>Information Settings</h3>
                    </div>
                    <div class="col-md-4 my-2">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" name="lastName" value="{{ $acc->lastName }}">
                        <span class="text-danger">@error('lastName') {{$message}} @enderror</span>
                    </div>
                    <div class="col-md-4 my-2">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" placeholder="First Name" name="firstName" value="{{ $acc->firstName }}">
                        <span class="text-danger">@error('firstName') {{$message}} @enderror</span>
                    </div>
                    <div class="col-md-4 my-2">
                        <label class="form-label">Middle Name</label>
                        <input type="text" class="form-control" placeholder="Middle Name" name="middleName" value="{{ $acc->middleName }}">
                        <span class="text-danger">@error('middleName') {{$message}} @enderror</span>
                    </div>
                    <div class="col-md-6 my-2">
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
                    <div class="col-md-6 my-2">
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
                        <label class="form-label">Gender:</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male"
                                @if ('Male' == $acc->gender)
                                    checked
                                @endif>
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female"
                                @if ('Female' == $acc->gender)
                                    checked
                                @endif>
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <label class="form-label">Birthday</label>
                        <input type="date" class="form-control" placeholder="Last Name" name="bday" value="{{ $acc->bday }}">
                        <span class="text-danger">@error('bday') {{$message}} @enderror</span>
                    </div>
                    <div class="col-md-4 my-2">
                        <label class="form-label">Student Number</label>
                        <input type="text" class="form-control" placeholder="Student Number" name="studNumber" value="{{ $acc->studNumber }}">
                        <span class="text-danger">@error('studNumber') {{$message}} @enderror</span>
                    </div>
                    <div class="col-md-6 my-2">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" placeholder="Email" name="email" value="{{ $acc->email }}">
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>
                    <div class="col-md-6 my-2">
                        <label class="form-label">Mobile Number</label>
                        <input type="text" class="form-control" placeholder="Mobile Number" name="number" value="{{ $acc->number }}">
                        <span class="text-danger">@error('number') {{$message}} @enderror</span>
                    </div>
                    <div class="col-md-12 my-2">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" placeholder="Address" name="address" value="{{ $acc->address }}">
                        <span class="text-danger">@error('address') {{$message}} @enderror</span>
                    </div>

                    <div class="col-md-12 text-center mt-5 mb-2">
                        <button type="submit" class="btn btn-primary" style="width: 200px">Save</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection
