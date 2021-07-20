@extends('layouts.main', ['activePage' => 'vehiculos', 'titlePage' => 'Vehiculo'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">Detalles del vehículo</h4>
                            <p class="card-category">Vista detallada del vehículo con el no. de placas
                                {{ $vehiculo->noPlaca }}...</p>
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
                                                        <td>{{ $transportista[0] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Número de Permiso de la SCT</th>
                                                        <td><span
                                                                class="badge badge-primary">{{ $vehiculo->noPermisoSCT }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tipo de vehículo</th>
                                                        <td>{{ $tipo[0] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Capacidad del vehículo</th>
                                                        <td>{{ $capacidad[0] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Número de placas</th>
                                                        <td><span
                                                                class="badge badge-info">{{ $vehiculo->noPlaca }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Ultima modificación</th>
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
                                                    class="btn btn-sm btn-warning mr-3">Editar vehículo</a>
                                                <form action="{{ route('vehiculos.destroy', $vehiculo->id) }}"
                                                    method="POST" style="display: inline-block;"
                                                    onsubmit="return confirm('¿Esta seguro que desea eliminar este vehículo con el no. de placas: {{ $vehiculo->noPlaca }}?')">
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
