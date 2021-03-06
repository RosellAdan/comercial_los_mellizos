@extends('layouts.app')
@section('content')

    <div class="row">
        <form method="POST" action="{{ route('compra.update', [$compra->codicom]) }}">
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
                                <input id="codicom" type="number" class="validate" name="codicom" value="{{$compra->codicom}}">
                                <label for="codicom">CEDULA DE IDENTIDAD :</label>
                                @error('codicom')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="input-field col s12 m4">
                                <input id="fechacompra" type="text" class="validate" name="fechacompra" value="{{$compra->fechacompra}}">
                                <label for="fechacompra">NOMBRE:</label>
                                @error('fechacompra')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m4">
                                <input id="totalcompra" type="number" class="validate" name="totalcompra" value="{{$compra->totalcompra}}">
                                <label for="totalcompra">APELLIDO:</label>
                                @error('totalcompra')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>


                            <div class="input-field col s12 m12">
                                <select name="codip" id="codip">
                                    <option value="">ELIJA UNA OPCION</option>
                                    @foreach($proveedores as $proveedor)
                                        <option {{$proveedor->codip === $compra->codip?'selected':''}}
                                                value="{{ $proveedor->codip }}">{{ $proveedor->nombre}} {{ $proveedor->apellido}}</option>
                                    @endforeach
                                </select>

                                <label for="codip">SELECCIONE UN PROVEEDOR:</label>
                                @error('codip')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="input-field col s12 m12">
                                <select name="ci" id="ci">
                                    <option value="">ELIJA UNA OPCION</option>
                                    @foreach($personales as $personal)
                                        <option {{$personal->ci === $compra->ci?'selected':''}}
                                                value="{{ $personal->ci }}">{{ $personal->nombre }} {{ $personal->apellido}}</option>
                                    @endforeach

                                </select>

                                <label for="ci">SELECCIONE EL REALIZADOR DE LA COMPRA:</label>
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
