@extends('layouts.main', ['activePage' => 'transportistas', 'titlePage' => 'Transportistas'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">Detalles del Transportista</h4>
                            <p class="card-category">Vista detallada de {{ $transportista->razonSocial }}...</p>
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
                                                        <td>{{ $transportista->id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Razón Social</th>
                                                        <td>{{ $transportista->razonSocial }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Número de Registro Ambiental</th>
                                                        <td><span
                                                                class="badge badge-primary">{{ $transportista->noRegistroAmbiental }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Dirección</th>
                                                        <td>{{ $transportista->calle }} #{{ $transportista->noExterior }},
                                                            {{ $transportista->noInterior }} Col. {{ $transportista->colonia }},
                                                            {{ $transportista->estado_id }}, {{ $transportista->municipio_id }} C.P.
                                                            {{ $transportista->codigoPostal }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Teléfono</th>
                                                        <td>{{ $transportista->telefono }} ext. {{ $transportista->extension }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Correo de Contacto</th>
                                                        <td><a href="mailto:{{ $transportista->correo }}"
                                                                title="Enviar correo a {{ $transportista->correo }}">{{ $transportista->correo }}</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Ultima Modificación</th>
                                                        <td>{{ $transportista->updated_at }}</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route('transportistas.index') }}"
                                                    class="btn btn-sm btn-success mr-3">Volver al índice</a>
                                                <a href="{{ route('transportistas.edit', $transportista->id) }}"
                                                    class="btn btn-sm btn-warning mr-3">Editar Transportista</a>
                                                <form action="{{ route('transportistas.destroy', $transportista->id) }}" method="POST"
                                                    style="display: inline-block;"
                                                    onsubmit="return confirm('¿Esta seguro que desea eliminar este Transportista {{ $transportista->name }}?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger" type="submit"
                                                        rel="tooltip">Eliminar Transportista</button>
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
