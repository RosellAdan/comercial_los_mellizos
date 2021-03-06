@extends('layouts.app')
@section('content')

    <div class="row">
        <form method="POST" action="{{ route('venta.update', [$venta->codiv]) }}">
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
                                <input id="codiv" type="number" class="validate" name="codiv" value="{{$venta->codiv}}">
                                <label for="codiv">CODIGO DE VENTA :</label>
                                @error('codiv')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="input-field col s12 m4">
                                <input id="fechaventa" type="text" class="validate" name="fechaventa" value="{{$venta->fechaventa}}">
                                <label for="fechaventa">FECHA DE LA VENTA:</label>
                                @error('fechaventa')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m4">
                                <input id="precioventa" type="number" class="validate" name="precioventa" value="{{$venta->precioventa}}">
                                <label for="precioventa">PRECIO DE LA VENTA:</label>
                                @error('precioventa')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m12">
                                <select name="coditv" id="coditv">
                                    <option value="">ELIJA UNA OPCION</option>
                                    @foreach($tipoventas as $tipoventa)
                                        <option {{$tipoventa->coditv === $venta->codiv?'selected':''}}
                                            value="{{ $tipoventa->idp }}">{{ $tipoventa->tipopago }}</option>

                                    @endforeach
                                </select>

                                <label for="idp">SELECCIONE UN TIPO DE VENTA:</label>
                                @error('coditv')
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
