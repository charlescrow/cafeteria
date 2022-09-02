<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductoRequest;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $info['productos'] = Producto::get();
        return view('productos.index', $info);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoRequest $request)
    {   
        $insert = Producto::create($request->all());
        $info['productos'] = Producto::get();
        if($insert) {
            return [
                'success' => true,
                'mensaje' => 'Producto registrado',
                'data' => view('productos.listado', $info)->render()
            ];
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        if ($producto) {
            return [
                'success' => true,
                'data' => view('productos.editar', ['producto' => $producto])->render()
            ];
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductoRequest $request)
    {
        $id = $request?->input('id');
        $producto = Producto::find($id);
        if ($producto) {
            $actualiza = $producto?->update($request->all());
            $info['productos'] = Producto::get();
            if ($actualiza) {
                return [
                    'success' => true,
                    'mensaje' => 'Producto actualizado',
                    'data' => view('productos.listado', $info)->render()
                ];
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        if ($producto) {
            $elimina = $producto->delete();
            if ($elimina) {
                $info['productos'] = Producto::get();
                return [
                    'success' => true,
                    'mensaje' => 'Producto eliminado',
                    'data' => view('productos.listado', $info)->render()
                ];
            }
        }
    }
}
