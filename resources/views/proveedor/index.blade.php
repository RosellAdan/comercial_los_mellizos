@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('proveedor.create') }}" class="waves-effect waves-light btn dark-primary-color">Registrar</a>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>CODIGO</th>
                        <th>CARNET</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>SEXO</th>
                        <th>DIRECCION</th>
                        <th>CELULAR</th>
                        <th>ACCIONES</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach($proveedores as $proveedor)
                            <tr>
                                <td>{{ $proveedor->codip }}</td>
                                <td>{{ $proveedor->ci }}</td>
                                <td>{{ $proveedor->nombre}}</td>
                                <td>{{ $proveedor->apellido}}</td>
                                <td>{{ $proveedor->sexo }}</td>
                                <td>{{ $proveedor->direccion }}</td>
                                <td>{{ $proveedor->celular }}</td>
                                <td>
                  {{--                  <a href="{{ route('tipopersonal.show', [$tipopersonal->idp]) }}"><span class="new badge teal" data-badge-caption="ver"></span></a>--}}
                                    <a href="{{ route('proveedor.edit', [$proveedor->codip]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="{{ route('proveedor.destroy', [$proveedor->codip]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
