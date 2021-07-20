@extends('layouts.main', ['activePage' => 'sucursales', 'titlePage' => 'Sucursal'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">Detalles de la sucursal</h4>
                            <p class="card-category">Vista detallada de la Sucursal {{ $sucursal->nombre }}...</p>
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
                                    <div class="card card-usar">
                                        <div class="card-body">
                                            <table class="table table-bordered table-striped">
                                                <tbody>
                                                    <tr>
                                                        <th>ID</th>
                                                        <td>{{ $sucursal->id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Cliente</th>
                                                        <td>{{ $cliente[0] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <td>{{ $sucursal->nombre }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Número de registro ambiental</th>
                                                        <td><span
                                                                class="badge badge-primary">{{ $sucursal->noRegistroAmbiental }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Dirección</th>
                                                        <td>{{ $sucursal->calle }}
                                                            @if ($sucursal->noExterior != null)
                                                                #{{ $sucursal->noExterior }}
                                                            @else S/N
                                                            @endif
                                                            @if ($sucursal->noInterior != null)
                                                                , Interior: {{ $sucursal->noExterior }}
                                                            @else
                                                            @endif
                                                            , Col. {{ $sucursal->colonia }},
                                                            C.P. {{ $sucursal->codigoPostal }},
                                                            {{ $estado[0] }}, {{ $municipio[0] }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Teléfono</th>
                                                        <td>{{ $sucursal->telefono }}
                                                            @if ($sucursal->extension > 0)
                                                                ext. {{ $sucursal->extension }}
                                                            @else
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Correo de contacto</th>
                                                        <td><a href="mailto:{{ $sucursal->correo }}"
                                                                title="Enviar correo a {{ $sucursal->correo }}">{{ $sucursal->correo }}</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Ultima modificación</th>
                                                        <td>{{ $sucursal->updated_at }}</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route('sucursales.index') }}"
                                                    class="btn btn-sm btn-success mr-3">Volver al índice</a>
                                                <a href="{{ route('sucursales.edit', $sucursal->id) }}"
                                                    class="btn btn-sm btn-warning mr-3">Editar sucursal</a>
                                                <form action="{{ route('sucursales.destroy', $sucursal->id) }}"
                                                    method="POST" style="display: inline-block;"
                                                    onsubmit="return confirm('¿Esta seguro que desea eliminar esta sucursal: {{ $sucursal->nombre }}?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger" type="submit"
                                                        rel="tooltip">Eliminar sucursal</button>
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
