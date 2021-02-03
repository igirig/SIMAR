@extends('layouts.main', ['activePage' => 'users.index', 'titlePage' => 'Usuarios'] )
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-success">
                                    <h4 class="card-title">Lista de usuarios</h4>
                                    <p class="card-category">Seleccione una accion...</p>
                                </div>
                                <div class="card-body">
                                    @if (session('success'))
                                        <div class="alert alert-success" role="success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Apellidos</th>
                                                <th>Correo</th>
                                                <th>Fecha de Creación</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <td>{{ $user->id }}</td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->lastName }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td>{{ $user->created_at }}</td>
                                                        <td class="td-actions text-right">
                                                            <a href="{{ route('users.show', $user->id) }}"
                                                                class="btn btn-info" title="Visualizar usuario"><i
                                                                    class="material-icons">person</i></a>
                                                            <a href="{{ route('users.edit', $user->id) }}"
                                                                class="btn btn-warning" title="Editar usuario"><i
                                                                    class="material-icons">edit</i></a>
                                                            <form action="{{ route('users.destroy', $user->id) }}"
                                                                method="POST" style="display: inline-block;"
                                                                onsubmit="return confirm('¿Esta seguro que desea eliminar al usuario {{ $user->name }}?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit"
                                                                    rel="tooltip"><i class="material-icons"
                                                                        title="Eliminar usuario">close</i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer mr-auto">
                                    {{ $users->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
