<div class="sidebar" data-color="green" data-background-color="white" data-image="{{ asset('img/sidebar-1.png') }}">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            {{ __('SIAPA') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Menú principal') }}</p>
                </a>
            </li>

            {{-- Documentos --}}
            <li class="nav-item{{ $activePage == 'manifiestos.create' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('manifiestos.create') }}">
                    <i class="material-icons">person</i>
                    <p>{{ __('Crear documento') }}</p>
                </a>
            </li>

            {{-- Usuarios --}}
            <li class="nav-item {{ $activePage == 'users.index' || $activePage == 'users.create' ? ' active' : '' }}">
                <a class="nav-link collapsed" data-toggle="collapse" href="#laravelExample" aria-expanded="false">
                    <i><img style="width:25px" src="{{ asset('img/laravel.svg') }}"></i>
                    <p>{{ __('Usuarios') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="laravelExample">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'users.index' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('users.index') }}">
                                <span class="sidebar-mini"> UP </span>
                                <span class="sidebar-normal">{{ __('Lista de usuarios') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'users.create' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('users.create') }}">
                                <span class="sidebar-mini"> UM </span>
                                <span class="sidebar-normal"> {{ __('Crear un usuario') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            {{-- Clientes --}}
            <li
                class="nav-item {{ $activePage == 'clientes.index' || $activePage == 'clientes.create' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('clientes.index') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Clientes') }}</p>
                </a>
            </li>

            {{-- Sucursales --}}
            <li
                class="nav-item{{ $activePage == 'sucursales.index' || $activePage == 'sucursales.create' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('sucursales.index') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Sucursales') }}</p>
                </a>
            </li>

            {{-- Plantas --}}
            <li
                class="nav-item {{ $activePage == 'plantas.index' || $activePage == 'plantas.create' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('plantas.index') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Plantas') }}</p>
                </a>
            </li>

            {{-- Estaciones --}}
            <li
                class="nav-item{{ $activePage == 'estaciones.index' || $activePage == 'estaciones.create' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('estaciones.index') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Estaciones') }}</p>
                </a>
            </li>

            {{-- Transportistas --}}
            <li
                class="nav-item{{ $activePage == 'transportistas.index' || $activePage == 'transportistas.create' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('transportistas.index') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Transportistas') }}</p>
                </a>
            </li>

            {{-- Vehículos --}}
            <li
                class="nav-item{{ $activePage == 'vehiculos.index' || $activePage == 'vehiculos.create' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('vehiculos.index') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Vehículos') }}</p>
                </a>
            </li>

        </ul>
    </div>
</div>
