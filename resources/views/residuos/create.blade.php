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
                                            placeholder="Ingrese el nombre del residuo" value="{{ old('nombre') }}"
                                            onkeyup="this.value = this.value.toUpperCase();" maxlength="64">
                                        @if ($errors->has('nombre'))
                                            <span class="error text-danger"
                                                for="input-nombre">{{ $errors->first('nombre') }}</span>
                                        @endif
                                    </div>
                                </div>

                                {{-- BOTONES PARA RESIDUOS --}}

                                <div class="row">
                                    <label for="corrosivo" class="col-sm-2 col-form-label">¿El residuo es corrosivo?</label>
                                    <div class="col-sm-1">
                                        <input type="checkbox" class="form-control" name="corrosivo" value="1">
                                        @if ($errors->has('corrosivo'))
                                            <span class="error text-danger"
                                                for="input-corrosivo">{{ $errors->first('corrosivo') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="reactivo" class="col-sm-2 col-form-label">¿El residuo es reactivo?</label>
                                    <div class="col-sm-1">
                                        <input type="checkbox" class="form-control" name="reactivo" value="1">
                                        @if ($errors->has('reactivo'))
                                            <span class="error text-danger"
                                                for="input-reactivo">{{ $errors->first('reactivo') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="explosivo" class="col-sm-2 col-form-label">¿El residuo es explosivo?</label>
                                    <div class="col-sm-1">
                                        <input type="checkbox" class="form-control" name="explosivo" value="1">
                                        @if ($errors->has('explosivo'))
                                            <span class="error text-danger"
                                                for="input-explosivo">{{ $errors->first('explosivo') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="toxico" class="col-sm-2 col-form-label">¿El residuo es tóxico?</label>
                                    <div class="col-sm-1">
                                        <input type="checkbox" class="form-control" name="toxico" value="1">
                                        @if ($errors->has('toxico'))
                                            <span class="error text-danger"
                                                for="input-toxico">{{ $errors->first('toxico') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="inflamable" class="col-sm-2 col-form-label">¿El residuo es inflamable?</label>
                                    <div class="col-sm-1">
                                        <input type="checkbox" class="form-control" name="inflamable" value="1">
                                        @if ($errors->has('inflamable'))
                                            <span class="error text-danger"
                                                for="input-inflamable">{{ $errors->first('inflamable') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="biologico" class="col-sm-2 col-form-label">¿El residuo es biológico?</label>
                                    <div class="col-sm-1">
                                        <input type="checkbox" class="form-control" name="biologico" value="1">
                                        @if ($errors->has('biologico'))
                                            <span class="error text-danger"
                                                for="input-biologico">{{ $errors->first('biologico') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="mezcla" class="col-sm-2 col-form-label">¿El residuo es mezcla?</label>
                                    <div class="col-sm-1">
                                        <input type="checkbox" class="form-control" name="mezcla" value="1">
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
                                            placeholder="Ingrese su Número de la ONU" value="{{ old('noONU') }}"
                                            maxlength="6" onkeyup="this.value = this.value.toUpperCase();">
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
                                            placeholder="Ingrese una descripción para el residuo" value="{{ old('descripcion') }}"
                                            onkeyup="this.value = this.value.toUpperCase();" maxlength="128">
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
                                            <option value="">Seleccione la clase a la que pertenece el residuo...</option>
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
                                    <label for="materia_id" class="col-sm-2 col-form-label">Estado de la materia:</label>
                                    <div class="col-md-7">
                                        <select name="materia_id"
                                            class="form-control @error('materia_id') is-invalid @enderror" id="materia_id">
                                            <option value="">Seleccione el estado de la materia del residuo...</option>
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
                                <button type="submit" class="btn btn-warning">Guardar residuo</button>
                            </div>
                            <!--Fin del Footer-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
