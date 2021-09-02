@extends('layouts.app')
@section('content')

    <div class="row">
        <form method="POST" action="{{ route('producto.store') }}">
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
                          {{-- <div class="input-field col s12 m4">
                                <input id="codiprod" type="number" class="validate" name="codiprod" value="{{old('codiprod')}}">
                                <label for="codiprod">CODIGO DE PRODUCTO:</label>
                                @error('codiprod')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>--}}
                            <div class="input-field col s12 m4">
                                <input id="descripcion" type="text" class="validate" name="descripcion" value="{{old('descripcion')}}">
                                <label for="descripcion">DESCRIPCION:</label>
                                @error('descripcion')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m4">
                                <input id="cantidadstock" type="number" class="validate" name="cantidadstock" value="{{old('cantidadstock')}}">
                                <label for="cantidadstock">STOCK:</label>
                                @error('cantidadstock')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="input-field col s12 m4">
                                <input id="precio" type="number" class="validate" name="precio" value="{{old('precio')}}">
                                <label for="precio">PRECIO:</label>
                                @error('precio')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m12">
                               <select name="ci" id="ci">
                                   <option value="">ELIJA UNA OPCION</option>
                                   @foreach($personales as $personal)
                                       <option value="{{ $personal->ci }}">{{ $personal->nombre.' '. $personal->apellido}}</option>
                                   @endforeach
                               </select>

                                <label for="idp">SELECCIONE QUIEN ESTA REGISTRANDO:</label>
                                @error('ci')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="input-field col s12 m12">
                                <select name="coditp" id="coditp">
                                    <option value="">ELIJA UNA OPCION</option>
                                    @foreach($tipoproductos as $tipoproducto)
                                        <option value="{{ $tipoproducto->coditp }}">{{ $tipoproducto->descripcion }}</option>
                                    @endforeach

                                </select>

                                <label for="idp">SELECCIONE EL TIPO DE PRODUCTO:</label>
                                @error('coditp')
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

