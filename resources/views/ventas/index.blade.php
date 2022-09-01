@extends('layouts.principal')
@section('content')

    <div class="">
        <div class="row">
            <div class="col-lg-10">
                <h3>Listado de ventas</h3> <br><br>
            </div>
            <div class="col-2">
                <button class="btn btn-primary"> <i class="fa fa-plus"></i> Nueva venta</button>
            </div>
        </div>
    </div>
    <table class="table">
    <thead>
        <tr>
            <th  class="text-center">#</th>
            <th  class="text-center">Producto</th>
            <th  class="text-center">Cantidad</th>
            <th  class="text-center">Fecha</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ventas as $index => $venta)
        <tr >
            <td class="text-center">{{$index+1}}</td>
            <td >{{$venta?->producto?->nombre}}</td>
            <td class="text-center">{{$venta?->cantidad}}</td> 
            <td class="text-center">{{$venta?->created_at}}</td> 
        </tr>
        @endforeach      
        </tbody>
    </table>

@endsection