@extends('layouts.main', ['activePage' => 'residuos.index', 'titlePage' => 'Residuos'] )
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-success">
                                    <h4 class="card-title">Lista de residuos</h4>
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
                                                <th>Nombre</th>
                                                <th>No ONU</th>
                                                <th>Clase</th>
                                                <th>Estado de la materia</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($residuos as $residuo)
                                                    <tr>
                                                        <td>{{ $residuo->nombre }}</td>
                                                        <td>{{ $residuo->noONU }}</td>
                                                        @foreach ($clases as $clase)
                                                            @if ($clase->id == $residuo->clase_id)
                                                                <td>{{ $clase->nombre }}</td>
                                                            @endif
                                                        @endforeach
                                                        @foreach ($materias as $materia)
                                                            @if ($materia->id == $residuo->materia_id)
                                                                <td>{{ $materia->nombre }}</td>
                                                            @endif
                                                        @endforeach
                                                        <td class="td-actions text-right">
                                                            <a href="{{ route('residuos.show', $residuo->id) }}"
                                                                class="btn btn-info" title="Visualizar residuo
                                                                "><i
                                                                    class="material-icons">person</i></a>
                                                            <a href="{{ route('residuos.edit', $residuo->id) }}"
                                                                class="btn btn-warning" title="Editar residuo
                                                                "><i
                                                                    class="material-icons">edit</i></a>
                                                            <form action="{{ route('residuos.destroy', $residuo->id) }}"
                                                                method="POST" style="display: inline-block;"
                                                                onsubmit="return confirm('¿Esta seguro que desea eliminar este residuo: {{ $residuo->nombre }}?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit"
                                                                    rel="tooltip"><i class="material-icons"
                                                                        title="Eliminar residuo
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
                                    {{ $residuos->links() }}
                                </div>
                                <div class="card-footer ml-auto mr-auto">
                                    <a href="{{ route('residuos.create') }}" class="btn btn-warning mr-3">Crear
                                        residuo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
