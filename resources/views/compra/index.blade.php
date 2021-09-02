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
                        <th>CODIGO COMPRA</th>
                        <th>FECHA COMPRA</th>
                        <th>TOTAL Bs.</th>
                        <th>PROVEEDOR </th>
                        <TH>ENCARGADO </TH>
                        <th>ACCIONES</th>


                    </tr>
                    </thead>
                    <tbody>
                        @foreach($compras as $compra)
                            <tr>
                                <td>{{$compra->codicom }}</td>
                                <td>{{$compra->fechacompra }}</td>
                                <td>{{$compra->totalcompra }}</td>
                                <td>{{$compra->proveedor->nombre.''.$compra->proveedor->apellido}}</td>
                                <td>{{$compra->personal->nombre.''.$compra->personal->apellido}}</td>
                                <td>
                                   <a href="{{ route('compra.show', [$compra->codicom]) }}"><span class="new badge teal" data-badge-caption="Detalle"></span></a>
                                    <a href="{{ route('compra.edit', [$compra->codicom]) }}"><span class="new badge  teal" data-badge-caption="Editar"></span></a>
                                    <a href="{{ route('compra.destroy', [$compra->codicom]) }}"><span class="new badge teal" data-badge-caption="Eliminar"></span></a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
