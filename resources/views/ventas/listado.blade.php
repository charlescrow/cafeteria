<table class="table listadoVentas">
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