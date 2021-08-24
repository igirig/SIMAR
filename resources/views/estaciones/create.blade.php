@extends('layouts.main', ['activePage' => 'estaciones.create', 'titlePage' => 'Estaciones de servicio'])
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
                var select =
                    '<option value="">Seleccione el municipio donde esta ubicada la estación de servicio...</option>';
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
                    <form action="{{ route('estaciones.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-warning">
                                <h4 class="card-title">Nueva estación de servicio</h4>
                                <p class="card-category">Ingrese los datos de la estación de servicio....</p>
                                <p class="card-category">(*) Opcional</p>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <label for="razonSocial" class="col-sm-2 col-form-label">Razón social:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="razonSocial"
                                            placeholder="Ingrese la razón social de la estación de servicio"
                                            value="{{ old('razonSocial') }}"
                                            onkeyup="this.value = this.value.toUpperCase();" autofocus>
                                        @if ($errors->has('razonSocial'))
                                            <span class="error text-danger"
                                                for="input-razonSocial">{{ $errors->first('razonSocial') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="noEstacion" class="col-sm-2 col-form-label">Número de estación:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="noEstacion"
                                            placeholder="Ingrese el número de la estación de servicio"
                                            value="{{ old('noEstacion') }}" maxlength="12"
                                            onkeyup="this.value = this.value.toUpperCase();">
                                        @if ($errors->has('noEstacion'))
                                            <span class="error text-danger"
                                                for="input-noEstacion">{{ $errors->first('noEstacion') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="calle" class="col-sm-2 col-form-label">Calle:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="calle"
                                            placeholder="Ingrese la calle donde esta ubicada la estación de servicio"
                                            value="{{ old('calle') }}" onkeyup="this.value = this.value.toUpperCase();"
                                            maxlength="64">
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
                                            placeholder="Ingrese el número exterior donde esta ubicada la estación de servicio en caso de tener (*)"
                                            value="{{ old('noExterior') }}" maxlength="8"
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
                                            placeholder="Ingrese el número interior donde esta ubicada la estación de servicio en caso de tener (*)"
                                            value="{{ old('noInterior') }}" maxlength="8"
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
                                            placeholder="Ingrese la colonia donde esta ubicada la estación de servicio"
                                            value="{{ old('colonia') }}"
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
                                            placeholder="Ingrese el código postal de la estación de servicio"
                                            value="{{ old('codigoPostal') }}" maxlength="5">
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
                                            <option value="">Seleccione el estado donde esta ubicada la estación de
                                                servicio...</option>
                                            <!--Comienzo for each -->
                                            @foreach ($estados as $estado)
                                                <option value="{{ $estado->id }}"
                                                    {{ old('estado_id') == $estado->id ? 'selected' : '' }}>
                                                    {{ $estado->nombre }}</option>
                                                <?php $valor = $estado->id; ?>
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
                                            <option value="">Seleccione el municipio donde esta ubicada la estación de
                                                servicio...</option>
                                            <!--Comienzo for each -->
                                            @foreach ($municipios as $municipio)
                                                <option value="{{ $municipio->id }}"
                                                    {{ old('municipio_id') == $municipio->id ? 'selected' : '' }}>
                                                    {{ $municipio->nombre }}</option>
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
                                            placeholder="Ingrese el teléfono de la estación de servicio"
                                            value="{{ old('telefono') }}" maxlength="10">
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
                                            placeholder="Ingrese la extensión de la estación de servicio en caso de tener (*)"
                                            value="{{ old('extension') }}" maxlength="6">
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
                                            placeholder="Ingrese el correo electrónico de contacto de la estación de servicio"
                                            value="{{ old('correo') }}" onkeyup="this.value = this.value.toLowerCase();"
                                            maxlength="64">
                                        @if ($errors->has('correo'))
                                            <span class="error text-danger"
                                                for="input-email">{{ $errors->first('correo') }}</span>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <!--Footer-->
                            <div class="card-footer ml-auto mr-auto">
                                <a href="{{ route('estaciones.index') }}" class="btn btn-success mr-3">Volver al
                                    índice</a>
                                <button type="submit" class="btn btn-warning">Guardar estación de servicio</button>
                            </div>
                            <!--Fin del Footer-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
