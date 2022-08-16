@extends('layouts.login-layout')

@section('page-title', 'Login')

@section('title', 'Admin Login')

@section('layout', 'box-login')

@section('content')

<form class="d-grid gap-2" action="{{ route('admin.loginAdmin') }}" method="post">
    @if(Session::has('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if(Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
    @endif
    @csrf

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Admin ID</label>
                    <input type="text" class="form-control" name="adminID"  value="{{old('adminID')}}">
                    <span class="text-danger">@error('adminID') {{$message}} @enderror</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                </div>
            </div>
            <div class="col-md-12 d-flex justify-content-center mt-4 mb-2">
                <button type="submit" class="btn btn-primary">Login as Admin</button>
            </div>
            <div class="col-md-12 d-flex justify-content-center mt-3">
                <p>Not an admin? <a href="{{ route('user.login') }}">Login as Alumni here!</a></p>
            </div>
        </div>
    </div>
</form>

@endsection
