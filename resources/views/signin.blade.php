@extends('layout')
@section('title', 'Sign In')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/sign.css') }}">
    <div class="container">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="iSpace">
        </div>
        <div class="form">
            <div class="card">
                <h2>Sign In</h2>
                <p>Please login to your account.</p>
                <form method="POST">
                    @csrf
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
