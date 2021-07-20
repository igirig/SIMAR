@extends('layouts.main', ['activePage' => 'transportistas', 'titlePage' => 'Transportistas'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">Detalles del Transportista</h4>
                            <p class="card-category">Vista detallada de {{ $transportista->razonSocial }}...</p>
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
                                    <div class="card card-user">
                                        <div class="card-body">
                                            <table class="table table-bordered table-striped">
                                                <tbody>
                                                    <tr>
                                                        <th>ID</th>
                                                        <td>{{ $transportista->id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Razón social</th>
                                                        <td>{{ $transportista->razonSocial }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Número de registro ambiental</th>
                                                        <td><span
                                                                class="badge badge-primary">{{ $transportista->noRegistroAmbiental }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Dirección</th>
                                                        <td>{{ $transportista->calle }}
                                                            @if ($transportista->noExterior != null)
                                                                #{{ $transportista->noExterior }}
                                                            @else S/N
                                                            @endif
                                                            @if ($transportista->noInterior != null)
                                                                , Interior: {{ $transportista->noExterior }}
                                                            @else
                                                            @endif
                                                            , Col. {{ $transportista->colonia }},
                                                            C.P. {{ $transportista->codigoPostal }},
                                                            {{ $estado[0] }}, {{ $municipio[0] }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Teléfono</th>
                                                        <td>{{ $transportista->telefono }}
                                                            @if ($transportista->extension > 0)
                                                                ext. {{ $transportista->extension }}
                                                            @else
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Correo de contacto</th>
                                                        <td><a href="mailto:{{ $transportista->correo }}"
                                                                title="Enviar correo a {{ $transportista->correo }}">{{ $transportista->correo }}</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Ultima modificación</th>
                                                        <td>{{ $transportista->updated_at }}</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route('transportistas.index') }}"
                                                    class="btn btn-sm btn-success mr-3">Volver al índice</a>
                                                <a href="{{ route('transportistas.edit', $transportista->id) }}"
                                                    class="btn btn-sm btn-warning mr-3">Editar transportista</a>
                                                <form action="{{ route('transportistas.destroy', $transportista->id) }}"
                                                    method="POST" style="display: inline-block;"
                                                    onsubmit="return confirm('¿Esta seguro que desea eliminar este transportista: {{ $transportista->razonSocial }}?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger" type="submit"
                                                        rel="tooltip">Eliminar transportista</button>
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
