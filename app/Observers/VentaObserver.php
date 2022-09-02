<?php

namespace App\Observers;

use App\Models\Producto;
use App\Models\Venta;
use ErrorException;

class VentaObserver
{
    public function creating (Venta $venta)
    {
        $idProducto = $venta?->producto_id;
        $producto = Producto::find($idProducto);
        $stockActual = $producto?->stock;
        if ($stockActual >= $venta?->cantidad) {
            // Si el stock es suficiente procedemos a actualizar el producto
            $nuevoStock = $stockActual - $venta?->cantidad;
            $producto?->update(['stock' => $nuevoStock]);
        } else 
            throw new ErrorException("No hay stock suficiente");
    }
}
