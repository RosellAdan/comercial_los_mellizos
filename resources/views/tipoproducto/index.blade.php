@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('tipoproducto.create') }}" class="waves-effect waves-light btn dark-primary-color">Registrar</a>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>CODIGO</th>
                        <th>DESCRIPCION</th>
                        <th>ACIONES</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach($tipoproductos as $tipoproducto)
                            <tr>
                                <td>{{ $tipoproducto->coditp }}</td>
                                <td>{{ $tipoproducto->descripcion }}</td>

                                <td>
                  {{--                  <a href="{{ route('tipopersonal.show', [$tipopersonal->idp]) }}"><span class="new badge teal" data-badge-caption="ver"></span></a>--}}
                                    <a href="{{ route('tipoproducto.edit', [$tipoproducto->coditp]) }}"><span class="new badge  tael" data-badge-caption="Editar"></span></a>
                                    <a href="{{ route('tipoproducto.destroy', [$tipoproducto->coditp]) }}"><span class="new badge tael" data-badge-caption="Eliminar"></span></a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
