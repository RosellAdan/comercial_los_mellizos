@extends('layouts.app')
@section('content')

    <div class="row">
        <form method="POST" action="{{ route('compra.detallecompra.store', [$codicom]) }}">
            @csrf
            <div class="col s12 m10 offset-m1 l6 offset-l3 xl6 offset-xl3">
                <div id="panel-left" class="card">

                    <div class="card-content">
                        <span class="card-title primary-text-color primary-text-style">
                            Agregando un producto a la compra
                            </span>
                        <div class="row">
                            <div class="col s12 divider"></div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 m6">
                                <select name="producto" id="producto">
                                    <option value="">Elija una opción:</option>
                                    @foreach($productos as $producto)
                                        <option value="{{ $producto->codiprod }}">{{ $producto->descripcion.' || '.$producto->precio.' Bs.' }}</option>
                                    @endforeach
                                </select>
                                <label for="producto">Seleccione un producto:</label>
                                @error('producto')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m6">
                                <input id="cantidadstock" type="number" class="validate" name="cantidadstock" value="{{ old('cantidadstock') }}">
                                <label for="cantidadstock">STOCK:</label>
                                @error('cantidadstock')
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
