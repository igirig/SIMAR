@extends('layouts.main', ['activePage' => 'estaciones', 'titlePage' => 'Estaciones'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">Detalles de la estación</h4>
                            <p class="card-category">Vista detallada de {{ $estacion->razonSocial }}...</p>
                        </div>
                        <!--Body-->
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success" role="success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="row">
                                <!--Start third-->
                                <div class="col-md-12">
                                    <div class="card card-user">
                                        <div class="card-body">
                                            <table class="table table-bordered table-striped">
                                                <tbody>
                                                    <tr>
                                                        <th>ID</th>
                                                        <td>{{ $estacion->id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Razón social</th>
                                                        <td>{{ $estacion->razonSocial }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Número de registro ambiental</th>
                                                        <td><span
                                                                class="badge badge-primary">{{ $estacion->noEstacion }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Dirección</th>
                                                        <td>{{ $estacion->calle }} #{{ $estacion->noExterior }},
                                                            {{ $estacion->noInterior }} Col. {{ $estacion->colonia }},
                                                            {{ $estacion->estado_id }}, {{ $estacion->municipio_id }} C.P.
                                                            {{ $estacion->codigoPostal }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Teléfono</th>
                                                        <td>{{ $estacion->telefono }} ext. {{ $estacion->extension }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Correo de contacto</th>
                                                        <td><a href="mailto:{{ $estacion->correo }}"
                                                                title="Enviar correo a {{ $estacion->correo }}">{{ $estacion->correo }}</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Ultima modificación</th>
                                                        <td>{{ $estacion->updated_at }}</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route('estaciones.index') }}"
                                                    class="btn btn-sm btn-success mr-3">Volver al índice</a>
                                                <a href="{{ route('estaciones.edit', $estacion->id) }}"
                                                    class="btn btn-sm btn-warning mr-3">Editar estación</a>
                                                <form action="{{ route('estaciones.destroy', $estacion->id) }}" method="POST"
                                                    style="display: inline-block;"
                                                    onsubmit="return confirm('¿Está seguro que desea eliminar esta estación: {{ $estacion->razonSocial }}?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger" type="submit"
                                                        rel="tooltip">Eliminar estación</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end third-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
