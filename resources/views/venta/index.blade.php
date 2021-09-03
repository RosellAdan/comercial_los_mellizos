@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('venta.create') }}" class="waves-effect waves-light btn dark-primary-color">Registrar</a>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>CODIGO</th>
                        <th>FECHA</th>
                        <th>PRECIO</th>
                        <th>PAGO</th>
                        <th>NOMBRE DE CLIENTE</th>
                        <th>ACCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($ventas as $venta)
                            <tr>
                                <td>{{ $venta->codiv }}</td>
                                <td>{{ $venta->fechaventa }}</td>
                                <td>{{ $venta->precioventa }}</td>
                                <td>{{ $venta->tipoventa->tipopago }}</td>
                                <td>{{ $venta->cliente->nombre.' '.$venta->cliente->apellido }}</td>
                                <td>
                                <a href="{{ route('venta.show', [$venta->codiv]) }}"><span class="new badge teal" data-badge-caption="Detalle"></span></a>
                                    <a href="{{ route('venta.edit', [$venta->codiv]) }}"><span class="new badge teal" data-badge-caption="Editar"></span></a>
                                    <a href="{{ route('venta.destroy', [$venta->codiv]) }}"><span class="new badge teal" data-badge-caption="Eliminar"></span></a>
                                    <a href="{{ route('factura.create', [$venta->codiv]) }}"><span class="new badge teal" data-badge-caption="Emitir Factura"></span></a>
                                    <a href="{{ route('factura.edit', [$venta->codiv]) }}"><span class="new badge teal" data-badge-caption="Ver Factura"></span></a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
