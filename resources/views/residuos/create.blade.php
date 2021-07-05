@extends('layouts.main', ['activePage' => 'residuos.create', 'titlePage' => 'Residuos'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('residuos.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-warning">
                                <h4 class="card-title">Nuevo residuo</h4>
                                <p class="card-category">Ingrese los datos del residuo...</p>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="nombre"
                                            placeholder="Ingrese su Número de Permiso de la SCT"
                                            value="{{ old('nombre') }}" onkeyup="this.value = this.value.toUpperCase();">
                                        @if ($errors->has('nombre'))
                                            <span class="error text-danger"
                                                for="input-nombre">{{ $errors->first('nombre') }}</span>
                                        @endif
                                    </div>
                                </div>


                                {{-- BOTONES PARA RESIDUOS --}}

                                <div class="row">
                                    <label for="nombre" class="col-sm-2 col-form-label">Clasifiación:</label>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <label class="col-sm-12 form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Corrosivo
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="col-sm-12 form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Reactivo
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="col-sm-12 form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Explosivo
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="col-sm-12 form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Tóxico
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="col-sm-12 form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Inflamable
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="col-sm-12 form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Biológico
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="col-sm-12 form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Mezcla
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="noONU" class="col-sm-2 col-form-label">Número de la ONU:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="noONU"
                                            placeholder="Ingrese su Número de la ONU" value="{{ old('noONU') }}"
                                            maxlength="7" onkeyup="this.value = this.value.toUpperCase();">
                                        @if ($errors->has('noONU'))
                                            <span class="error text-danger"
                                                for="input-noONU">{{ $errors->first('noONU') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="descripcion" class="col-sm-2 col-form-label">Descripción:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="descripcion"
                                            placeholder="Ingrese la descripción" value="{{ old('descripcion') }}"
                                            onkeyup="this.value = this.value.toUpperCase();">
                                        @if ($errors->has('descripcion'))
                                            <span class="error text-danger"
                                                for="input-descripcion">{{ $errors->first('descripcion') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="clase_id" class="col-sm-2 col-form-label">Clase:</label>
                                    <div class="col-md-7">
                                        <select name="clase_id"
                                            class="form-control @error('clase_id') is-invalid @enderror" id="clase_id">
                                            <option value="">Seleccione el clase...</option>
                                            <!--Comienzo for each -->
                                            @foreach ($clases as $clase)
                                                <option value="{{ $clase->id }}"
                                                    {{ old('clase_id') == $clase->id ? 'selected' : '' }}>
                                                    {{ $clase->nombre }}</option>
                                                <?php $valor = $clase->id; ?>
                                            @endforeach
                                            <!--termino for each -->
                                        </select>
                                        @error('clase_id')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="materia_id" class="col-sm-2 col-form-label">Estado:</label>
                                    <div class="col-md-7">
                                        <select name="materia_id"
                                            class="form-control @error('materia_id') is-invalid @enderror" id="materia_id">
                                            <option value="">Seleccione el estado de la materia...</option>
                                            <!--Comienzo for each -->
                                            @foreach ($materias as $materia)
                                                <option value="{{ $materia->id }}"
                                                    {{ old('materia_id') == $materia->id ? 'selected' : '' }}>
                                                    {{ $materia->nombre }}</option>
                                                <?php $valor = $materia->id; ?>
                                            @endforeach
                                            <!--termino for each -->
                                        </select>
                                        @error('materia_id')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <!--Footer-->
                            <div class="card-footer ml-auto mr-auto">
                                <a href="{{ route('residuos.index') }}" class="btn btn-success mr-3">Volver al índice</a>
                                <button type="submit" class="btn btn-warning">Guardar Residuo</button>
                            </div>
                            <!--Fin del Footer-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
