@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col s12 m10 offset-m1 l6 offset-l3 xl6 offset-xl3">
            <div id="panel-left"  class="card">
                <div class="card-content">
                    <span class="card-title primary-text-color primary-text-style">
                        Datos de la Venta
                    </span>
                    <div class="row">
                        <div class="col s12 divider"></div>
                    </div>

                    <div class="row">
                        <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Fecha Venta:</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{$venta->fechaventa}}</p>
                        </div>

                        <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Total (Bs.):</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{$venta->precioventa.' Bs.'}}</p>
                        </div>

                        <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Tipo de venta:</p>
                       </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{$venta->tipoventa->tipopago}}</p>
                        </div>

                     {{--   <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Producto:</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{ $venta->producto->descripcion}}</p>
                        </div> --}}
                        <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Cliente:</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{ $venta->cliente->nombre.' '.$venta->cliente->apellido }}</p>
                        </div>
                    </div>

                    <div class="card-action right-align">
                        <a href="{{ route('venta.index') }}" class="waves-effect waves-brown btn-flat red-text bold">Atras</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('venta.detalleventa.create', [$venta->codiv]) }}" class="waves-effect waves-light btn dark-primary-color">Agregar Producto</a>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>CODI D_VENTA</th>
                        <th>PRODUCTO</th>
                        <th>DESCRIPCION PRODUCTO</th>
                        <th>PRECIO VENTA Unit. (Bs.)</th>
                        <TH>PRECIO TOTAL</TH>
                        <th>DESCRIPCION VENTA</th>
                        <th>ACCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($venta->detalleventa as $detalleventa)
                        <tr>
                            <td>{{ $detalleventa->codiv }}</td>
                            <td>{{ $detalleventa->producto->descripcion }}</td>
                            <td>{{ $detalleventa->cantidaventa. ' unidades' }}</td>
                            <td>{{ $detalleventa->precioventa.' Bs.' }}</td>
                            <td>{{ $detalleventa->cantidaventa * $detalleventa->precioventa.' Bs.' }}</td>
                            <td>{{ $detalleventa->descripcionventa}}</td>

                            <td>
                                <a href="{{ route('venta.detalleventa.destroy', [$detalleventa->id]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
