@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
     {{--   <div class="col s4">--}}
            <a href="{{ route('producto.create') }}" class="waves-effect waves-light btn dark-primary-color">Registrar</a>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>CODIGO</th>
                        <th>DESCRIPCION</th>
                        <th>CANTIDAD</th>
                        <th>PRECIO</th>
                        <TH>TIPO PRODUCTO </TH>
                        <th>REGISTRA </th>
                        <th>ACCIONES</th>




                    </tr>
                    </thead>
                    <tbody>
                        @foreach($productos as $producto)
                            <tr>
                                <td>{{$producto->codiprod }}</td>
                                <td>{{$producto->descripcion }}</td>
                                <td>{{$producto->cantidadstock }}</td>
                                <td>{{$producto->precio}}</td>
                                <td>{{$producto->tipoproducto->descripcion}}</td>
                                <td>{{$producto->personal->nombre.' '.$producto->personal->apellido}}</td>



                                <td>
                               {{--    <a href="{{ route('personal.show', [$personal->ci]) }}"><span class="new badge teal" data-badge-caption="ver"></span></a>--}}
                                    <a href="{{ route('producto.edit', [$producto->codiprod]) }}"><span class="new badge  teal" data-badge-caption="Editar"></span></a>
                                    <a href="{{ route('producto.destroy', [$producto->codiprod]) }}"><span class="new badge teal" data-badge-caption="Eliminar"></span></a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
   {{-- <div class="input-field col s12 m6">
        <select name="producto" id="producto">
            <option value="">Elija una opción:</option>
            @foreach($productos as $producto)
                <option value="{{ $producto->codiprod }}">{{ $producto->descripcion}}</option>
            @endforeach
        </select>
        <label for="producto">Seleccione un producto:</label>
        @error('producto')
        <span class="help-block red-text"> {{ $message }} </span>
        @enderror
        <a href="{{ route('producto.edit', [$producto->codiprod]) }}"><span class="new badge  teal" data-badge-caption="Buscar"></span></a>

    </div>--}}
    </div>

@endsection
