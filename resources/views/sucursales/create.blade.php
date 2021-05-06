@extends('layouts.main', ['activePage' => 'sucursales.create', 'titlePage' => 'Sucursales'])
@section('scripts')
    <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('select#estado_id').on('change', function() {
                var valor = $(this).val();
                console.log(valor);
            });
        });

    </script>
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('sucursales.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-warning">
                                <h4 class="card-title">Nueva sucursal</h4>
                                <p class="card-category">Ingrese los datos de la sucursal...</p>
                            </div>
                            <div class="card-body">

                                {{-- BOTONES PARA RESIDUOS
                                    
                                    <div class="row">
                                    <label for="nombre" class="col-sm-2 col-form-label">Clasifiación:</label>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <label class="col-sm-12 form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Option one is this and that&mdash;be sure to include why it's great
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="col-sm-12 form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Option one is this and that&mdash;be sure to include why it's great
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="nombre" class="col-sm-2 col-form-label">Clasifiación:</label>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <label class="col-sm-12 form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Option one is this and that&mdash;be sure to include why it's great
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="col-sm-12 form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Option one is this and that&mdash;be sure to include why it's great
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div> --}}


                                {{-- INTENTO DE MENÚ DESPLEGABLE CLIENTE

                                <div class="row">
                                    <label for="cliente_id" class="col-sm-2 col-form-label">Cliente:</label>
                                    <div class="col-sm-7">
                                        <select id="cliente_id" name="cliente_id" form="cliente_id">
                                            @foreach ($clientes as $cliente)
                                                <option value="{{ $cliente->id }}">{{ $cliente->nombre }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('cliente_id'))
                                            <span class="error text-danger"
                                                for="input-cliente_id">{{ $errors->first('cliente_id') }}</span>
                                        @endif
                                    </div>
                                </div> --}}

                                <div class="row">
                                    <label for="cliente_id" class="col-sm-2 col-form-label">Cliente:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="cliente_id"
                                            placeholder="PLACEHOLDER DE MENÚ DESPLEGABLE"
                                            value="{{ old('cliente_id') }}" maxlength="5">
                                        @if ($errors->has('cliente_id'))
                                            <span class="error text-danger"
                                                for="input-cliente_id">{{ $errors->first('cliente_id') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="cliente_id" class="col-sm-2 col-form-label">Estado:</label>
                                    <div class="col-md-7">
                                        <select name="cliente_id"
                                            class="form-control @error('cliente_id') is-invalid @enderror" id="cliente_id">
                                            <option value="">Seleccione el cliente...</option>
                                            <!--Comienzo for each -->
                                            @foreach ($clientes as $cliente)
                                                <option value="{{ $cliente->id }}"
                                                    {{ old('cliente_id') == $cliente->id ? 'selected' : '' }}>
                                                    {{ $cliente->razonSocial }}</option>
                                                <?php $valor = $cliente->id; ?>
                                            @endforeach
                                            <!--termino for each -->
                                        </select>
                                        @error('cliente_id')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="nombre"
                                            placeholder="Ingrese su Nombre" value="{{ old('nombre') }}" autofocus>
                                        @if ($errors->has('nombre'))
                                            <span class="error text-danger"
                                                for="input-nombre">{{ $errors->first('nombre') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="noRegistroAmbiental" class="col-sm-2 col-form-label">Número de Registro
                                        Ambiental:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="noRegistroAmbiental"
                                            placeholder="Ingrese su Número de Registro Ambiental"
                                            value="{{ old('noRegistroAmbiental') }}" maxlength="12">
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
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="estado_id"
                                            placeholder="PLACEHOLDER DE MENÚ DESPLEGABLE"
                                            value="{{ old('estado_id') }}" maxlength="5">
                                        @if ($errors->has('estado_id'))
                                            <span class="error text-danger"
                                                for="input-estado_id">{{ $errors->first('estado_id') }}</span>
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


                                {{-- INTENTO DE MENÚ DESPLEGABLE ESTADO - MUNICIPIO
                                    
                                    <div class="row">
                                    <label for="estado_id" class="col-sm-2 col-form-label">Estado:</label>
                                    <div class="col-sm-7">
                                        <select id="estado_id" name="estado_id" form="estado_id">
                                            @forelse ($estados as $estado)
                                                <option value="{{ $estado->id }}">{{ $estado->nombre }}
                                                </option>
                                            @empty
                                                <option value="">[Vacío]</option>
                                            @endforelse
                                        </select>
                                        @if ($errors->has('estado_id'))
                                            <span class="error text-danger"
                                                for="input-estado_id">{{ $errors->first('estado_id') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="municipio_id" class="col-sm-2 col-form-label">Municipio:</label>
                                    <div class="col-sm-7">
                                        <select id="municipio_id" name="municipio_id" form="municipio_id">
                                            @forelse ($municipios as $municipio)
                                                <option value="{{ $municipio->id }}">{{ $municipio->nombre }}
                                                </option>
                                            @empty
                                                <option value="">[Vacío]</option>
                                            @endforelse
                                        </select>
                                        @if ($errors->has('municipio_id'))
                                            <span class="error text-danger"
                                                for="input-municipio_id">{{ $errors->first('municipio_id') }}</span>
                                        @endif
                                    </div>
                                </div> --}}


                            </div>
                            <!--Footer-->
                            <div class="card-footer ml-auto mr-auto">
                                <a href="{{ route('sucursales.index') }}" class="btn btn-success mr-3">Volver al índice</a>
                                <button type="submit" class="btn btn-warning">Guardar sucursal</button>
                            </div>
                            <!--Fin del Footer-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
