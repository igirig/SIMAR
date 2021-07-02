@extends('layouts.main', ['activePage' => 'plantas.edit', 'titlePage' => 'Plantas'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('plantas.update', $planta->id) }}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header card-header-warning">
                                <h4 class="card-title">Editar Planta</h4>
                                <p class="card-category">Edite los datos de la Planta {{ $planta->razonSocial }}...</p>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <label for="razonSocial" class="col-sm-2 col-form-label">Razón Social:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="razonSocial"
                                            value="{{ old('razonSocial', $planta->razonSocial) }}" autofocus>
                                        @if ($errors->has('razonSocial'))
                                            <span class="error text-danger"
                                                for="input-razonSocial">{{ $errors->first('razonSocial') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="noRegistroAmbiental" class="col-sm-2 col-form-label">Número de registro ambiental:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="noRegistroAmbiental"
                                            value="{{ old('noRegistroAmbiental', $planta->noRegistroAmbiental) }}" maxlength="12">
                                        @if ($errors->has('noRegistroAmbiental'))
                                            <span class="error text-danger"
                                                for="input-noRegistroAmbiental">{{ $errors->first('noRegistroAmbiental') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="calle" class="col-sm-2 col-form-label">Calle:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="calle"
                                            value="{{ old('calle', $planta->calle) }}">
                                        @if ($errors->has('calle'))
                                            <span class="error text-danger"
                                                for="input-calle">{{ $errors->first('calle') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="noExterior" class="col-sm-2 col-form-label">Número exterior:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="noExterior"
                                            value="{{ old('noExterior', $planta->noExterior) }}"
                                            maxlength="16">
                                        @if ($errors->has('noExterior'))
                                            <span class="error text-danger"
                                                for="input-noExterior">{{ $errors->first('noExterior') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="noInterior" class="col-sm-2 col-form-label">Número interior:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="noInterior"
                                            value="{{ old('noInterior', $planta->noInterior) }}"
                                            maxlength="16">
                                        @if ($errors->has('noInterior'))
                                            <span class="error text-danger"
                                                for="input-noInterior">{{ $errors->first('noInterior') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="colonia" class="col-sm-2 col-form-label">Colonia:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="colonia"
                                            value="{{ old('colonia', $planta->colonia) }}">
                                        @if ($errors->has('colonia'))
                                            <span class="error text-danger"
                                                for="input-colonia">{{ $errors->first('colonia') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="codigoPostal" class="col-sm-2 col-form-label">Código postal:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="codigoPostal"
                                            value="{{ old('codigoPostal', $planta->codigoPostal) }}"
                                            maxlength="5">
                                        @if ($errors->has('codigoPostal'))
                                            <span class="error text-danger"
                                                for="input-codigoPostal">{{ $errors->first('codigoPostal') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="estado_id" class="col-sm-2 col-form-label">Estado:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="estado_id"
                                            value="{{ old('estado_id', $planta->estado_id) }}"
                                            maxlength="5">
                                        @if ($errors->has('estado_id'))
                                            <span class="error text-danger"
                                                for="input-estado_id">{{ $errors->first('estado_id') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="municipio_id" class="col-sm-2 col-form-label">Municipio:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="municipio_id"
                                            value="{{ old('municipio_id', $planta->municipio_id) }}"
                                            maxlength="5">
                                        @if ($errors->has('municipio_id'))
                                            <span class="error text-danger"
                                                for="input-municipio_id">{{ $errors->first('municipio_id') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="telefono" class="col-sm-2 col-form-label">Teléfono:</label>
                                    <div class="col-sm-7">
                                        <input type="tel" class="form-control" name="telefono"
                                            value="{{ old('telefono', $planta->telefono) }}"
                                            maxlength="10">
                                        @if ($errors->has('telefono'))
                                            <span class="error text-danger"
                                                for="input-telefono">{{ $errors->first('telefono') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="extension" class="col-sm-2 col-form-label">Extensión:</label>
                                    <div class="col-sm-7">
                                        <input type="tel" class="form-control" name="extension"
                                            value="{{ old('extension', $planta->extension) }}"
                                            maxlength="6">
                                        @if ($errors->has('extension'))
                                            <span class="error text-danger"
                                                for="input-extension">{{ $errors->first('extension') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="correo" class="col-sm-2 col-form-label">Correo electrónico:</label>
                                    <div class="col-sm-7">
                                        <input type="email" class="form-control" name="correo"
                                            value="{{ old('correo', $planta->correo) }}">
                                        @if ($errors->has('correo'))
                                            <span class="error text-danger"
                                                for="input-email">{{ $errors->first('correo') }}</span>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <!--Footer-->
                            <div class="card-footer ml-auto mr-auto">
                                <a href="{{ url()->previous() }}" class="btn btn-success mr-3">Volver</a>
                                <button type="submit" class="btn btn-warning">Actualizar Planta</button>
                            </div>
                            <!--Fin del Footer-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
