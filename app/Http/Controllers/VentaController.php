<?php

namespace App\Http\Controllers;

use App\Http\Requests\VentaRequest;
use App\Models\Producto;
use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::where('stock', '<>', 0)->get();

        $info = [
            'ventas' => Venta::with('producto')->get(),
            'productos' => $productos
        ];
        
        return view('ventas.index', $info);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VentaRequest $request)
    {
        $insert = Venta::create($request->all());
        $info['ventas'] = Venta::get();
        if($insert) {
            return [
                'success' => true,
                'mensaje' => 'Venta registrada',
                'data' => view('ventas.listado', $info)->render()
            ];
        }
    }
}
