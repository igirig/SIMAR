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
                                <h4 class="card-title">Editar vehículo</h4>
                                <p class="card-category">Edite los datos del vehículo con el no. de placas
                                    {{ $vehiculo->noPlaca }}...</p>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <label for="transportista_id" class="col-sm-2 col-form-label">Clase:</label>
                                    <div class="col-md-7">
                                        <select name="transportista_id" class="form-control @error('transportista_id') is-invalid @enderror"
                                            id="transportista_id">
                                            <option value="">Seleccione el transportista...</option>
                                            <!--Comienzo for each -->
                                            @foreach ($transportistas as $transportista)
                                                <option value="{{ $transportista->id }}"
                                                    {{ $vehiculo->transportista_id == $transportista->id ? 'selected' : '' }}>
                                                    {{ $transportista->razonSocial }}</option>
                                                <?php $valor = $transportista->id; ?>
                                            @endforeach
                                            <!--termino for each -->
                                        </select>
                                        @error('transportista_id')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="noPermisoSCT" class="col-sm-2 col-form-label">Número de permiso de la
                                        SCT:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="noPermisoSCT"
                                            value="{{ old('noPermisoSCT', $vehiculo->noPermisoSCT) }}" maxlength="9"
                                            onkeyup="this.value = this.value.toUpperCase();">
                                        @if ($errors->has('noPermisoSCT'))
                                            <span class="error text-danger"
                                                for="input-noPermisoSCT">{{ $errors->first('noPermisoSCT') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="tipo_id" class="col-sm-2 col-form-label">Clase:</label>
                                    <div class="col-md-7">
                                        <select name="tipo_id" class="form-control @error('tipo_id') is-invalid @enderror"
                                            id="tipo_id">
                                            <option value="">Seleccione el tipo...</option>
                                            <!--Comienzo for each -->
                                            @foreach ($tipos as $tipo)
                                                <option value="{{ $tipo->id }}"
                                                    {{ $vehiculo->tipo_id == $tipo->id ? 'selected' : '' }}>
                                                    {{ $tipo->nombre }}</option>
                                                <?php $valor = $tipo->id; ?>
                                            @endforeach
                                            <!--termino for each -->
                                        </select>
                                        @error('tipo_id')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="capacidad_id" class="col-sm-2 col-form-label">Clase:</label>
                                    <div class="col-md-7">
                                        <select name="capacidad_id" class="form-control @error('capacidad_id') is-invalid @enderror"
                                            id="capacidad_id">
                                            <option value="">Seleccione el capacidad...</option>
                                            <!--Comienzo for each -->
                                            @foreach ($capacidades as $capacidad)
                                                <option value="{{ $capacidad->id }}"
                                                    {{ $vehiculo->capacidad_id == $capacidad->id ? 'selected' : '' }}>
                                                    {{ $capacidad->nombre }}</option>
                                                <?php $valor = $capacidad->id; ?>
                                            @endforeach
                                            <!--termino for each -->
                                        </select>
                                        @error('capacidad_id')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="noPlaca" class="col-sm-2 col-form-label">Número de placas:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="noPlaca"
                                            value="{{ old('noPlaca', $vehiculo->noPlaca) }}" maxlength="7"
                                            onkeyup="this.value = this.value.toUpperCase();">
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
                                <button type="submit" class="btn btn-warning">Actualizar vehículo</button>
                            </div>
                            <!--Fin del Footer-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
