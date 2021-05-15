@extends('layouts.main', ['activePage' => 'manifiestos.LE', 'titlePage' => 'Manifiesto de Limpieza Ecologica'])
@section('scripts')
    <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('select#estado_id').on('change', function() {
                var valor = $(this).val();
                console.log(valor);
            });
        });
    </script>
@endsection