@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('tipopersonal.create') }}" class="waves-effect waves-light btn dark-primary-color">Registrar</a>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>idp</th>
                        <th>descripcion</th>
                        <th>acciones</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach($tipopersonas as $tipopersonal)
                            <tr>
                                <td>{{ $tipopersonal->idp }}</td>
                                <td>{{ $tipopersonal->descripcion }}</td>

                                <td>
                  {{--                  <a href="{{ route('tipopersonal.show', [$tipopersonal->idp]) }}"><span class="new badge teal" data-badge-caption="ver"></span></a>--}}
                                    <a href="{{ route('tipopersonal.edit', [$tipopersonal->idp]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="{{ route('tipopersonal.destroy', [$tipopersonal->idp]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
