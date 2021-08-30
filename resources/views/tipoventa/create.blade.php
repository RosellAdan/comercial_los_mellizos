@extends('layouts.app')
@section('content')

    <div class="row">
        <form method="POST" action="{{ route('tipoventa.store') }}">
            @csrf

            <div class="col s12 m10 offset-m1 l6 offset-l3 xl6 offset-xl3">
                <div id="panel-left" class="card">

                    <div class="card-content">
                        <span class="card-title primary-text-color primary-text-style">
                            Formulario de Registro
                            </span>
                        <div class="row">
                            <div class="col s12 divider"></div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 m4">
                                <input id="coditv" type="number" class="validate" name="coditv" value="{{old('coditv')}}">
                                <label for="coditv">ID PERSONAL:</label>
                                @error('coditv')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="input-field col s12 m4">
                                <input id="tipopago" type="text" class="validate" name="tipopago" value="{{old('tipopago')}}">
                                <label for="tipopago">DESCRIPCION:</label>
                                @error('tipopago')
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
