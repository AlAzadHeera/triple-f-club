@extends('layouts.login-layout')

@section('title','Reset Password')

@push('css')
@endpush

@section('content')
    <form method="POST" action="{{ route('password.update') }}" class="box" autocomplete="off">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <h1>Login</h1>
        <p class="text-muted"> Please enter your login and password!</p>
        <input type="email" name="email" placeholder="Username" class="@error('email') is-invalid @enderror">
        <input type="password" name="password" placeholder="New Password" id="password" class="@error('password') is-invalid @enderror">
        <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm New Password">
        <input type="submit" name="" value="Reset" href="#">

        <a class="forgot text-muted" href="{{ route('login') }}">Login</a>
    </form>
@endsection

@push('script')
@endpush
