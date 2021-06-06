@extends('layouts.login-layout')

@section('title','Reset Password')

@push('css')
    <style>
        h1{
            font-size: 22px !important;
        }
    </style>
@endpush

@section('content')

<form method="POST" action="{{ route('password.email') }}" class="box" autocomplete="off">
    @csrf
    <h1>Enter Your Email Address</h1>
    <p class="text-muted"> Please enter your email address!</p>
    <input type="email" name="email" placeholder="Email" id="email" class="@error('email') is-invalid @enderror">
    <input type="submit" name="" value="Reset Link" href="#">
    <a class="forgot text-muted" href="{{ route('login') }}">Login</a>
</form>

@endsection
