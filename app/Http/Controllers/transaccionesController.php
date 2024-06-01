<?php

namespace App\Http\Controllers;

use App\Models\Transacciones;
use App\Models\User;
use Illuminate\Http\Request;

class transaccionesController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datosProveedor = Transacciones::all();
        $datosUsuario = User::all();

        return view('interfaces/transacciones/create', compact('datosProveedor', 'datosUsuario'));
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

        return redirect()->route('login.dashboard')->with('success', 'Datos registrados correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
