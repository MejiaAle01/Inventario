@extends('plantilla/plantilla')

@section('tituloPagina', 'Transacciones | Inicio')

@section('contenido')
    <header class="container">
        <nav class="navbar is-spaced has-shadow">
            <div class="navbar-brand">
                <div class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </div>
            </div>
            <div id="navMenu" class="navbar-menu">
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <div class="dropdown has-text-left">
                                <div class="dropdown-trigger">
                                    <button class="button" aria-haspopup="true" aria-controls="dropdown-menu3">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-user-circle" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                            <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                            <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                                        </svg>
                                        {{ Auth::user()->name }}
                                        <span class="icon is-small">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-chevron-down" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M6 9l6 6l6 -6" />
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                                <div class="dropdown-menu" id="dropdown-menu3" role="menu">
                                    <div class="dropdown-content">
                                        <a href="{{ route('login.logout') }}" class="dropdown-item">
                                            <b class="has-text-danger"> Cerrar Sesión </b>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="container is-fluid">
        <section class="section">
            <h3 class="subtitle"> Listado de transacciones </h3>
            <div>
                <p>
                    @if (session('success'))
                        <article class="message is-info">
                            <div class="message-body">
                                {{ session('success') }}
                            </div>
                        </article>
                    @endif
                </p>
            </div>
            <a href="{{ route('transaccion.create') }} " class="button is-outlined is-info is-rounded m-1">
                <span class="icon-text">
                    <span> Nueva entrada </span>
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-plus">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                            <path d="M16 19h6" />
                            <path d="M19 16v6" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />
                        </svg>
                    </span>
                </span>
            </a>
        </section>
        <div class="table-container">
            <table class="table is-fullwidth">
                <thead>
                    <tr>
                        <th> Entrada </th>
                        <th> Salida </th>
                        <th> Ajustes </th>
                        <th> UCC </th>
                        <th> Creado </th>
                        <th> Proveedor </th>
                        <th> Usuario </th>
                        <th> Opciones </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transacciones as $transaccion)
                        <tr>
                            <td> {{ $transaccion->entradas }} </td>
                            <td> {{ $transaccion->salidas }} </td>
                            <td> {{ $transaccion->ajustes }} </td>
                            <td> {{ $transaccion->ucc }} </td>
                            <td> {{ $transaccion->creado }} </td>
                            <td> {{ $transaccion->proveedores->nombre }} </td>
                            <td> {{ $transaccion->usuarios->name }} </td>
                            <td>
                                <a href="{{ route('transaccion.edit', encrypt($transaccion->id)) }}"
                                    class="button is-small is-outlined is-light is-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                        <path d="M16 5l3 3" />
                                    </svg>
                                </a>
                                <a href="{{ route('transaccion.show', encrypt($transaccion->id)) }}"
                                    class="button is-small is-outlined is-light is-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 7l16 0" />
                                        <path d="M10 11l0 6" />
                                        <path d="M14 11l0 6" />
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
