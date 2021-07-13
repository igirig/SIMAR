@extends('layouts.main', ['activePage' => 'residuos', 'titlePage' => 'Residuo'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">Detalles del residuo</h4>
                            <p class="card-category">Vista detallada del vehículo con las placas {{ $residuo->noPlaca }}...</p>
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
                                                        <td>{{ $residuo->id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <td>{{ $residuo->nombre }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Corrosivo</th>
                                                        <td><span
                                                                class="badge badge-primary">{{ $residuo->corrosivo }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Reactivo</th>
                                                        <td><span
                                                                class="badge badge-primary">{{ $residuo->reactivo }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Explosivo</th>
                                                        <td><span
                                                                class="badge badge-primary">{{ $residuo->explosivo }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tóxico</th>
                                                        <td><span
                                                                class="badge badge-primary">{{ $residuo->toxico }}</span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>Inflamable</th>
                                                        <td><span
                                                                class="badge badge-primary">{{ $residuo->inflamable }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Biológico</th>
                                                        <td><span
                                                                class="badge badge-primary">{{ $residuo->biologico }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Mezcla</th>
                                                        <td><span
                                                                class="badge badge-primary">{{ $residuo->mezcla }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Numero de la ONU</th>
                                                        <td>{{ $residuo->noONU }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Descripción</th>
                                                        <td>{{ $residuo->descripcion }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Clase del residuo</th>
                                                        <td>{{ $residuo->clase_id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Estado de la materia</th>
                                                        <td>{{ $residuo->materia_id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Ultima modificación</th>
                                                        <td>{{ $residuo->updated_at }}</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route('residuos.index') }}"
                                                    class="btn btn-sm btn-success mr-3">Volver al índice</a>
                                                <a href="{{ route('residuos.edit', $residuo->id) }}"
                                                    class="btn btn-sm btn-warning mr-3">Editar residuo</a>
                                                <form action="{{ route('residuos.destroy', $residuo->id) }}" method="POST"
                                                    style="display: inline-block;"
                                                    onsubmit="return confirm('¿Esta seguro que desea eliminar este residuo: {{ $residuo->nombre }}?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger" type="submit"
                                                        rel="tooltip">Eliminar residuo</button>
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
