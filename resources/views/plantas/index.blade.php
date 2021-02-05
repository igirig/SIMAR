@extends('layouts.main', ['activePage' => 'plantas.index', 'titlePage' => 'Plantas de tratamiento'] )
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-success">
                                    <h4 class="card-title">Lista de plantas de tratamiento</h4>
                                    <p class="card-category">Seleccione una accion...</p>
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
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>No. de registro ambiental</th>
                                                <th>Teleéfono</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($plantas as $planta)
                                                    <tr>
                                                        <td>{{ $planta->id }}</td>
                                                        <td>{{ $planta->razonSocial }}</td>
                                                        <td>{{ $planta->noRegistroAmbiental }}</td>
                                                        <td>{{ $planta->telefono }}</td>
                                                        <td class="td-actions text-right">
                                                            <a href="{{ route('plantas.show', $planta->id) }}"
                                                                class="btn btn-info" title="Visualizar planta de tratamiento
                                                                "><i
                                                                    class="material-icons">person</i></a>
                                                            <a href="{{ route('plantas.edit', $planta->id) }}"
                                                                class="btn btn-warning" title="Editar planta de tratamiento
                                                                "><i
                                                                    class="material-icons">edit</i></a>
                                                            <form action="{{ route('plantas.destroy', $planta->id) }}"
                                                                method="POST" style="display: inline-block;"
                                                                onsubmit="return confirm('¿Esta seguro que desea eliminar esta planta de tratamiento {{ $planta->name }}?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit"
                                                                    rel="tooltip"><i class="material-icons"
                                                                        title="Eliminar planta de tratamiento
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
                                    {{ $plantas->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
