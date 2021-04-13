@extends('layouts.main', ['activePage' => 'sucursales.index', 'titlePage' => 'Sucursales'] )
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-success">
                                    <h4 class="card-title">Lista de sucursales</h4>
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
                                                <th>Razón Social</th>
                                                <th>NRA</th>
                                                <th>Teléfono</th>
                                                <th>Correo Electrónico</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($sucursales as $sucursal)
                                                    <tr>
                                                        <td>{{ $sucursal->razonSocial }}</td>
                                                        <td>{{ $sucursal->noRegistroAmbiental }}</td>
                                                        <td>{{ $sucursal->telefono }}</td>
                                                        <td><a href="mailto:{{ $sucursal->correo }}"
                                                                title="Enviar correo a {{ $sucursal->correo }}">{{ $sucursal->correo }}</a>
                                                        </td>
                                                        <td class="td-actions text-right">
                                                            <a href="{{ route('sucursales.show', $sucursal->id) }}"
                                                                class="btn btn-info" title="Visualizar sucursal
                                                                    "><i class="material-icons">person</i></a>
                                                            <a href="{{ route('sucursales.edit', $sucursal->id) }}"
                                                                class="btn btn-warning" title="Editar sucursal
                                                                    "><i class="material-icons">edit</i></a>
                                                            <form
                                                                action="{{ route('sucursales.destroy', $sucursal->id) }}"
                                                                method="POST" style="display: inline-block;"
                                                                onsubmit="return confirm('¿Esta seguro que desea eliminar esta sucursal {{ $sucursal->name }}?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit"
                                                                    rel="tooltip"><i class="material-icons" title="Eliminar sucursal
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
                                    {{ $sucursales->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
