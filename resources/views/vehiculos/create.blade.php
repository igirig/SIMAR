@extends('layouts.main', ['activePage' => 'vehiculos.create', 'titlePage' => 'Vehículos'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('vehiculos.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-warning">
                                <h4 class="card-title">Nueva vehiculo</h4>
                                <p class="card-category">Ingrese los datos de la vehiculo...</p>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <label for="transportista_id" class="col-sm-2 col-form-label">Transportista:</label>
                                    <div class="col-md-7">
                                        <select name="transportista_id"
                                            class="form-control @error('transportista_id') is-invalid @enderror" id="transportista_id">
                                            <option value="">Seleccione el transportista...</option>
                                            <!--Comienzo for each -->
                                            @foreach ($transportistas as $transportista)
                                                <option value="{{ $transportista->id }}"
                                                    {{ old('transportista_id') == $transportista->id ? 'selected' : '' }}>
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
                                    <label for="noPermisoSCT" class="col-sm-2 col-form-label">Número de Permiso de la SCT:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="noPermisoSCT"
                                            placeholder="Ingrese su Número de Permiso de la SCT"
                                            value="{{ old('noPermisoSCT') }}" maxlength="9" onkeyup="this.value = this.value.toUpperCase();">
                                        @if ($errors->has('noPermisoSCT'))
                                            <span class="error text-danger"
                                                for="input-noPermisoSCT">{{ $errors->first('noPermisoSCT') }}</span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <label for="tipo_id" class="col-sm-2 col-form-label">Tipo de vehículo:</label>
                                    <div class="col-md-7">
                                        <select name="tipo_id"
                                            class="form-control @error('tipo_id') is-invalid @enderror" id="tipo_id">
                                            <option value="">Seleccione el tipo de vehiculo...</option>
                                            <!--Comienzo for each -->
                                            @foreach ($tipos as $tipo)
                                                <option value="{{ $tipo->id }}"
                                                    {{ old('tipo_id') == $tipo->id ? 'selected' : '' }}>
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
                                    <label for="capacidad_id" class="col-sm-2 col-form-label">Capacidad del vehículo:</label>
                                    <div class="col-md-7">
                                        <select name="capacidad_id"
                                            class="form-control @error('capacidad_id') is-invalid @enderror" id="capacidad_id">
                                            <option value="">Seleccione el capacidad de vehiculo...</option>
                                            <!--Comienzo for each -->
                                            @foreach ($capacidades as $capacidad)
                                                <option value="{{ $capacidad->id }}"
                                                    {{ old('capacidad_id') == $capacidad->id ? 'selected' : '' }}>
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
                                    <label for="noPlaca" class="col-sm-2 col-form-label">Número de Registro
                                        Ambiental:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="noPlaca"
                                            placeholder="Ingrese su Número de Placa"
                                            value="{{ old('noPlaca') }}" maxlength="7" onkeyup="this.value = this.value.toUpperCase();">
                                        @if ($errors->has('noPlaca'))
                                            <span class="error text-danger"
                                                for="input-noPlaca">{{ $errors->first('noPlaca') }}</span>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <!--Footer-->
                            <div class="card-footer ml-auto mr-auto">
                                <a href="{{ route('vehiculos.index') }}" class="btn btn-success mr-3">Volver al índice</a>
                                <button type="submit" class="btn btn-warning">Guardar vehiculo</button>
                            </div>
                            <!--Fin del Footer-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
