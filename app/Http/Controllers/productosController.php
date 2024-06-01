<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class productosController extends Controller
{
    public function index()
    {
        $productos = Productos::all();
        return view('interfaces/producto/index', compact('productos'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productos = Productos::all();
        return view('interfaces/producto/create', compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productos = new Productos();

        $productos->producto = $request->input('producto');
        $productos->cantidad = $request->input('cantidad');
        $productos->dirección = $request->input('direccion');
        $productos->recibido = $request->input('recibido');
        $productos->proveedor_id = $request->input('proveedorSelecc');
        $productos->save();

        return redirect()->route('producto.index')->with('success', 'Datos Almacenados Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $id = decrypt($id);
        $productos = Productos::find($id);
        return view('interfaces/producto/delete', compact('productos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $id = decrypt($id);
        $productos = Productos::find($id);
        return view('interfaces/producto/update', compact('productos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $id = decrypt($id);
        $productos = Productos::find($id);
        $productos->producto = $request->input('producto');
        $productos->cantidad = $request->input('cantidad');
        $productos->dirección = $request->input('direccion');
        $productos->recibido = $request->input('recibido');
        $productos->proveedor_id = $request->input('proveedorSelecc');
        $productos->save();
        return redirect()->route('producto.index')->with('success', 'Datos Actualizados Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $id = decrypt($id);
        $productos = Productos::find($id);
        $productos->delete();
        return redirect()->route('producto.index')->with('success', 'Datos Eliminados Correctamente');
    }
}
