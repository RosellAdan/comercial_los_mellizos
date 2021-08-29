@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('crompra.create') }}" class="waves-effect waves-light btn dark-primary-color">Registrar</a>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>codicom</th>
                        <th>fechacompra</th>
                        <th>totalcompra</th>
                        <th>codip</th>
                        <th>ci</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach($compras as $compra)
                            <tr>
                                <td>{{$compra->codicom }}</td>
                                <td>{{$compra->fechacompra }}</td>
                                <td>{{$compra->totalcompra }}</td>
                                <td>{{$compra->codip }}</td>
                                <td>{{$compra->ci }}</td>
                                <td>
                               {{--    <a href="{{ route('personal.show', [$personal->ci]) }}"><span class="new badge teal" data-badge-caption="ver"></span></a>
                                    <a href="{{ route('compra.edit', [$personal->ci]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="{{ route('compra.destroy', [$personal->ci]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>--}}

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
