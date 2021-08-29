@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col s12 m10 offset-m1 l6 offset-l3 xl6 offset-xl3">
            <div id="panel-left"  class="card">
                <div class="card-content">
                    <span class="card-title primary-text-color primary-text-style">
                        Datos Personales
                    </span>
                    <div class="row">
                        <div class="col s12 divider"></div>
                    </div>

                    <div class="row">
                        <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">ID PERSONAL:</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{$tipopersonal->idp}}</p>
                        </div>

                        <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">DESCRIPCION:</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{$tipopersonal->descripcion}}</p>
                        </div>




                    </div>
                    <div class="card-action right-align">
                        <a href="{{ route('tipopersonal.index') }}" class="waves-effect waves-brown btn-flat red-text bold">Atras</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
