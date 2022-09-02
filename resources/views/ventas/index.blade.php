@extends('layouts.principal')
@section('content')

    <div class="">
        <div class="row">
            <div class="col-lg-10">
                <h3>Listado de ventas</h3> <br><br>
            </div>
            <div class="col-2">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalVenta"> <i class="fa fa-plus"></i> Nueva venta</button>
            </div>
        </div>
    </div>
    
    @include('ventas.listado')
    <!-- Modal de crear venta -->
    @include('ventas.crear')
    <script src="{{mix('js/ventas/principal.js')}}"></script>
@endsection