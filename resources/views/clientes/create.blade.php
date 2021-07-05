@extends('layouts.main', ['activePage' => 'clientes.create', 'titlePage' => 'Clientes'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('clientes.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-warning">
                                <h4 class="card-title">Nuevo Cliente</h4>
                                <p class="card-category">Ingrese los datos del cliente...</p>
                            </div>
                            <div class="card-body">
                                
                                <div class="row">
                                    <label for="razonSocial" class="col-sm-2 col-form-label">Razón social</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="razonSocial" placeholder="Ingrese la razón social del cliente"
                                            value="{{ old('razonSocial') }}" onkeyup="this.value = this.value.toUpperCase();" autofocus>
                                        @if ($errors->has('razonSocial'))
                                            <span class="error text-danger"
                                                for="input-razonSocial">{{ $errors->first('razonSocial') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!--Footer-->
                            <div class="card-footer ml-auto mr-auto">
                                <a href="{{ route('clientes.index') }}" class="btn btn-success mr-3">Volver al índice</a>
                                <button type="submit" class="btn btn-warning">Guardar Cliente</button>
                            </div>
                            <!--Fin del Footer-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
