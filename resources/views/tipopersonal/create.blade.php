@extends('layouts.app')
@section('content')

    <div class="row">
        <form method="POST" action="{{ route('tipopersonal.store') }}">
            @csrf

            <div class="col s12 m10 offset-m1 l6 offset-l3 xl6 offset-xl3">
                <div id="panel-left" class="card">

                    <div class="card-content">
                        <span class="card-title primary-text-color primary-text-style">
                             Registro de Tipo Personal
                            </span>
                        <div class="row">
                            <div class="col s12 divider"></div>
                        </div>

                        <div class="row">
                          {{--  <div class="input-field col s12 m4">
                                <input id="idp" type="text" class="validate" name="idp" value="{{old('idp')}}">
                                <label for="idp">ID PERSONAL:</label>
                                @error('idp')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>--}}
                            <div class="input-field col s12 m4">
                                <input id="descripcion" type="text" class="validate" name="descripcion" value="{{old('descripcion')}}">
                                <label for="descripcion">TIPO DE  PERSONAL:</label>
                                @error('descripcion')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>



                        </div>
                        <div class="card-action right-align">
                            <button type="submit" class="waves-effect waves-brown btn-flat red-text bold" onclick="showProgress()">Guardar</button>
                        </div>

                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection
