@extends('layouts.main', ['activePage' => 'sucursales', 'titlePage' => 'Sucursal'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">Detalles de la Sucursal</h4>
                            <p class="card-category">Vista detallada de la Sucursal {{ $sucursal->nombre }}...</p>
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
                                    <div class="card card-usar">
                                        <div class="card-body">
                                            <table class="table table-bordered table-striped">
                                                <tbody>
                                                    <tr>
                                                        <th>ID</th>
                                                        <td>{{ $sucursal->id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Cliente</th>
                                                        <td>{{ $sucursal->cliente_id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <td>{{ $sucursal->nombre }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Número de Registro Ambiental</th>
                                                        <td><span
                                                                class="badge badge-primary">{{ $sucursal->noRegistroAmbiental }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Dirección</th>
                                                        <td>{{ $sucursal->calle }} #{{ $sucursal->noExterior }},
                                                            {{ $sucursal->noInterior }} Col. {{ $sucursal->colonia }} C.P.
                                                            {{ $sucursal->codigoPostal }}.
                                                            {{ $sucursal->estado_id }}, {{ $sucursal->municipio_id }} </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Teléfono</th>
                                                        <td>{{ $sucursal->telefono }} ext. {{ $sucursal->extension }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Correo de Contacto</th>
                                                        <td><a href="mailto:{{ $sucursal->correo }}"
                                                                title="Enviar correo a {{ $sucursal->correo }}">{{ $sucursal->correo }}</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Ultima Modificación</th>
                                                        <td>{{ $sucursal->updated_at }}</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route('sucursales.index') }}"
                                                    class="btn btn-sm btn-success mr-3">Volver al índice</a>
                                                <a href="{{ route('sucursales.edit', $sucursal->id) }}"
                                                    class="btn btn-sm btn-warning mr-3">Editar Sucursal</a>
                                                <form action="{{ route('sucursales.destroy', $sucursal->id) }}" method="POST"
                                                    style="display: inline-block;"
                                                    onsubmit="return confirm('¿Esta seguro que desea eliminar esta Sucursal: {{ $sucursal->nombre }}?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger" type="submit"
                                                        rel="tooltip">Eliminar Sucursal</button>
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
