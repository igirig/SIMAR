@extends('layouts.main', ['activePage' => 'clientes.edit', 'titlePage' => 'Clientes'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('clientes.update', $cliente->id) }}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header card-header-warning">
                                <h4 class="card-title">Editar cliente</h4>
                                <p class="card-category">Edite los datos del cliente {{ $cliente->razonSocial }}...</p>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <label for="razonSocial" class="col-sm-2 col-form-label">Nombre:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="razonSocial"
                                            value="{{ old('razonSocial', $cliente->razonSocial) }}" onkeyup="this.value = this.value.toUpperCase();" autofocus>
                                        @if ($errors->has('razonSocial'))
                                            <span class="error text-danger"
                                                for="input-razonSocial">{{ $errors->first('razonSocial') }}</span>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <!--Footer-->
                            <div class="card-footer ml-auto mr-auto">
                                <a href="{{ url()->previous() }}" class="btn btn-success mr-3">Volver</a>
                                <button type="submit" class="btn btn-warning">Actualizar cliente</button>
                            </div>
                            <!--Fin del Footer-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
