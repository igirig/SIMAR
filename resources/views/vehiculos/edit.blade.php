@extends('layouts.main', ['activePage' => 'vehiculos.edit', 'titlePage' => 'Vehículos'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('vehiculos.update', $vehiculo->id) }}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header card-header-warning">
                                <h4 class="card-title">Editar Vehiculo</h4>
                                <p class="card-category">Edite los datos del Vehiculo con la placa {{ $vehiculo->noPlaca }}...</p>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <label for="transportista_id" class="col-sm-2 col-form-label">Transportista:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="transportista_id"
                                            value="{{ old('transportista_id', $vehiculo->transportista_id) }}"
                                            maxlength="5">
                                        @if ($errors->has('transportista_id'))
                                            <span class="error text-danger"
                                                for="input-transportista_id">{{ $errors->first('transportista_id') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="noPermisoSCT" class="col-sm-2 col-form-label">Número de permiso de la SCT:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="noPermisoSCT"
                                            value="{{ old('noPermisoSCT', $vehiculo->noPermisoSCT) }}" maxlength="9">
                                        @if ($errors->has('noPermisoSCT'))
                                            <span class="error text-danger"
                                                for="input-noPermisoSCT">{{ $errors->first('noPermisoSCT') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="tipo_id" class="col-sm-2 col-form-label">Tipo de vehículo:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="tipo_id"
                                            value="{{ old('tipo_id', $vehiculo->tipo_id) }}"
                                            maxlength="5">
                                        @if ($errors->has('tipo_id'))
                                            <span class="error text-danger"
                                                for="input-tipo_id">{{ $errors->first('tipo_id') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="capacidad_id" class="col-sm-2 col-form-label">Capacidad del vehículo:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="capacidad_id"
                                            value="{{ old('capacidad_id', $vehiculo->capacidad_id) }}"
                                            maxlength="5">
                                        @if ($errors->has('capacidad_id'))
                                            <span class="error text-danger"
                                                for="input-capacidad_id">{{ $errors->first('capacidad_id') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="noPlaca" class="col-sm-2 col-form-label">Número de placa:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="noPlaca"
                                            value="{{ old('noPlaca', $vehiculo->noPlaca) }}" maxlength="7">
                                        @if ($errors->has('noPlaca'))
                                            <span class="error text-danger"
                                                for="input-noPlaca">{{ $errors->first('noPlaca') }}</span>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <!--Footer-->
                            <div class="card-footer ml-auto mr-auto">
                                <a href="{{ url()->previous() }}" class="btn btn-success mr-3">Volver</a>
                                <button type="submit" class="btn btn-warning">Actualizar Vehiculo</button>
                            </div>
                            <!--Fin del Footer-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
