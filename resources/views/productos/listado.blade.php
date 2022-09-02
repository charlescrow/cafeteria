<table class="table" id="tablaProducto">
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
            <a><i class="btn btn-sm btn-primary fa fa-edit editarProducto" data-editar="{{$producto?->id}}" ></i></a>
            <a><i class="btn btn-sm btn-danger fa fa-trash eliminarProducto" data-eliminar="{{$producto?->id}}"></i></a>
        </td>
    </tr>
    @endforeach      
    </tbody>
</table>