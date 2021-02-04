<div class="sidebar" data-color="green" data-background-color="white"
    data-image="{{ asset('img/sidebar-1.jpg')}}">
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

            <li class="nav-item {{ $activePage == 'users.index' || $activePage == 'users.create' ? ' active' : '' }}">
                <a class="nav-link collapsed" data-toggle="collapse" href="#laravelExample2" aria-expanded="false">
                    <i><img style="width:25px" src="{{ asset('img/laravel.svg') }}"></i>
                    <p>{{ __('Usuarios') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="laravelExample2">
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

            <li class="nav-item {{ $activePage == 'users.index' || $activePage == 'users.create' ? ' active' : '' }}">
                <a class="nav-link collapsed" data-toggle="collapse" href="#laravelExample3" aria-expanded="false">
                    <i><img style="width:25px" src="{{ asset('img/laravel.svg') }}"></i>
                    <p>{{ __('Usuarios') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="laravelExample3">
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
            
        </ul>
    </div>
</div>
