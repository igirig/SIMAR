@extends('layouts.main', ['activePage' => 'manifiestos.index', 'titlePage' => 'Manifiestos'])
@section('content')
<script src="{{ asset('js/plugins/sweetalert2.js')}}"></script>

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
                                <form method="POST" action="{{ route('LE.store') }}">
                                  @csrf
                                  <div class="form-group col-md-3">
                                    <label for="inputServiceStation">Razón social de la estación de servicio</label>
                                    <select name="inputServiceStation" id="inputServiceStation" class="form-control">
                                      <option value="">Escoge una opción...</option>
                                      @foreach ($items as $item)
                                        <option value="{{ $item->id }}">{{ $item->razonSocial }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Crear</button>
                        </div>
                                </form>
                    </div>
                </div>
        </div>
    </div>

    

</div>

@if(session('error'))
<script type="application/javascript">
  swal({
     title: '{{session('error')}}',
     text: '¡Operación erronea!',
     icon: 'error'
     });
</script>
@endif



@endsection