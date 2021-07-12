@extends('layouts.main', ['activePage' => 'clientes', 'titlePage' => 'Cliente'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">Detalles del cliente</h4>
                            <p class="card-category">Vista detallada del cliente {{ $cliente->razonSocial }}...</p>
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
                                    <div class="card card-cliente">
                                        <div class="card-body">
                                            <table class="table table-bordered table-striped">
                                                <tbody>
                                                    <tr>
                                                        <th>ID</th>
                                                        <td>{{ $cliente->id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Razón social</th>
                                                        <td>{{ $cliente->razonSocial }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Última modificación</th>
                                                        <td><a href="#" target="_blank">{{ $cliente->updated_at }}</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route('clientes.index') }}"
                                                    class="btn btn-sm btn-success mr-3">Volver al índice</a>
                                                <a href="{{ route('clientes.edit', $cliente->id) }}"
                                                    class="btn btn-sm btn-warning mr-3">Editar cliente</a>
                                                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST"
                                                    style="display: inline-block;"
                                                    onsubmit="return confirm('¿Esta seguro que desea eliminar este cliente: {{ $cliente->razonSocial }}?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger" type="submit"
                                                        rel="tooltip">Eliminar cliente</button>
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
