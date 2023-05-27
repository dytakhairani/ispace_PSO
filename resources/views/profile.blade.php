<!-- resources/views/profile.blade.php -->

@extends('components.header')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Profile') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('profile.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">{{ __('Full Name') }}</label>
                                <input id="name" type="text" class="form-control" name="name"
                                    value="{{ $user->name }}" required>
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control" name="email"
                                    value="{{ $user->email }}" required>
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
