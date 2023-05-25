@extends('layout')
@section('title', 'Sign Up')
@section('content')
<link rel="stylesheet" href="{{ asset('css/sign.css') }}">
<div class="container">
    <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="iSpace">
    </div>
    <div class="form">
        <div class="card">
            <h2>Sign Up</h2>
            <p>Please create your account.</p>
            {{-- <form method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" id="fullname" placeholder="Full Name" name="fullname" required>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="nrp" placeholder="NRP" name="nrp" required>
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" id="dob" placeholder="Date of Birth" name="dob" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                </div>

                <button type="submit" class="btn btn-success" id="submit-btn">LOGIN</button>
            </form> --}}


            <!-- form -->
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Full Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nrp" class="col-md-4 col-form-label text-md-end">{{ __('NRP') }}</label>

                    <div class="col-md-6">
                        <input id="nrp" type="number" class="form-control" name="nrp"  required autocomplete="nrp" autofocus>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="date" class="col-md-4 col-form-label text-md-end">{{ __('Date Of Birth') }}</label>

                    <div class="col-md-6">
                        <input id="date" type="date" class="form-control" name="date"  required autocomplete="date" autofocus>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
            <!-- form -->

        </div>
    </div>
</div>
@endsection
