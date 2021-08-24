@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Menú principal')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-9 ml-auto mr-auto mb-3 text-center">
                <img src="{{ asset('img/grupoSimar.png') }}" alt="Grupo Simar">
                <h3>{{ __('Bienvenido al Sistema Integral de Apoyo a Procesos Administrativos de Grupo SIMAR') }}</h3>
                <hr>
                <h4>{{ __('¿Qué desea realizar?') }}</h4>
                <a href="{{ route('manifiestos.create') }}" class="btn btn-warning btn-lg"><i
                        class="material-icons">description</i> crear documento</a>
                <hr>
                <h4>{{ __('¿Qué desea ver, crear o modificar?') }}</h4>
                <a href="{{ route('clientes.index') }}" class="btn btn-success btn-lg"><i
                        class="material-icons">apartment</i> clientes</a>
                <a href="{{ route('sucursales.index') }}" class="btn btn-success btn-lg"><i
                        class="material-icons">store</i> sucursales</a>
                <a href="{{ route('plantas.index') }}" class="btn btn-success btn-lg"><i
                        class="material-icons">recycling</i> plantas de tratamiento</a>
                <a href="{{ route('estaciones.index') }}" class="btn btn-success btn-lg"><i
                        class="material-icons">local_gas_station</i> estaciones de servicio</a>
                <a href="{{ route('transportistas.index') }}" class="btn btn-success btn-lg"><i
                        class="material-icons">emoji_transportation</i> transportistas</a>
                <a href="{{ route('vehiculos.index') }}" class="btn btn-success btn-lg"><i
                        class="material-icons">local_shipping</i> vehiculos</a>
                <a href="{{ route('residuos.index') }}" class="btn btn-success btn-lg"><i
                        class="material-icons">delete</i> residuos</a>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();
        });
    </script>
@endpush
