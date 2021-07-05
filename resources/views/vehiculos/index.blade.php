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
                                    <h4 class="card-title">Lista de vehiculos</h4>
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
                                                <th>No Permiso SCT</th>
                                                <th>Tipo de vehiculo</th>
                                                <th>No de Placa</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($vehiculos as $vehiculo)
                                                    <tr>
                                                        <td>{{ $vehiculo->transportista_id }}</td>
                                                        <td>{{ $vehiculo->noPermisoSCT }}</td>
                                                        <td>{{ $vehiculo->capacidad_id }}</td>
                                                        <td>{{ $vehiculo->noPlaca }}</td>
                                                        <td class="td-actions text-right">
                                                            <a href="{{ route('vehiculos.show', $vehiculo->id) }}"
                                                                class="btn btn-info" title="Visualizar vehiculo
                                                                "><i
                                                                    class="material-icons">person</i></a>
                                                            <a href="{{ route('vehiculos.edit', $vehiculo->id) }}"
                                                                class="btn btn-warning" title="Editar vehiculo
                                                                "><i
                                                                    class="material-icons">edit</i></a>
                                                            <form action="{{ route('vehiculos.destroy', $vehiculo->id) }}"
                                                                method="POST" style="display: inline-block;"
                                                                onsubmit="return confirm('¿Esta seguro que desea eliminar esta vehiculo: {{ $vehiculo->noPlaca }}?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit"
                                                                    rel="tooltip"><i class="material-icons"
                                                                        title="Eliminar vehiculo
                                                                        ">close</i></button>
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
                                        Vehículo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
