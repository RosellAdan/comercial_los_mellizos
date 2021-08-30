@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
         <div class="col s4">
            <a href="{{ route('usuario.create') }}" class="waves-effect waves-light btn dark-primary-color">Registrar</a>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>NUMERO DE USUARIO</th>
                        <th>CONTRASEÑA</th>
                        <th>NOMBRE DE USUARIO</th>
                        <th>APELLIDO DE USUARIO</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->idusuario }}</td>
                                <td>{{ $usuario->contraseña }}</td>
                                <td>{{ $usuario->personal->nombre}}</td>
                                <td>{{ $usuario->personal->apellido}}</td>
                                <td>
                               {{--    <a href="{{ route('personal.show', [$personal->ci]) }}"><span class="new badge teal" data-badge-caption="ver"></span></a>--}}
                                    <a href="{{ route('usuario.edit', [$usuario->idusuario]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="{{ route('usuario.destroy', [$usuario->idusuario]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
