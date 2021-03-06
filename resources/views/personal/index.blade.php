@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('personal.create') }}" class="waves-effect waves-light btn dark-primary-color">Registrar</a>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>CI</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>DIRECCION</th>
                        <th>CELULAR</th>
                        <th>SEXO</th>
                        <th>TIPO PERSONAL</th>
                        <th>ACCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($personas as $personal)
                            <tr>
                                <td>{{ $personal->ci }}</td>
                                <td>{{ $personal->nombre }}</td>
                                <td>{{ $personal->apellido }}</td>
                                <td>{{ $personal->direccion }}</td>
                                <td>{{ $personal->celular }}</td>
                                <td>{{ $personal->sexo }}</td>
                                <td>{{ $personal->tipopersonal->descripcion }}</td>
                                <td>
                               {{--    <a href="{{ route('personal.show', [$personal->ci]) }}"><span class="new badge teal" data-badge-caption="ver"></span></a>--}}
                                    <a href="{{ route('personal.edit', [$personal->ci]) }}"><span class="new badge teal" data-badge-caption="Editar"></span></a>
                                    <a href="{{ route('personal.destroy', [$personal->ci]) }}"><span class="new badge teal" data-badge-caption="Eliminar"></span></a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
