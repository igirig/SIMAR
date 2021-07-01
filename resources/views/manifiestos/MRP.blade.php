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
                        <form>
                        <div class="card">
                            <div class="card-body">
                                    <div class="form-group col-md-3">
                                        <label for="inputServiceStation">Razón social del generador</label>
                                        <select id="inputServiceStation" class="form-control">
                                          <option selected>Escoge...</option>
                                          <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputServiceStation">Razón social del transportista</label>
                                        <select id="inputServiceStation" class="form-control">
                                          <option selected>Escoge...</option>
                                          <option>...</option>
                                        </select>
                                    </div>
                                      <div class="form-group col-md-3">
                                        <label for="inputServiceStation">Razón social del destinatario</label>
                                        <select id="inputServiceStation" class="form-control">
                                          <option selected>Escoge...</option>
                                          <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputServiceStation">Residuo 0</label>
                                        <select id="inputServiceStation" class="form-control">
                                          <option selected>Escoge...</option>
                                          <option>...</option>
                                        </select>
                                        <button type="button" class="btn btn-info btn-sm btn-round">Agregar residuo</button>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputServiceStation">Razón social del centro de acopio</label>
                                        <select id="inputServiceStation" class="form-control">
                                          <option selected>Escoge...</option>
                                          <option>...</option>
                                        </select>
                                    </div>
                                    
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