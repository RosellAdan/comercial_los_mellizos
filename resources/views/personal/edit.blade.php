@extends('layouts.app')
@section('content')

    <div class="row">
        <form method="POST" action="{{ route('personal.update', [$personal->ci]) }}">
            @csrf
            @method('PUT')

            <div class="col s12 m10 offset-m1 l6 offset-l3 xl6 offset-xl3">
                <div id="panel-left" class="card">

                    <div class="card-content">
                        <span class="card-title primary-text-color primary-text-style">
                            Formulario de Edición
                            </span>
                        <div class="row">
                            <div class="col s12 divider"></div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 m4">
                                <input id="ci" type="number" class="validate" name="ci" value="{{$personal->ci}}">
                                <label for="ci">CEDULA DE IDENTIDAD :</label>
                                @error('ci')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="input-field col s12 m4">
                                <input id="nombre" type="text" class="validate" name="nombre" value="{{$personal->nombre}}">
                                <label for="nombre">NOMBRE:</label>
                                @error('nombre')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m4">
                                <input id="apellido" type="text" class="validate" name="apellido" value="{{$personal->apellido}}">
                                <label for="apellido">APELLIDO:</label>
                                @error('apellido')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12">
                                <textarea id="direccion" class="validate materialize-textarea" name="direccion">{{$personal->direccion}}</textarea>
                                <label for="direccion">DIRECCION:</label>
                                @error('direccion')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m12">
                                <input id="celular" type="number" class="validate" name="celular" value="{{$personal->celular}}">
                                <label for="celular">CELULAR:</label>
                                @error('celular')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="input-field col s12 m12">
                                <select name="sexo" id="sexo">
                                    <option {{$personal->sexo=='M'?'Selected':''}} value='M'>Masculino</option>
                                    <option {{$personal->sexo=='F'?'Selected':''}} value='F'>Femenino</option>
                                </select>
                                <label for="sexo">SEXO:</label>

                            </div>
                            <div class="input-field col s12 m12">
                                <select name="idp" id="idp">
                                    <option value="">ELIJA UNA OPCION</option>
                                    @foreach($tipopersonales as $tipopersonal)
                                        <option {{$tipopersonal->idp === $personal->idp?'selected':''}}
                                            value="{{ $tipopersonal->idp }}">{{ $tipopersonal->descripcion }}</option>

                                    @endforeach
                                </select>

                                <label for="idp">SELECCIONE UN TIPO PERSONAL:</label>
                                @error('idp')
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
