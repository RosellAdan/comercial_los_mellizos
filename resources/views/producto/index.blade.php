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
                        <th>codiprod</th>
                        <th>descripcion</th>
                        <th>cantidadstock </th>
                        <th>precio  </th>
                        <TH>TIPO PRODUCTO </TH>
                        <th>NOMBRE </th>
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
                                    <a href="{{ route('producto.edit', [$producto->codiprod]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="{{ route('producto.destroy', [$producto->codiprod]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
