@extends('layouts.main', ['activePage' => 'manifiestos.index', 'titlePage' => 'Manifiestos'])

@section('content')

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
                                <form>
                                    <div class="form-group col-md-3">
                                        <label for="inputServiceStation">Razón social del generador</label>
                                        <select id="inputServiceStation" class="form-control">
                                          @foreach ($clientes as $cliente)
                                            <option value="{{ $cliente->id }}">{{ $cliente->razonSocial }}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputServiceStation">Razón social del transportista</label>
                                        <select id="inputServiceStation" class="form-control">
                                          @foreach ($transportistas as $transportista)
                                            <option value="{{ $transportista->id }}">{{ $transportista->razonSocial }}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                      <div class="form-group col-md-3">
                                        <label for="inputServiceStation">Razón social del destinatario</label>
                                        <select id="inputServiceStation" class="form-control">
                                          @foreach ($plantas as $planta)
                                            <option value="{{ $planta->id }}">{{ $planta->razonSocial }}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                    
                                    <div id='residuos' class='box-body'>
                                    <div class="form-group col-md-3">
                                        <label for="inputServiceStation">Residuo 0</label>
                                        <select id="inputServiceStation0" class="form-control">
                                          @foreach ($residuos as $residuo)
                                            <option value="{{ $residuo->id }}">{{ $residuo->nombre }}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                    
                                  </div>
                                    @section('scripts')
                                      <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
                                      <script>
                                        var i = 1;
                                          function addResiduo(){
                                            document.getElementById("residuos").innerHTML += 
                                            "<div class='form-group col-md-3'><label for='inputServiceStation'>Residuo "+i+"</label><select id='inputServiceStation"+i+" ' class='form-control'>@foreach ($residuos as $residuo)<option value='{{ $residuo->id }}'>{{ $residuo->nombre }}</option>@endforeach</select></div>";
                                            i++;
                                          }
                                      </script>
                                    @endsection
                                  <button type="button" class="btn btn-info btn-sm btn-round" id="buttonResiduoPlus" onclick="addResiduo()">Agregar residuo</button>
                                  
        
                            </div>
                            <button type="submit" class="btn btn-primary" >Crear</button>
                        </div>
                    </form>
                    </div>
                </div>
        </div>
    </div>

    

</div>



@endsection