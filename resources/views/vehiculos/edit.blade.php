@extends('layouts.main', ['activePage' => 'users.edit', 'titlePage' => 'Usuarios'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('users.update', $user->id) }}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header card-header-warning">
                                <h4 class="card-title">Editar usuario</h4>
                                <p class="card-category">Edite los datos del usuario {{ $user->name }}...</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="name" class="col-sm-2 col-form-label">Nombre:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="name"
                                            value="{{ old('name', $user->name) }}" autofocus>
                                        @if ($errors->has('name'))
                                            <span class="error text-danger"
                                                for="input-name">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="email" class="col-sm-2 col-form-label">Correo electrónico:</label>
                                    <div class="col-sm-7">
                                        <input type="email" class="form-control" name="email"
                                            value="{{ old('email', $user->email) }}">
                                        @if ($errors->has('email'))
                                            <span class="error text-danger"
                                                for="input-email">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="password" class="col-sm-2 col-form-label">Contraseña:</label>
                                    <div class="col-sm-7">
                                        <input type="password" class="form-control" name="password"
                                            placeholder="Ingrese su contraseña (SOLO EN CASO DE MODIFICARLA)">
                                        @if ($errors->has('password'))
                                            <span class="error text-danger"
                                                for="input-password">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!--Footer-->
                            <div class="card-footer ml-auto mr-auto">
                                <a href="{{ url()->previous() }}" class="btn btn-success mr-3">Volver</a>
                                <button type="submit" class="btn btn-warning">Actualizar usuario</button>
                            </div>
                            <!--Fin del Footer-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
