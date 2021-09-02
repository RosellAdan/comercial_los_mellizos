@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('tipoventa.create') }}" class="waves-effect waves-light btn dark-primary-color">Registrar</a>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>CODIGO</th>
                        <th>TIO DE PAGO</th>
                        <th>ACCIONES</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach($tipoventas as $tipoventa)
                            <tr>
                                <td>{{ $tipoventa->coditv }}</td>
                                <td>{{ $tipoventa->tipopago }}</td>

                                <td>
                  {{--                  <a href="{{ route('tipopersonal.show', [$tipopersonal->idp]) }}"><span class="new badge teal" data-badge-caption="ver"></span></a>--}}
                                    <a href="{{ route('tipoventa.edit', [$tipoventa->coditv]) }}"><span class="new badge tael" data-badge-caption="Editar"></span></a>
                                    <a href="{{ route('tipoventa.destroy', [$tipoventa->coditv]) }}"><span class="new badge tael" data-badge-caption="Eliminar"></span></a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
