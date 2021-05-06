@extends('layouts.main', ['activePage' => 'clientes.index', 'titlePage' => 'clientes'] )
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-success">
                                    <h4 class="card-title">AAAAAAAA SEXOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO</h4>
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
                                                <th>Razón social</th>
                                                <th>Última Modificación</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($clientes as $cliente)
                                                    <tr>
                                                        <td>{{ $cliente->razonSocial }}</td>
                                                        <td>{{ $cliente->updated_at }}</td>
                                                        <td class="td-actions text-right">
                                                            <a href="{{ route('clientes.show', $cliente->id) }}"
                                                                class="btn btn-info" title="Visualizar cliente"><i
                                                                    class="material-icons">person</i></a>
                                                            <a href="{{ route('clientes.edit', $cliente->id) }}"
                                                                class="btn btn-warning" title="Editar cliente"><i
                                                                    class="material-icons">edit</i></a>
                                                            <form action="{{ route('clientes.destroy', $cliente->id) }}"
                                                                method="POST" style="display: inline-block;"
                                                                onsubmit="return confirm('¿Esta seguro que desea eliminar al cliente {{ $cliente->razonSocial }}?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit"
                                                                    rel="tooltip"><i class="material-icons"
                                                                        title="Eliminar cliente">close</i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer mr-auto">
                                    {{ $clientes->links() }}
                                </div>
                                <div class="card-footer ml-auto mr-auto">
                                    <a href="{{ route('clientes.create') }}" class="btn btn-warning mr-3">Crear
                                        Cliente</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
