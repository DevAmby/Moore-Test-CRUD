@extends('layouts.app')

@section('title')
    <title> Admin | register  </title>
@endsection

@section('content')

<h4 class="text-center mb-4">Sign Up | New Admin</h4>

<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="row mb-12">
        <label for="name" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Name') }}</strong></label>

        <div class="col-md-12">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>


    <div class="row mb-12">
        <label for="phone" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Phone') }}</strong></label>

        <div class="col-md-12">
            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phonenumber') }}" required autocomplete="phone" autofocus>

            @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>


    <div class="row mb-12">
        <label for="email" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Email Address') }}</strong></label>

        <div class="col-md-12">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="row mb-12">
        <label for="password" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Password') }}</strong></label>

        <div class="col-md-12">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="row mb-12">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Confirm Password') }}</strong> </label>

        <div class="col-md-12">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>

    <br>

    <div class="text-center">
        <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
    </div>
</form>

<div class="new-account mt-3">
    <p>Already have an account? <a class="text-primary" href="{{route('login')}}">Sign in</a></p>
</div>

@endsection