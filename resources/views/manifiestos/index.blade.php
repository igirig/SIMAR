@extends('layouts.main', ['activePage' => 'manifiestos.index', 'titlePage' => 'Documentos'] )
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
                    @csrf
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
                                  <a class="dropdown-item" href="LE" id="LE">Limpieza ecologica</a>
                                  <a class="dropdown-item" href="#" id="Algo">Algo</a>
                                  <a class="dropdown-item" href="#">Something else here</a>
                                  <a class="dropdown-item" href="#">Separated link</a>
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

