@extends('layout')
@section('title', 'iSpace')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/landingpage.css') }}">
    <div class="container">
        <img src="{{ asset('images/logo.png') }}" alt="iSpace">
        <a href="{{ route('login') }}" class="btn btn-sign-in btn-xs">SIGN IN</a>
        <a href="{{ route('register') }}" class="btn btn-sign-up btn-xs mt-2">SIGN UP</a>
    </div>
@endsection
