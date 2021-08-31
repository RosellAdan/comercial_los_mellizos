@extends('layouts.app')
@section('content')

    <div class="row">
        <form method="POST" action="{{ route('factura.store') }}">
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
                                <input id="numerofactura" type="number" class="validate" name="numerofactura" value="{{old('numerofactura')}}">
                                <label for="numerofactura">NUMERO DE FACTURA:</label>
                                @error('numerofactura')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="input-field col s12 m4">
                                <input id="detalle" type="text" class="validate" name="detalle" value="{{old('detalle')}}">
                                <label for="detalle">DETALLE:</label>
                                @error('detalle')
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
                            <div class="input-field col s12 m4">
                                <input id="fechafactura" type="text" class="validate" name="fechafactura" value="{{old('fechafactura')}}">
                                <label for="fechafactura">FECHA FACTURA:</label>
                                @error('fechafactura')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>


                            <div class="input-field col s12 m12">
                               <select name="codiv" id="codiv">
                                   <option value="">ELIJA UNA OPCION</option>
                                   @foreach($ventas as $venta)
                                       <option value="{{ $venta->codiv }}">{{ $venta->codiv}}</option>
                                   @endforeach
                               </select>

                                <label for="idp">SELECCIONE VENTA:</label>
                                @error('codiv')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="input-field col s12 m12">
                                <select name="cic" id="cic">
                                    <option value="">ELIJA UNA OPCION</option>
                                    @foreach($clientes as $cliente)
                                        <option value="{{ $cliente->cic }}">{{ $cliente->nombre .' '. $cliente->apellido}}</option>
                                    @endforeach

                                </select>

                                <label for="idp">SELECCIONE CLIENTE:</label>
                                @error('cic')
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

