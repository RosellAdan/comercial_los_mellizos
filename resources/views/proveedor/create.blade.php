@extends('layouts.app')
@section('content')

    <div class="row">
        <form method="POST" action="{{ route('proveedor.store') }}">
            @csrf

            <div class="col s12 m10 offset-m1 l6 offset-l3 xl6 offset-xl3">
                <div id="panel-left" class="card">

                    <div class="card-content">
                        <span class="card-title primary-text-color primary-text-style">
                             Registro de Proveedor
                            </span>
                        <div class="row">
                            <div class="col s12 divider"></div>
                        </div>

                        <div class="row">
                           {{-- <div class="input-field col s12 m4">
                                <input id="codip" type="number" class="validate" name="codip" value="{{old('codip')}}">
                                <label for="codip">CODIGO PROVEEDOR:</label>
                                @error('codip')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>--}}
                            <div class="input-field col s12 m4">
                                <input id="ci" type="number" class="validate" name="ci" value="{{old('ci')}}">
                                <label for="ci">CEDULA DE IDENTIDAD:</label>
                                @error('ci')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="input-field col s12 m4">
                                <input id="nombre" type="text" class="validate" name="nombre" value="{{old('nombre')}}">
                                <label for="nombre">NOMBRE:</label>
                                @error('nombre')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="input-field col s12 m4">
                                <input id="apellido" type="text" class="validate" name="apellido" value="{{old('apellido')}}">
                                <label for="apellido">APELLIDO:</label>
                                @error('apellido')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="input-field col s12 m12">
                                <select name="sexo" id="sexo">
                                    <option value="">ELIJA UNA OPCION</option>
                                    <option value="M">MASCULINO</option>
                                    <option value="F">FEMENINO</option>
                                </select>
                                <label for="sexo">SEXO:</label>
                                @error('sexo')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="input-field col s12 m4">
                                <input id="direccion" type="text" class="validate" name="direccion" value="{{old('direccion')}}">
                                <label for="direccion">DIRECCION:</label>
                                @error('direccion')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="input-field col s12 m4">
                                <input id="celular" type="number" class="validate" name="celular" value="{{old('celular')}}">
                                <label for="celular">CELULAR:</label>
                                @error('celular')
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
