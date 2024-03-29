@extends('layouts.main', ['activePage' => 'transportistas.edit', 'titlePage' => 'Transportistas'])
@section('scripts')
    <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>
        $(function() {
            $('#estado_id').on('change', estadoSeleccionado);
        })

        function estadoSeleccionado() {
            var estado_id = $(this).val();
            //alert(estado_id); Llamada peticion AJAX

            $.get('/api/estados/' + estado_id + '', function(data) {
                var select = '<option value="">Seleccione el municipio donde esta ubicado el transportista...</option>';
                for (var i = 0; i < data.length; ++i) {
                    select += '<option value="' + data[i].id + '">' + data[i].nombre + '</option>';
                    $('#municipio_id').html(select);
                }
            });
        }
    </script>
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('transportistas.update', $transportista->id) }}" method="post"
                        class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header card-header-warning">
                                <h4 class="card-title">Editar transportista</h4>
                                <p class="card-category">Edite los datos del transportista
                                    {{ $transportista->razonSocial }}...</p>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <label for="razonSocial" class="col-sm-2 col-form-label">Razón social:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="razonSocial"
                                            value="{{ old('razonSocial', $transportista->razonSocial) }}"
                                            onkeyup="this.value = this.value.toUpperCase();" autofocus>
                                        @if ($errors->has('razonSocial'))
                                            <span class="error text-danger"
                                                for="input-razonSocial">{{ $errors->first('razonSocial') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="noRegistroAmbiental" class="col-sm-2 col-form-label">Número de registro
                                        ambiental:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="noRegistroAmbiental"
                                            value="{{ old('noRegistroAmbiental', $transportista->noRegistroAmbiental) }}"
                                            maxlength="12" onkeyup="this.value = this.value.toUpperCase();">
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
                                            value="{{ old('calle', $transportista->calle) }}"
                                            onkeyup="this.value = this.value.toUpperCase();">
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
                                            value="{{ old('noExterior', $transportista->noExterior) }}" maxlength="16"
                                            onkeyup="this.value = this.value.toUpperCase();">
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
                                            value="{{ old('noInterior', $transportista->noInterior) }}" maxlength="16"
                                            onkeyup="this.value = this.value.toUpperCase();">
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
                                            value="{{ old('colonia', $transportista->colonia) }}"
                                            onkeyup="this.value = this.value.toUpperCase();">
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
                                            value="{{ old('codigoPostal', $transportista->codigoPostal) }}"
                                            maxlength="5">
                                        @if ($errors->has('codigoPostal'))
                                            <span class="error text-danger"
                                                for="input-codigoPostal">{{ $errors->first('codigoPostal') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="estado_id" class="col-sm-2 col-form-label">Estado:</label>
                                    <div class="col-md-7">
                                        <select name="estado_id"
                                            class="form-control @error('estado_id') is-invalid @enderror" id="estado_id">
                                            <option value="">Seleccione el estado donde esta ubicado el transportista...</option>
                                            <!--Comienzo for each -->
                                            @foreach ($estados as $estado)
                                                <option value="{{ $estado->id }}"
                                                    {{ $transportista->estado_id == $estado->id ? 'selected' : '' }}>
                                                    {{ $estado->nombre }}
                                                </option>
                                            @endforeach
                                            <!--termino for each -->
                                        </select>
                                        @error('estado_id')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="municipio_id" class="col-sm-2 col-form-label">Municipio:</label>
                                    <div class="col-md-7">
                                        <select name="municipio_id"
                                            class="form-control @error('municipio_id') is-invalid @enderror"
                                            id="municipio_id">
                                            <option value="">Seleccione el municipio donde esta ubicado el transportista...</option>
                                            <!--Comienzo for each -->
                                            @foreach ($municipios as $municipio)
                                                <option value="{{ $municipio->id }}"
                                                    {{ $transportista->municipio_id == $municipio->id ? 'selected' : '' }}>
                                                    {{ $municipio->nombre }}
                                                </option>
                                            @endforeach
                                            <!--termino for each -->
                                        </select>
                                        @error('municipio_id')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="telefono" class="col-sm-2 col-form-label">Teléfono:</label>
                                    <div class="col-sm-7">
                                        <input type="tel" class="form-control" name="telefono"
                                            value="{{ old('telefono', $transportista->telefono) }}" maxlength="10">
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
                                            value="{{ old('extension', $transportista->extension) }}" maxlength="6">
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
                                            value="{{ old('correo', $transportista->correo) }}"
                                            onkeyup="this.value = this.value.toLowerCase();">
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
                                <button type="submit" class="btn btn-warning">Actualizar transportista</button>
                            </div>
                            <!--Fin del Footer-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
