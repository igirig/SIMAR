@extends('layouts.main', ['activePage' => 'vehiculos.index', 'titlePage' => 'Vehiculos'] )
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-success">
                                    <h4 class="card-title">Lista de vehículos</h4>
                                    <p class="card-category">Seleccione una acción...</p>
                                </div>
                                <div class="card-body">
                                    @if (session('success'))
                                        <div class="alert alert-success" role="success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>Transportista</th>
                                                <th>No permiso SCT</th>
                                                <th>Tipo de vehículo</th>
                                                <th>Capacidad</th>
                                                <th>No de placas</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($vehiculos as $vehiculo)
                                                    <tr>
                                                        @foreach ($transportistas as $transportista)
                                                            @if ($transportista->id == $vehiculo->transportista_id)
                                                                <td> <a
                                                                        href="{{ route('transportistas.show', $transportista->id) }}">{{ $transportista->razonSocial }}</a>
                                                                </td>
                                                            @endif
                                                        @endforeach
                                                        <td>{{ $vehiculo->noPermisoSCT }}</td>
                                                        @foreach ($tipos as $tipo)
                                                            @if ($tipo->id == $vehiculo->tipo_id)
                                                                <td>{{ $tipo->nombre }}</td>
                                                            @endif
                                                        @endforeach
                                                        @foreach ($capacidades as $capacidad)
                                                            @if ($capacidad->id == $vehiculo->capacidad_id)
                                                                <td>{{ $capacidad->nombre }}</td>
                                                            @endif
                                                        @endforeach
                                                        <td>{{ $vehiculo->noPlaca }}</td>
                                                        <td class="td-actions text-right">
                                                            <a href="{{ route('vehiculos.show', $vehiculo->id) }}"
                                                                class="btn btn-info" title="Visualizar vehiculo"><i
                                                                    class="material-icons">person</i></a>
                                                            <a href="{{ route('vehiculos.edit', $vehiculo->id) }}"
                                                                class="btn btn-warning" title="Editar vehiculo"><i
                                                                    class="material-icons">edit</i></a>
                                                            <form action="{{ route('vehiculos.destroy', $vehiculo->id) }}"
                                                                method="POST" style="display: inline-block;"
                                                                onsubmit="return confirm('¿Esta seguro que desea eliminar este vehículo con el no. de placas: {{ $vehiculo->noPlaca }}?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit"
                                                                    rel="tooltip"><i class="material-icons"
                                                                        title="Eliminar vehículo">close</i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer mr-auto">
                                    {{ $vehiculos->links() }}
                                </div>
                                <div class="card-footer ml-auto mr-auto">
                                    <a href="{{ route('vehiculos.create') }}" class="btn btn-warning mr-3">Crear
                                        vehículo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
