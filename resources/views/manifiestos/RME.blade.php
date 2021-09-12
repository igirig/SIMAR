@extends('layouts.main', ['activePage' => 'manifiestos.index', 'titlePage' => 'Manifiestos'])

@section('content')

@section('scripts')
              <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
              <script>
                var i = 1;

                function addResiduo() {
                  document.getElementById("residuos").innerHTML +=
                    "<div class='form-group col-md-3'><label for='inputServiceStation'>Residuo " + i + "</label><select id='inputServiceStation" + i + " ' class='form-control' required><option value=''>Seleccione el residuo...</option> @foreach ($residuos as $residuo)<option value='{{ $residuo->id }}'>{{ $residuo->nombre }}</option>@endforeach</select></div>";
                  i++;
                }
              </script>
@endsection
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-warning">
            <h4 class="card-title">Nuevo Documento</h4>
          </div>
          <div class="card-body">
            <div class="btn-group">
              <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Documentos
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('LE.create') }}">Limpieza ecologica</a>
                <a class="dropdown-item" href="{{ route('RME.create') }}">Residuos Manejo Especial</a>
                <a class="dropdown-item" href="{{ route('MRP.create') }}">Residuos Peligrosos</a>
              </div>
            </div>
          </div>

        </div>
        <div class="card">
          <div class="card-body">
            <form method="POST" action="{{ route('RME.store') }}">
              @csrf
              <div class="form-group col-md-3">
                <label for="inputGenerator">Razón social de la sucursal del cliente</label>
                <select name="inputGenerator" id="inputGenerator" class="form-control" required>
                  <option value="">Seleccione la sucursal...</option>
                  @foreach ($sucursales as $sucursal)
                  <option value="{{ $sucursal->id }}">{{ $sucursal->nombre }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group col-md-3">
                <label for="inputTransportist">Razón social del transportista</label>
                <select name="inputTransportist" id="inputTransportist" class="form-control" required>
                  <option value="">Seleccione el transportista...</option>
                  @foreach ($transportistas as $transportista)
                  <option value="{{ $transportista->id }}">{{ $transportista->razonSocial }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group col-md-3">
                <label for="inputVehicle">Vehículo a utilizar</label>
                <select name="inputVehicle" id="inputVehicle" class="form-control" required>
                  <option value="">Seleccione el vehículo...</option>
                  @foreach ($vehiculos as $vehiculo)
                  <option value="{{ $vehiculo->id }}">{{ $vehiculo->noPlaca }}</option>
                  @endforeach
                </select>
              </div>


              <div class="form-group col-md-3">
                <label for="inputMunOrig">Municipio de origen</label>
                <select name="inputMunOrig" id="inputMunOrig" class="form-control" required>
                  <option value="">Seleccione el municipio...</option>
                  @foreach ($municipios as $municipio)
                  <option value="{{ $municipio->id }}">{{ $municipio->nombre }}</option>
                  @endforeach
                </select>
              </div>



              <div class="form-group col-md-3">
                <label for="inputMunDest">Municipio de destino</label>
                <select name="inputMunDest" id="inputMunDest" class="form-control" required>
                  <option value="">Seleccione el municipio...</option>
                  @foreach ($municipios as $municipio)
                  <option value="{{ $municipio->id }}">{{ $municipio->nombre }}</option>
                  @endforeach
                </select>
              </div>


              <div class="form-group col-md-3">
                <label for="inputDestinatario">Razón social del destinatario</label>
                <select name="inputDestinatario" id="inputDestinatario" class="form-control" required>
                  <option value="">Seleccione el destinatario...</option>
                  @foreach ($plantas as $planta)
                  <option value="{{ $planta->id }}">{{ $planta->razonSocial }}</option>
                  @endforeach
                </select>
              </div>
              
              <div id='residuos' class='box-body'>
                <div class="form-group col-md-3">
                  <label for="inputResiduo0">Residuo 0</label>
                  <select name="inputResiduo0" id="inputResiduo0" class="form-control" required>
                    <option value="">Seleccione el residuo...</option>
                    @foreach ($residuos as $residuo)
                    <option value="{{ $residuo->id }}">{{ $residuo->nombre }}</option>
                    @endforeach
                  </select>
                  
                </div>

              </div>
              
              <button type="button" class="btn btn-info btn-sm btn-round" id="buttonResiduoPlus" onclick="addResiduo()">Agregar residuo</button>

          </div>
          <button type="submit" class="btn btn-success btn-lg">Crear</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>



</div>

@if(session('error'))
<script type="application/javascript">
  Swal.fire({
    timer: 5000,
    toast: true,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    },
    title: 'Error',
    position: 'bottom-end',
    text: 'Algo salio mal!.',
    icon: 'error',
    showClass: 
    {
      popup: 'animate__animated animate__zoomInUp'
    },
    hideClass: 
    {
      popup: 'animate__animated animate__rollOut'
    },
  });
</script>
@endif

@endsection