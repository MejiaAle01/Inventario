<?php

namespace App\Http\Controllers;

use App\Models\Transacciones;
use App\Models\User;
use Illuminate\Http\Request;

class transaccionesController extends Controller
{
    public function index()
    {
        $user = User::all();
        $transacciones = Transacciones::all();

        return view('interfaces/transacciones/index', compact('transacciones', 'user'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datosProveedor = Transacciones::all();
        $datosUsuario = User::all();

        return view('interfaces/transacciones/crear', compact('datosProveedor', 'datosUsuario'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $transaccion = new Transacciones();

        $transaccion->entradas = $request->post('entrada');
        $transaccion->salidas = $request->post('salida');
        $transaccion->ajustes = $request->post('ajustes');
        $transaccion->ucc = $request->post('ucc');
        $transaccion->creado = $request->post('fecha');
        $transaccion->proveedor_id = $request->post('proveedorSelecc');
        $transaccion->user_id = $request->post('usuarioSelecc');
        $transaccion->save();

        return redirect()->route('transaccion.index')->with('success', 'Datos registrados correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $id = decrypt($id);

        $transaccion = Transacciones::find($id);

        return view('interfaces/transacciones/eliminar', compact('transaccion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $id = decrypt($id);
        $transaccion = Transacciones::find($id);
        return view('interfaces/transacciones/actualizar', compact('transaccion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $id = decrypt($id);
        $transaccion = Transacciones::find($id);

        $transaccion->entradas = $request->post('entrada');
        $transaccion->salidas = $request->post('salida');
        $transaccion->ajustes = $request->post('ajustes');
        $transaccion->ucc = $request->post('ucc');
        $transaccion->creado = $request->post('fecha');
        $transaccion->proveedor_id = $request->post('proveedorSelecc');
        $transaccion->user_id = $request->post('usuarioSelecc');
        $transaccion->save();

        return redirect()->route('transaccion.index')->with('success', 'Datos actualizados correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $id = decrypt($id);
        $transaccion = Transacciones::find($id);
        $transaccion->delete();
        return redirect()->route('transaccion.index')->with('success', 'Datos eliminados correctamente');
    }
}
