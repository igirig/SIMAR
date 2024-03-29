@extends('layouts.main', ['activePage' => 'manifiestos.index', 'titlePage' => 'Manifiestos'])
@section('scripts')
    <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>
        
    </script>
@endsection
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

                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

