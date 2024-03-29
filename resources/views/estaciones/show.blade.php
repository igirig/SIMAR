@extends('layouts.main', ['activePage' => 'estaciones', 'titlePage' => 'Estaciones de servicio'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">Detalles de la estación de servicio</h4>
                            <p class="card-category">Vista detallada de {{ $estacion->razonSocial }}...</p>
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
                                                        <td>{{ $estacion->id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Razón social</th>
                                                        <td>{{ $estacion->razonSocial }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Número de registro ambiental</th>
                                                        <td><span
                                                                class="badge badge-primary">{{ $estacion->noEstacion }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Dirección</th>
                                                        <td>{{ $estacion->calle }}
                                                            @if ($estacion->noExterior == null || $estacion->noExterior == 'S/N')
                                                                S/N,
                                                            @else #{{ $estacion->noExterior }},
                                                            @endif
                                                            @if ($estacion->noInterior != null)
                                                                Interior: {{ $estacion->noInterior }},
                                                            @else
                                                            @endif
                                                            Col. {{ $estacion->colonia }},
                                                            C.P. {{ $estacion->codigoPostal }},
                                                            {{ $estado[0] }}, {{ $municipio[0] }}
                                                        </td>
                                                    </tr>
                                                    </tr>
                                                    <tr>
                                                        <th>Teléfono</th>
                                                        <td>{{ $estacion->telefono }}
                                                            @if ($estacion->extension > 0)
                                                                ext. {{ $estacion->extension }}
                                                            @else
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Correo de contacto</th>
                                                        <td><a href="mailto:{{ $estacion->correo }}"
                                                                title="Enviar correo a {{ $estacion->correo }}">{{ $estacion->correo }}</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Ultima modificación</th>
                                                        <td>{{ $estacion->updated_at }}</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route('estaciones.index') }}"
                                                    class="btn btn-sm btn-success mr-3">Volver al índice</a>
                                                <a href="{{ route('estaciones.edit', $estacion->id) }}"
                                                    class="btn btn-sm btn-warning mr-3">Editar estación de servicio</a>
                                                <form action="{{ route('estaciones.destroy', $estacion->id) }}"
                                                    method="POST" style="display: inline-block;"
                                                    onsubmit="return confirm('¿Está seguro que desea eliminar esta estación de servicio: {{ $estacion->razonSocial }}?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger" type="submit"
                                                        rel="tooltip">Eliminar estación de servicio</button>
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
