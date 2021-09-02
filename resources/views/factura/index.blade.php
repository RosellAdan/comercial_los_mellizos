@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
      {{--}}  <div class="col s4">
            <a href="{{ route('factura.create') }}" class="waves-effect waves-light btn dark-primary-color">Registrar</a>
        </div>--}}
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>NUMERO FACTURA</th>
                        <th>DETALLE</th>
                        <th>PRECIO</th>
                        <th>FECHA </th>
                        <th>VENTA</th>
                        <TH>ACCIONES</TH>


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

                                <td>
                               {{--    <a href="{{ route('.show', [$personal->ci]) }}"><span class="new badge teal" data-badge-caption="ver"></span></a>s--}}
                                    <a href="{{ route('factura.edit', [$factura->numerofactura]) }}"><span class="new badge tael" data-badge-caption="Editar"></span></a>
                                    <a href="{{ route('factura.destroy', [$factura->numerofactura]) }}"><span class="new badge tael" data-badge-caption="Eliminar"></span></a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
