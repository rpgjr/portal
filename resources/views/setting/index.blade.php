@extends('layouts.homepage')

@section('page-title', 'Account Setting')

@section('setting-active', 'active')

@section('content')


    <div class="container">
        <div class="row my-5">
            <div class="col-md-6">
                <h3>Account Setting</h3>
            </div>
        </div>

        @foreach($userID as $user)
        {!! Form::model($user, [ 'method' => 'patch','route' => ['user.update', $user->userID] ]) !!}
        <div class="row justify-content-center">
            <div class="col-md-4 my-2">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" placeholder="Username" name="username" value="{{ $user->username }}">
                <span class="text-danger">@error('username') {{$message}} @enderror</span>
            </div>
            <div class="col-md-4 my-2">
                <label class="form-label">New Password</label>
                <input type="password" class="form-control" placeholder="********" name="password">
                <span class="text-danger">@error('password') {{$message}} @enderror</span>
            </div>
            <div class="col-md-4 my-2">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-control" placeholder="********" name="password_confirmation">
                <span class="text-danger">@error('password') {{$message}} @enderror</span>
            </div>
            <div class="col-md-12 d-flex justify-content-center mt-4 mb-2">
                <button type="submit" class="btn btn-primary" style="width: 200px">Save</button>
            </div>
        </div>

        {!! Form::close() !!}
        @endforeach
    </div>
@endsection