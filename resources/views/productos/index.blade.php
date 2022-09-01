@extends('layouts.principal')
@section('content')

    <div class="">
        <div class="row">
            <div class="col-lg-10">
                <h3>Listado de productos</h3> <br><br>
            </div>
            <div class="col-2">
                <button class="btn btn-primary"> <i class="fa fa-plus"></i> Nuevo producto</button>
            </div>
        </div>
    </div>
    <table class="table">
    <thead>
        <tr>
            <th  class="text-center">#</th>
            <th  class="text-center">Nombre</th>
            <th  class="text-center">Referencia</th>
            <th  class="text-center">Precio</th>
            <th  class="text-center">Peso</th>
            <th  class="text-center">Stock</th>
            <th  class="text-center">Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($productos as $index => $producto)
        <tr >
            <td class="text-center">{{$index+1}}</td>
            <td >{{$producto?->nombre}}</td>
            <td class="text-center">{{$producto?->referencia}}</td>
            <td class="text-center">{{$producto?->precio}}</td>
            <td class="text-center">{{$producto?->peso}}</td>
            <td class="text-center">{{$producto?->stock}}</td>
            <td class="text-center">
                <a href=""><i class="btn btn-sm btn-danger fa fa-trash"></i></a>
                <a href=""><i class="btn btn-sm btn-primary fa fa-edit"></i></a>
            </td>
        </tr>
        @endforeach      
        </tbody>
    </table>

@endsection