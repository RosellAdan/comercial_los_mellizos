@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        {{--<div class="col s4">
            <a href="{{ route('factura.create') }}" class="waves-effect waves-light btn dark-primary-color">Registrar</a>
        </div>--}}
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>numerofactura</th>
                        <th>detalle</th>
                        <th>precio</th>
                        <th>fechafactura </th>
                        <th>codiv</th>
                        <TH>cic </TH>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach($facturas as $factura)
                            <tr>
                                <td>{{$factura->numerofactura }}</td>
                                <td>{{$factura->detalle }}</td>
                                <td>{{$factura->precio }}</td>
                                <td>{{$factura->fechafactura}}</td>
                                <td>{{$factura->venta->codiv}}</td>
                                <td>{{$factura->cliente->nombre}}</td>
                                <td>{{$factura->cliente->apellido}}</td>
                                <td>
                               {{--    <a href="{{ route('personal.show', [$personal->ci]) }}"><span class="new badge teal" data-badge-caption="ver"></span></a>s
                                    <a href="{{ route('factura.edit', [$factura->numerofactura]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="{{ route('factura.destroy', [$factura->numerofactura]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>--}}

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
