@extends('layouts.main', ['activePage' => 'residuos.edit', 'titlePage' => 'Residuos'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('residuos.update', $residuo->id) }}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header card-header-warning">
                                <h4 class="card-title">Editar Residuo</h4>
                                <p class="card-category">Edite los datos del Residuo {{ $residuo->nombre }}...</p>
                                <p class="card-category">*</p>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="nombre"
                                            value="{{ old('nombre', $residuo->nombre) }}"
                                            onkeyup="this.value = this.value.toUpperCase();">
                                        @if ($errors->has('nombre'))
                                            <span class="error text-danger"
                                                for="input-nombre">{{ $errors->first('nombre') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="corrosivo" class="col-sm-2 col-form-label">¿Es corrosivo?</label>
                                    <div class="col-sm-1">
                                        @if ($residuo->corrosivo == 1)
                                            <input type="checkbox" class="form-control" name="corrosivo" value="1" checked>
                                        @else
                                            <input type="checkbox" class="form-control" name="corrosivo" value="1">
                                        @endif
                                        @if ($errors->has('corrosivo'))
                                            <span class="error text-danger"
                                                for="input-corrosivo">{{ $errors->first('corrosivo') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="reactivo" class="col-sm-2 col-form-label">¿Es reactivo?</label>
                                    <div class="col-sm-1">
                                        @if ($residuo->reactivo == 1)
                                            <input type="checkbox" class="form-control" name="reactivo" value="1" checked>
                                        @else
                                            <input type="checkbox" class="form-control" name="reactivo" value="1">
                                        @endif
                                        @if ($errors->has('reactivo'))
                                            <span class="error text-danger"
                                                for="input-reactivo">{{ $errors->first('reactivo') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="explosivo" class="col-sm-2 col-form-label">¿Es explosivo?</label>
                                    <div class="col-sm-1">
                                        @if ($residuo->explosivo == 1)
                                            <input type="checkbox" class="form-control" name="explosivo" value="1" checked>
                                        @else
                                            <input type="checkbox" class="form-control" name="explosivo" value="1">
                                        @endif
                                        @if ($errors->has('explosivo'))
                                            <span class="error text-danger"
                                                for="input-explosivo">{{ $errors->first('explosivo') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="toxico" class="col-sm-2 col-form-label">¿Es tóxico?</label>
                                    <div class="col-sm-1">
                                        @if ($residuo->toxico == 1)
                                            <input type="checkbox" class="form-control" name="toxico" value="1" checked>
                                        @else
                                            <input type="checkbox" class="form-control" name="toxico" value="1">
                                        @endif
                                        @if ($errors->has('toxico'))
                                            <span class="error text-danger"
                                                for="input-toxico">{{ $errors->first('toxico') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="inflamable" class="col-sm-2 col-form-label">¿Es inflamable?</label>
                                    <div class="col-sm-1">
                                        @if ($residuo->inflamable == 1)
                                            <input type="checkbox" class="form-control" name="inflamable" value="1" checked>
                                        @else
                                            <input type="checkbox" class="form-control" name="inflamable" value="1">
                                        @endif
                                        @if ($errors->has('inflamable'))
                                            <span class="error text-danger"
                                                for="input-inflamable">{{ $errors->first('inflamable') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="biologico" class="col-sm-2 col-form-label">¿Es biológico?</label>
                                    <div class="col-sm-1">
                                        @if ($residuo->biologico == 1)
                                            <input type="checkbox" class="form-control" name="biologico" value="1" checked>
                                        @else
                                            <input type="checkbox" class="form-control" name="biologico" value="1">
                                        @endif
                                        @if ($errors->has('biologico'))
                                            <span class="error text-danger"
                                                for="input-biologico">{{ $errors->first('biologico') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="mezcla" class="col-sm-2 col-form-label">¿Es mezcla?</label>
                                    <div class="col-sm-1">
                                        @if ($residuo->mezcla == 1)
                                            <input type="checkbox" class="form-control" name="mezcla" value="1" checked>
                                        @else
                                            <input type="checkbox" class="form-control" name="mezcla" value="1">
                                        @endif
                                        @if ($errors->has('mezcla'))
                                            <span class="error text-danger"
                                                for="input-mezcla">{{ $errors->first('mezcla') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="noONU" class="col-sm-2 col-form-label">Número de la ONU:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="noONU"
                                            value="{{ old('noONU', $residuo->noONU) }}" maxlength="6"
                                            onkeyup="this.value = this.value.toUpperCase();">
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
                                            value="{{ old('descripcion', $residuo->descripcion) }}"
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
                                        <select name="clase_id" class="form-control @error('clase_id') is-invalid @enderror"
                                            id="clase_id">
                                            <option value="">Seleccione el clase...</option>
                                            <!--Comienzo for each -->
                                            @foreach ($clases as $clase)
                                                <option value="{{ $clase->id }}"
                                                    {{ $residuo->clase_id == $clase->id ? 'selected' : '' }}>
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
                                    <label for="materia_id" class="col-sm-2 col-form-label">Estado de la materia:</label>
                                    <div class="col-md-7">
                                        <select name="materia_id"
                                            class="form-control @error('materia_id') is-invalid @enderror" id="materia_id">
                                            <option value="">Seleccione la materia...</option>
                                            <!--Comienzo for each -->
                                            @foreach ($materias as $materia)
                                                <option value="{{ $materia->id }}"
                                                    {{ $residuo->materia_id == $materia->id ? 'selected' : '' }}>
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
                                <a href="{{ url()->previous() }}" class="btn btn-success mr-3">Volver</a>
                                <button type="submit" class="btn btn-warning">Actualizar residuo</button>
                            </div>
                            <!--Fin del Footer-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
