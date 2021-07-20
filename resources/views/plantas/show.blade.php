@extends('layouts.main', ['activePage' => 'plantas', 'titlePage' => 'Plantas de tratamiento'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">Detalles de la planta de tratemiento</h4>
                            <p class="card-category">Vista detallada de {{ $planta->razonSocial }}...</p>
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
                                                        <td>{{ $planta->id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Razón social</th>
                                                        <td>{{ $planta->razonSocial }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Número de registro ambiental</th>
                                                        <td><span
                                                                class="badge badge-primary">{{ $planta->noRegistroAmbiental }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Dirección</th>
                                                        <td>{{ $planta->calle }}
                                                            @if ($planta->noExterior != null)
                                                                #{{ $planta->noExterior }}
                                                            @else S/N
                                                            @endif
                                                            @if ($planta->noInterior != null)
                                                                , Interior: {{ $planta->noExterior }}
                                                            @else
                                                            @endif
                                                            , Col. {{ $planta->colonia }},
                                                            C.P. {{ $planta->codigoPostal }},
                                                            {{ $estado[0] }}, {{ $municipio[0] }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Teléfono</th>
                                                        <td>{{ $planta->telefono }}
                                                            @if ($planta->extension > 0)
                                                                ext. {{ $planta->extension }}
                                                            @else
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Correo de contacto</th>
                                                        <td><a href="mailto:{{ $planta->correo }}"
                                                                title="Enviar correo a {{ $planta->correo }}">{{ $planta->correo }}</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Ultima modificación</th>
                                                        <td>{{ $planta->updated_at }}</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route('plantas.index') }}"
                                                    class="btn btn-sm btn-success mr-3">Volver al índice</a>
                                                <a href="{{ route('plantas.edit', $planta->id) }}"
                                                    class="btn btn-sm btn-warning mr-3">Editar planta de tratamiento</a>
                                                <form action="{{ route('plantas.destroy', $planta->id) }}" method="POST"
                                                    style="display: inline-block;"
                                                    onsubmit="return confirm('¿Esta seguro que desea eliminar esta planta de tratamiento: {{ $planta->razonSocial }}?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger" type="submit"
                                                        rel="tooltip">Eliminar planta de tratamiento</button>
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
