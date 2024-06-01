@extends('plantilla/plantilla')

@section('tituloPagina', 'Dashboard | Admin')

@section('contenido')
    <!-- START NAV -->
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
    <!-- END NAV -->
    <main class="container is-fluid">
        <section class="hero">
            <div class="hero-body">
                <h1 class="title" align="center"> Menu </h1>
                <section class="section">
                    <div class="container">
                        <div class="columns is-multiline">
                            <div class="column is-4-desktop is-6-tablet">
                                <div class="card">
                                    <div class="card-image is-relative">
                                        <picture class="image is-3by2">
                                            <img src="https://cdn-icons-png.flaticon.com/512/2175/2175537.png"
                                                alt="Transacciones" class="is-cover">
                                        </picture>
                                    </div>
                                    <footer class="card-footer">
                                        <a href="{{ route('transaccion.index') }}" class="button is-link card-footer-item"
                                            title="Transacciones">
                                            Transacciones
                                        </a>
                                    </footer>
                                </div>
                            </div>
                            <div class="column is-4-desktop is-6-tablet">
                                <div class="card">
                                    <div class="card-image is-relative">
                                        <picture class="image is-3by2">
                                            <img src="https://w7.pngwing.com/pngs/698/880/png-transparent-computer-icons-vendor-delivery-miscellaneous-blue-data-thumbnail.png"
                                                alt="Proveedores" class="is-cover">
                                        </picture>
                                    </div>
                                    <footer class="card-footer">
                                        <a href="{{ route('proveedor.index') }}" class="button is-link card-footer-item"
                                            title="Proveedores">
                                            Proveedores
                                        </a>
                                    </footer>
                                </div>
                            </div>
                            <div class="column is-4-desktop is-6-tablet">
                                <div class="card">
                                    <div class="card-image is-relative">
                                        <picture class="image is-3by2">
                                            <img src="https://cdn-icons-png.flaticon.com/512/1554/1554591.png"
                                                alt="Productos" class="is-cover">
                                        </picture>
                                    </div>
                                    <div class="card-content mt-4">
                                        <footer class="card-footer">
                                            <a href="{{ route('producto.index') }}" class="button is-link card-footer-item"
                                                title="Productos">
                                                Productos
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                </section>
            </div>
        </section>
    </main>
@endsection
