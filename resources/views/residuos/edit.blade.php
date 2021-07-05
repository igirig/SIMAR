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
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="nombre"
                                            value="{{ old('nombre', $residuo->nombre) }}" maxlength="5"
                                            onkeyup="this.value = this.value.toUpperCase();">
                                        @if ($errors->has('nombre'))
                                            <span class="error text-danger"
                                                for="input-nombre">{{ $errors->first('nombre') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="noONU" class="col-sm-2 col-form-label">Número de la ONU:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="noONU"
                                            value="{{ old('noONU', $residuo->noONU) }}" maxlength="7"
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
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="clase_id"
                                            value="{{ old('clase_id', $residuo->clase_id) }}" maxlength="5">
                                        @if ($errors->has('clase_id'))
                                            <span class="error text-danger"
                                                for="input-clase_id">{{ $errors->first('clase_id') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="materia_id" class="col-sm-2 col-form-label">Estado:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="materia_id"
                                            value="{{ old('materia_id', $residuo->materia_id) }}" maxlength="5">
                                        @if ($errors->has('materia_id'))
                                            <span class="error text-danger"
                                                for="input-materia_id">{{ $errors->first('materia_id') }}</span>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <!--Footer-->
                            <div class="card-footer ml-auto mr-auto">
                                <a href="{{ url()->previous() }}" class="btn btn-success mr-3">Volver</a>
                                <button type="submit" class="btn btn-warning">Actualizar Residuo</button>
                            </div>
                            <!--Fin del Footer-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
