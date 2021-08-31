@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col s12 m10 offset-m1 l6 offset-l3 xl6 offset-xl3">
            <div id="panel-left"  class="card">
                <div class="card-content">
                    <span class="card-title primary-text-color primary-text-style">
                        Datos de la Compra
                    </span>
                    <div class="row">
                        <div class="col s12 divider"></div>
                    </div>

                    <div class="row">
                        <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Fecha Compra:</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{$compra->fechacompra}}</p>
                        </div>

                        <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Total (Bs.):</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{$compra->totalcompra.' Bs.'}}</p>
                        </div>

                        <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Proveedor:</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{$compra->proveedor->nombre.' '.$compra->proveedor->apellido}}</p>
                        </div>

                        <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Personal encargado:</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{ $compra->personal->nombre.' '.$compra->personal->apellido }}</p>
                        </div>
                    </div>
                    <div class="card-action right-align">
                        <a href="{{ route('compra.index') }}" class="waves-effect waves-brown btn-flat red-text bold">Atras</a>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('compra.detallecompra.create', [$compra->codicom]) }}" class="waves-effect waves-light btn dark-primary-color">Agregar Producto</a>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>codicom</th>
                        <th>codiprod</th>
                        <th>preciocompra Unit. (Bs.)</th>
                        <th>cantidadcompra</th>
                        <th>descripcioncompra</th>
                        <th>acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($compra->detallecompras as $detallecompra)
                        <tr>
                            <td>{{ $detallecompra->codicom }}</td>
                            <td>{{ $detallecompra->codiprod->nombre }}</td>
                            <td>{{ $detallecompra->cantidad. ' unidades' }}</td>
                            <td>{{ $detallecompra->preciocompra.' Bs.' }}</td>
                            <td>{{ $detallecompra->cantidad * $detalle->precio_unitario.' Bs.' }}</td>
                            <td>
                                <a href="{{ route('compra.detallecompra.destroy', [$detallecompra->id]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
