@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col m10 offset-m1">
                <div class="card">
                    <div class="card-header center">{{ __('') }}</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="center">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                {{ __('HAS INICIADO SESSION') }}
                            </div>
                        </div>

                        <div class="row">
                            <h3 class="center">BIENVENIDO AL COMERCIAL </h3>
                            <h3 class="center"> LOS MELLIZOS</h3>

                            <div class="col s12 center">
                                <img src="{{asset('imgs/prin.jpg')}}" alt="" class=" responsive-img"> <!-- notice the "circle" class -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
