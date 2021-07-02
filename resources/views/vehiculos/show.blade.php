@extends('layouts.main', ['activePage' => 'vehiculos', 'titlePage' => 'Vehiculo'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">Detalles del Vehiculo</h4>
                            <p class="card-category">Vista detallada del vehículo con las placas {{ $vehiculo->noPlaca }}...</p>
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
                                                        <td>{{ $vehiculo->id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Transportista</th>
                                                        <td>{{ $vehiculo->transportista_id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Número de Permiso de la SCT</th>
                                                        <td><span
                                                                class="badge badge-primary">{{ $vehiculo->noPermisoSCT }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tipo de vehiculo</th>
                                                        <td>{{ $vehiculo->tipo_id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Capacidad del vehiculo</th>
                                                        <td>{{ $vehiculo->capacidad_id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Número de placa</th>
                                                        <td><span
                                                                class="badge badge-primary">{{ $vehiculo->noPlaca }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Ultima Modificación</th>
                                                        <td>{{ $vehiculo->updated_at }}</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route('vehiculos.index') }}"
                                                    class="btn btn-sm btn-success mr-3">Volver al índice</a>
                                                <a href="{{ route('vehiculos.edit', $vehiculo->id) }}"
                                                    class="btn btn-sm btn-warning mr-3">Editar Vehiculo</a>
                                                <form action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="POST"
                                                    style="display: inline-block;"
                                                    onsubmit="return confirm('¿Esta seguro que desea eliminar a la Vehiculo {{ $vehiculo->name }}?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger" type="submit"
                                                        rel="tooltip">Eliminar Vehiculo</button>
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
