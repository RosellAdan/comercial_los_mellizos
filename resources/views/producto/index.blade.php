@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('compra.create') }}" class="waves-effect waves-light btn dark-primary-color">Registrar</a>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>codicom</th>
                        <th>fechacompra</th>
                        <th>totalcompra</th>
                        <th>PROVEEDOR </th>
                        <th>NOMBRE</th>
                        <TH>ENCARGADO </TH>
                        <th>DE COMPRA </th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach($compras as $compra)
                            <tr>
                                <td>{{$compra->codicom }}</td>
                                <td>{{$compra->fechacompra }}</td>
                                <td>{{$compra->totalcompra }}</td>
                                <td>{{$compra->proveedor->nombre}}</td>
                                <td>{{$compra->proveedor->apellido}}</td>
                                <td>{{$compra->personal->nombre}}</td>
                                <td>{{$compra->personal->apellido}}</td>
                                <td>
                               {{--    <a href="{{ route('personal.show', [$personal->ci]) }}"><span class="new badge teal" data-badge-caption="ver"></span></a>--}}
                                    <a href="{{ route('compra.edit', [$compra->codicom]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="{{ route('compra.destroy', [$compra->codicom]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
