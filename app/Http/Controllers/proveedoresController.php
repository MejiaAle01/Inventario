<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use Illuminate\Http\Request;

class proveedoresController extends Controller
{
    public function index()
    {
        $proveedores = Proveedores::all();
        return view('interfaces/proveedor/index', compact('proveedores'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datosProveedor = Proveedores::all();
        return view('interfaces/proveedor/create', compact('datosProveedor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $transaccion = new Proveedores();

        $transaccion->nombre = $request->post('nombre');
        $transaccion->empresa = $request->post('empresa');
        $transaccion->direccion = $request->post('direccion');
        $transaccion->transaccion_id = $request->post('transaccionSelecc');
        $transaccion->producto_id = $request->post('productoSelecc');
        $transaccion->save();

        return redirect()->route('proveedor.index')->with('success', 'Datos registrados correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $id = decrypt($id);

        $proveedores = Proveedores::find($id);
        return view('interfaces/proveedor/delete', compact('proveedores'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $id = decrypt($id);
        $proveedores = Proveedores::find($id);
        return view('interfaces/proveedor/update', compact('proveedores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $id = decrypt($id);
        $proveedores = Proveedores::find($id);
        $proveedores->nombre = $request->post('nombre');
        $proveedores->empresa = $request->post('empresa');
        $proveedores->direccion = $request->post('direccion');
        $proveedores->transaccion_id = $request->post('transaccionSelecc');
        $proveedores->producto_id = $request->post('productoSelecc');
        $proveedores->save();
        return redirect()->route('proveedor.index')->with('success', 'Datos actualizados correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $id = decrypt($id);
        $proveedores = Proveedores::find($id);
        $proveedores->delete();
        return redirect()->route('proveedor.index')->with('success', 'Datos eliminados correctamente');
    }
}
