@extends('layouts.main', ['activePage' => 'plantas', 'titlePage' => 'Planta'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">Detalles de la Planta</h4>
                            <p class="card-category">Vista detallada de {{ $planta->razonSocial }}...</p>
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
                                                        <td>{{ $planta->id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Razón Social</th>
                                                        <td>{{ $planta->razonSocial }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Número de Registro Ambiental</th>
                                                        <td><span
                                                                class="badge badge-primary">{{ $planta->noRegistroAmbiental }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Dirección</th>
                                                        <td>{{ $planta->calle }} #{{ $planta->noExterior }},
                                                            {{ $planta->noInterior }} Col. {{ $planta->colonia }},
                                                            {{ $planta->estado_id }}, {{ $planta->municipio_id }} C.P.
                                                            {{ $planta->codigoPostal }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Teléfono</th>
                                                        <td>{{ $planta->telefono }} ext. {{ $planta->extension }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Correo de Contacto</th>
                                                        <td><a href="mailto:{{ $planta->correo }}"
                                                                title="Enviar correo a {{ $planta->correo }}">{{ $planta->correo }}</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Ultima Modificación</th>
                                                        <td>{{ $planta->updated_at }}</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route('plantas.index') }}"
                                                    class="btn btn-sm btn-success mr-3">Volver al índice</a>
                                                <a href="{{ route('plantas.edit', $planta->id) }}"
                                                    class="btn btn-sm btn-warning mr-3">Editar Planta</a>
                                                <form action="{{ route('plantas.destroy', $planta->id) }}" method="POST"
                                                    style="display: inline-block;"
                                                    onsubmit="return confirm('¿Esta seguro que desea eliminar la Planta: {{ $planta->razonSocial }}?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger" type="submit"
                                                        rel="tooltip">Eliminar Planta</button>
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
