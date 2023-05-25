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
                <form method="POST">
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
                </form>
            </div>
        </div>
    </div>
@endsection
