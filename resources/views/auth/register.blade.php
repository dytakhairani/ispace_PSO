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
                <div class="mt-1">
                    <h2 style="font-size:20px;"><b>Sign Up</b></h2>
                    <p style="color:grey;">Please create your account.</p>
                </div>

                <!-- form -->
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" placeholder="Full Name" value="{{ old('name') }}" required autocomplete="name"
                            autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input id="nrp" type="number" class="form-control" name="nrp" placeholder="NRP" required
                            autocomplete="nrp" autofocus>
                    </div>

                    <div class="form-group">
                        <input id="date" type="date" class="form-control" name="date"
                            placeholder="Date of Birth"required autocomplete="date" autofocus>
                    </div>

                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" placeholder="E-mail" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" placeholder="Password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            placeholder="Confirm Password" required autocomplete="new-password">
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-3 text-center mt-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Sign Up') }}
                                </button>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <p style="text-align: center; margin: 0 auto; font-size: smaller; ">Already have an account?<a
                                href="{{ route('login') }}">
                                Sign in
                            </a></p>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
