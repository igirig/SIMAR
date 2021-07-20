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
                                                <th>Razón Social</th>
                                                <th>NRA</th>
                                                <th>Teléfono</th>
                                                <th>Correo electrónico</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($plantas as $planta)
                                                    <tr>
                                                        <td>{{ $planta->razonSocial }}</td>
                                                        <td>{{ $planta->noRegistroAmbiental }}</td>
                                                        <td>{{ $planta->telefono }}
                                                            @if ($planta->extension > 0)
                                                                ext. {{ $planta->extension }}
                                                            @else
                                                            @endif
                                                        </td>
                                                        <td><a href="mailto:{{ $planta->correo }}" title="Enviar correo a {{ $planta->correo }}">{{ $planta->correo }}</a></td>
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
                                                                onsubmit="return confirm('¿Esta seguro que desea eliminar esta planta de tratamiento: {{ $planta->razonSocial }}?')">
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
                                <div class="card-footer ml-auto mr-auto">
                                    <a href="{{ route('plantas.create') }}" class="btn btn-warning mr-3">Crear
                                        planta de tratamiento</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
