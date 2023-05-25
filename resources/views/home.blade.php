
@extends('components.header')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class=" ">

                {{-- semester 1 --}}
                <div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{-- <h1 class="font-weight-bold" style="font-size: 40px; color: #283D70">
                            Halo, {{ Auth::user()->name }}
                        </h1> --}}

                        <h1 class="font-bold text-[40px] text-[#283D70]">Halo, {{ Auth::user()->name }}</h1>
                        <p class="text-[14px] text-[#283D70]">Welcome to iSpace! </p>
                        {{-- {{ __('Halo') }} --}}

                        {{-- <div class="w-[1153px] h-[270px] " style="width: 1153px;height: 270px">

                        </div> --}}

                    </div>

                </div>
                {{-- semester 1 --}}

                {{-- semester 2 : start --}}

            {{-- semester 2 : end --}}


        </div>
    </div>
    </div>
@endsection
