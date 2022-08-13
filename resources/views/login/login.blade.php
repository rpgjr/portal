@extends('layouts.login-layout')

@section('page-title', 'Login')

@section('title', 'Login')

@section('layout', 'box-login')

@section('content')

    <a href="{{ route('user.login') }}" type="button" class="btn btn-primary">Alumni/Student</a>
    @if(Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
    @endif
    <a href="{{ route('admin.login') }}" type="button" class="btn btn-danger">Administrator</a>

@endsection
