@extends('layouts.main', ['activePage' => 'estaciones.index', 'titlePage' => 'Estaciones'] )
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-success">
                                    <h4 class="card-title">Lista de estaciones</h4>
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
                                                <th>Razón social</th>
                                                <th>Número de estación</th>
                                                <th>Teléfono</th>
                                                <th>Correo electrónico</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($estaciones as $estacion)
                                                    <tr>
                                                        <td>{{ $estacion->razonSocial }}</td>
                                                        <td>{{ $estacion->noEstacion }}</td>
                                                        <td>{{ $estacion->telefono }} 
                                                            @if ($estacion->extension > 0)
                                                                ext. {{ $estacion->extension }}
                                                            @else
                                                            @endif
                                                        </td>
                                                        <td><a href="mailto:{{ $estacion->correo }}" title="Enviar correo a {{ $estacion->correo }}">{{ $estacion->correo }}</a></td>
                                                        <td class="td-actions text-right">
                                                            <a href="{{ route('estaciones.show', $estacion->id) }}"
                                                                class="btn btn-info" title="Visualizar estación
                                                                "><i
                                                                    class="material-icons">person</i></a>
                                                            <a href="{{ route('estaciones.edit', $estacion->id) }}"
                                                                class="btn btn-warning" title="Editar estación
                                                                "><i
                                                                    class="material-icons">edit</i></a>
                                                            <form action="{{ route('estaciones.destroy', $estacion->id) }}"
                                                                method="POST" style="display: inline-block;"
                                                                onsubmit="return confirm('¿Esta seguro que desea eliminar esta estación: {{ $estacion->razonSocial }}?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit"
                                                                    rel="tooltip"><i class="material-icons"
                                                                        title="Eliminar estación
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
                                    {{ $estaciones->links() }}
                                </div>
                                <div class="card-footer ml-auto mr-auto">
                                    <a href="{{ route('estaciones.create') }}" class="btn btn-warning mr-3">Crear
                                        Estación</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
