@extends('layouts.login-layout')

@section('page-title', 'Register')

@section('title', 'Register')

@section('layout', 'box-login')

@section('content')

    <a href="{{ route('user.register') }}" type="button" class="btn btn-primary">Alumni/Student</a>
    <button type="button" class="btn btn-danger">Administrator</button>

@endsection
