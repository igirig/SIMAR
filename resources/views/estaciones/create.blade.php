@extends('layouts.main', ['activePage' => 'estaciones.create', 'titlePage' => 'Estaciones'])
@section('scripts')
    <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>
        $(function(){
            $('#estado_id').on('change', estadoSeleccionado);
        }) 
        function estadoSeleccionado(){
            var estado_id = $(this).val();
            //alert(estado_id); Llamada peticion AJAX

            $.get('/api/estados/'+estado_id+'', function(data){
                var select = '<option value="">Seleccione el municipio...</option>';
                for(var i=0; i<data.length; ++i){
                    select+='<option value="'+data[i].id+'">'+data[i].nombre+'</option>';
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
                                <h4 class="card-title">Nueva estación</h4>
                                <p class="card-category">Ingrese los datos de la estación....</p>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <label for="razonSocial" class="col-sm-2 col-form-label">Razón Social:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="razonSocial"
                                            placeholder="Ingrese su Razón Social" value="{{ old('razonSocial') }}"
                                            autofocus>
                                        @if ($errors->has('razonSocial'))
                                            <span class="error text-danger"
                                                for="input-razonSocial">{{ $errors->first('razonSocial') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="noEstacion" class="col-sm-2 col-form-label">Número de Estación:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="noEstacion"
                                            placeholder="Ingrese su Número de Estación"
                                            value="{{ old('noEstacion') }}" maxlength="12">
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
                                            placeholder="Ingrese la calle donde esta ubicada" value="{{ old('calle') }}">
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
                                            placeholder="Ingrese el número exterior donde esta ubicada (*)"
                                            value="{{ old('noExterior') }}" maxlength="16">
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
                                            placeholder="Ingrese el número interior donde esta ubicada (*)"
                                            value="{{ old('noInterior') }}" maxlength="16">
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
                                            placeholder="Ingrese la colonia donde esta ubicada"
                                            value="{{ old('colonia') }}">
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
                                            placeholder="Ingrese el Código postal donde esta ubicada"
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
                                            <option value="">Seleccione el estado...</option>
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

                                {{-- <h1>
                                    {{ $valor }}
                                </h1> --}}

                                <div class="row">
                                    <label for="municipio_id" class="col-sm-2 col-form-label">Municipio:</label>
                                    <div class="col-md-7">
                                        <select name="municipio_id"
                                            class="form-control @error('municipio_id') is-invalid @enderror"
                                            id="municipio_id">
                                            <option value="">Seleccione el municipio...</option>
                                            <!--Comienzo for each -->
                                             {{-- @foreach ($municipios as $municipio)
                                                <option value="{{ $municipio->id }}"
                                                    {{ old('municipio_id') == $municipio->id ? 'selected' : '' }}>
                                                    {{ $municipio->nombre }}</option>
                                            @endforeach --}}
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
                                            placeholder="Ingrese el Teléfono donde esta ubicada"
                                            value="{{ old('telefono') }}" maxlength="10">
                                        @if ($errors->has('telefono'))
                                            <span class="error text-danger"
                                                for="input-telefono">{{ $errors->first('telefono') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="correo" class="col-sm-2 col-form-label">Correo electrónico:</label>
                                    <div class="col-sm-7">
                                        <input type="email" class="form-control" name="correo"
                                            placeholder="Ingrese su correo electrónico" value="{{ old('correo') }}">
                                        @if ($errors->has('correo'))
                                            <span class="error text-danger"
                                                for="input-email">{{ $errors->first('correo') }}</span>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <!--Footer-->
                            <div class="card-footer ml-auto mr-auto">
                                <a href="{{ route('estaciones.index') }}" class="btn btn-success mr-3">Volver al índice</a>
                                <button type="submit" class="btn btn-warning">Guardar estación</button>
                            </div>
                            <!--Fin del Footer-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
