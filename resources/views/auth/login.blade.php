@extends('layouts.login-layout')

@section('title','Login')

@yield('css')

@section('content')
    <form method="POST" action="{{ route('login') }}" class="box" autocomplete="off">
        @csrf
        <h1>Login</h1>
        <p class="text-muted"> Please enter your login and password!</p>
        <input type="email" name="email" placeholder="Username" class="@error('email') is-invalid @enderror">
        <input type="password" name="password" placeholder="Password" class="@error('password') is-invalid @enderror">
        <a class="forgot text-muted" href="{{ route('password.request') }}">Forgot password?</a>
        <input type="submit" name="" value="Login" href="#">
    </form>
@endsection

@yield('script')
