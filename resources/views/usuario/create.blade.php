@extends('layouts.app')
@section('content')

    <div class="row">
        <form method="POST" action="{{ route('usuario.store') }}">
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
                                <input id="idusuario" type="number" class="validate" name="idusuario" value="{{old('idusuario')}}">
                                <label for="idusuario">ID DE USUARIO:</label>
                                @error('idusuario')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="input-field col s12 m4">
                                <input id="contraseña" type="text" class="validate" name="contraseña" value="{{old('contraseña')}}">
                                <label for="contraseña">CONTRASEÑA:</label>
                                @error('contraseña')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m12">
                                <select name="ci" id="ci">
                                    <option value="">ELIJA UNA OPCION</option>
                                    @foreach($personales as $personal)
                                        <option value="{{ $personal->ci }}">{{ $personal->nombre }} {{ $personal->apellido}}</option>
                                    @endforeach

                                </select>

                                <label for="idp">SELECCIONE EL REALIZADOR DE LA COMPRA:</label>
                                @error('ci')
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

