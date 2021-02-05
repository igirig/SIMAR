@extends('layouts.main', ['activePage' => 'manifiestos.create', 'titlePage' => 'Usuarios'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('manifiestos.store') }}" method="post" class="form-horizontal">
                        @csrf
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
