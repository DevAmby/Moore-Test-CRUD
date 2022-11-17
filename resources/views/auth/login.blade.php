@extends('layouts.app')

@section('title')
    <title> Admin | login  </title>
@endsection


@section('content')


<form action="login" method="POST">


    @if(Session::get('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    @endif

    @if(Session::get('fail'))
    <div class="alert alert-danger">
        {{ Session::get('fail') }}
    </div>
    @endif

    @csrf

    <h4 class="text-center mb-4">Sign in | Admin</h4>
    <div class="form-group">
        <label class="mb-1"><strong>Email</strong></label>
        <input type="email" class="form-control" value="hello@example.com" name="email" value="{{ old('email') }}">
        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label class="mb-1"><strong>Password</strong></label>
        <input type="password" class="form-control" value="Password" name="password" value="{{ old('password') }}">
        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
    </div>
    <div class="form-row d-flex justify-content-between mt-4 mb-2">
        <div class="form-group">
            <div class="custom-control custom-checkbox ml-1">
                <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
                <label class="custom-control-label" for="basic_checkbox_1">Remember me</label>
            </div>
        </div>
        <div class="form-group">
            <a href="page-forgot-password.html">Forgot Password?</a>
        </div>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
    </div>
</form>
<div class="new-account mt-3">
    <p>Don't have an account? <a class="text-primary" href="{{route('register')}}">Sign up</a></p>
</div>
@endsection