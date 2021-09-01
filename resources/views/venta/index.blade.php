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
                        <th>codiv</th>
                        <th>fechaventa</th>
                        <th>precioventa</th>
                        <th>tipopago</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($ventas as $venta)
                            <tr>
                                <td>{{ $venta->codiv }}</td>
                                <td>{{ $venta->fechaventa }}</td>
                                <td>{{ $venta->precioventa }}</td>
                                <td>{{ $venta->tipoventa->tipopago }}</td>
                                <td>
                                <a href="{{ route('venta.show', [$venta->codiv]) }}"><span class="new badge teal" data-badge-caption="ver"></span></a>
                                    <a href="{{ route('venta.edit', [$venta->codiv]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="{{ route('venta.destroy', [$venta->codiv]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
