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
                        <th>cic</th>
                        <th>nombre</th>
                        <th>apellido</th>
                        <th>direccion</th>
                        <th>celular</th>
                        <th>sexo</th>
                        <th>acciones</th>

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
                                    <a href="{{ route('cliente.edit', [$cliente->cic]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="{{ route('cliente.destroy', [$cliente->cic]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
