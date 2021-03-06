@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('cliente.create') }}" class="waves-effect waves-light btn dark-primary-color">Registrar Cliente</a>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>CARNET</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>DIRECCION</th>
                        <th>CELULAR</th>
                        <th>SEXO</th>
                        <th>ACCIONES</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->cic }}</td>
                                <td>{{ $cliente->nombre }}</td>
                                <td>{{ $cliente->apellido }}</td>
                                <td>{{ $cliente->direccion }}</td>
                                <td>{{ $cliente->celular }}</td>
                                <td>{{ $cliente->sexo }}</td>

                                <td>
                  {{--                  <a href="{{ route('tipopersonal.show', [$tipopersonal->idp]) }}"><span class="new badge teal" data-badge-caption="ver"></span></a>--}}
                                    <a href="{{ route('cliente.edit', [$cliente->cic]) }}"><span class="new badge tael" data-badge-caption="Editar"></span></a>
                                    <a href="{{ route('cliente.destroy', [$cliente->cic]) }}"><span class="new badge teal" data-badge-caption="Eliminar"></span></a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
