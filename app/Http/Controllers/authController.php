<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return view('welcome');
    }

    public function login(Request $request): RedirectResponse
    {
        $request->validate([
            'user' => 'required|string',
            'password' => 'required|string'
        ]);

        $credentials = $request->only(['user', 'password']);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return redirect()->route('login.index')->with('success', 'Usuario o contraseña incorrectos!');
    }

    public function logados()
    {
        $user = Auth::user();
        if (Auth::check()) {
            return view('dashboard', compact('user'));
        }

        return redirect()->route('login.index')->with('success', 'Inicia sesión!');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.index')->with('success', "Sesión cerrada");
    }

    public function vistaRegistroForm()
    {
        return view('registerForm');
    }

    // Registrar usuario en la base de datos
    public function registrarUsuario(Request $request)
    {
        $usuario = new User();

        $usuario->name     = $request->input('name');
        $usuario->user     = $request->input('user');
        $usuario->email    = $request->input('email');
        $usuario->password = Hash::make($request->input('password'));
        $usuario->save();

        return redirect()->route('login.index')->with('success', 'Datos creados correctamente!.');
    }
}
