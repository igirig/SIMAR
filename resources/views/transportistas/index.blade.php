@extends('layouts.main', ['activePage' => 'transportistas.index', 'titlePage' => 'Transportistas'] )
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-success">
                                    <h4 class="card-title">Lista de transportistas</h4>
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
                                                @foreach ($transportistas as $transportista)
                                                    <tr>
                                                        <td>{{ $transportista->razonSocial }}</td>
                                                        <td>{{ $transportista->noRegistroAmbiental }}</td>
                                                        <td>{{ $transportista->telefono }}
                                                            @if ($transportista->extension > 0)
                                                                ext. {{ $transportista->extension }}
                                                            @else
                                                            @endif
                                                        </td>
                                                        <td><a href="mailto:{{ $transportista->correo }}"
                                                                title="Enviar correo a {{ $transportista->correo }}">{{ $transportista->correo }}</a>
                                                        </td>
                                                        <td class="td-actions text-right">
                                                            <a href="{{ route('transportistas.show', $transportista->id) }}"
                                                                class="btn btn-info" title="Visualizar transportista
                                                                    "><i class="material-icons">person</i></a>
                                                            <a href="{{ route('transportistas.edit', $transportista->id) }}"
                                                                class="btn btn-warning" title="Editar transportista
                                                                    "><i class="material-icons">edit</i></a>
                                                            <form
                                                                action="{{ route('transportistas.destroy', $transportista->id) }}"
                                                                method="POST" style="display: inline-block;"
                                                                onsubmit="return confirm('¿Esta seguro que desea eliminar este transportista: {{ $transportista->razonSocial }}?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit"
                                                                    rel="tooltip"><i class="material-icons" title="Eliminar transportista
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
                                    {{ $transportistas->links() }}
                                </div>
                                <div class="card-footer ml-auto mr-auto">
                                    <a href="{{ route('transportistas.create') }}" class="btn btn-warning mr-3">Crear
                                        transportista</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
