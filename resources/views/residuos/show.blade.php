@extends('layouts.main', ['activePage' => 'residuos', 'titlePage' => 'Residuo'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">Detalles del residuo</h4>
                            <p class="card-category">Vista detallada del vehículo con las placas
                                {{ $residuo->noPlaca }}...</p>
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
                                                        @if ($residuo->corrosivo == 1)
                                                            <td><span class="badge badge-primary">Si</span>
                                                            </td>
                                                        @else
                                                            <td>No</td>
                                                        @endif
                                                    </tr>
                                                    <tr>
                                                        <th>Reactivo</th>
                                                        @if ($residuo->reactivo == 1)
                                                            <td><span class="badge badge-primary">Si</span>
                                                            </td>
                                                        @else
                                                            <td>No</td>
                                                        @endif
                                                    </tr>
                                                    <tr>
                                                        <th>Explosivo</th>
                                                        @if ($residuo->explosivo == 1)
                                                            <td><span class="badge badge-primary">Si</span>
                                                            </td>
                                                        @else
                                                            <td>No</td>
                                                        @endif
                                                    </tr>
                                                    <tr>
                                                        <th>Tóxico</th>
                                                        @if ($residuo->toxico == 1)
                                                            <td><span class="badge badge-primary">Si</span>
                                                            </td>
                                                        @else
                                                            <td>No</td>
                                                        @endif
                                                    </tr>
                                                    <tr>
                                                        <th>Inflamable</th>
                                                        @if ($residuo->inflamable == 1)
                                                            <td><span class="badge badge-primary">Si</span>
                                                            </td>
                                                        @else
                                                            <td>No</td>
                                                        @endif
                                                    </tr>
                                                    <tr>
                                                        <th>Biológico</th>
                                                        @if ($residuo->biologico == 1)
                                                            <td><span class="badge badge-primary">Si</span>
                                                            </td>
                                                        @else
                                                            <td>No</td>
                                                        @endif
                                                    </tr>
                                                    <tr>
                                                        <th>Mezcla</th>
                                                        @if ($residuo->mezcla == 1)
                                                            <td><span class="badge badge-primary">Si</span>
                                                            </td>
                                                        @else
                                                            <td>No</td>
                                                        @endif
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
                                                        <td>{{ $clase[0] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Estado de la materia</th>
                                                        <td>{{ $materia[0] }}</td>
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
                                                <form action="{{ route('residuos.destroy', $residuo->id) }}"
                                                    method="POST" style="display: inline-block;"
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
