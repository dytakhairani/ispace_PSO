@extends('components.header')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class=" ">
            {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

                <div class="card-footer">
                    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                </div>
            </div> --}}

        <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <h1 class="font-weight-bold" style="font-size: 40px; color: #283D70">
                    Halo, {{ Auth::user()->name }}
                </h1>
                <p style="color: #283D70;font-size:14px;">Welcome to iSpace!  </p>
                {{-- {{ __('Halo') }} --}}
        </div>
    </div>
</div>
@endsection
