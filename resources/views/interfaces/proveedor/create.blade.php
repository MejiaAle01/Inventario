@extends('plantilla/plantilla')

@section('tituloPagina', 'Proveedores | Crear')

@section('contenido')
    <main class="container is-fluid">
        <div class="columns is-centered mt-6">
            <div class="column is-4 mt-6">
                @if (session('success'))
                    <article class="message is-danger">
                        <div class="message-body">
                            {{ session('success') }}
                        </div>
                    </article>
                @endif
                <h3 class="is-size-3" align="center"> Nuevo Proveedor </h3>
                <div class="card card-content m-4 p-5">
                    <form action="{{ route('proveedor.store') }}" method="POST" autocomplete="off">
                        @csrf
                        <label class="label">
                            Nombre
                            <input type="text" name="nombre"
                                class="input control is-hovered @error('nombre') is invalid @enderror" required
                                title="Nombre" />
                            @error('nombre')
                                <span class="has-text-danger"> {{ $message }} </span>
                            @enderror
                        </label>
                        <label class="label">
                            Empresa
                            <input type="text" name="empresa"
                                class="input control is-hovered @error('empresa') is invalid @enderror" required
                                title="Empresa" />
                            @error('empresa')
                                <span class="has-text-danger"> {{ $message }} </span>
                            @enderror
                        </label>
                        <label class="label
                            mt-4">
                            Dirección
                            <input type="text" name="direccion"
                                class="input control is-hovered @error('direccion') is-invalid @enderror" required
                                title="Dirección" />
                            @error('direccion')
                                <span class="has-text-danger"> {{ $message }} </span>
                            @enderror
                        </label>
                        <label class="label
                            mt-4">
                            Transacción
                            <div class="control">
                                <div class="select">
                                    <select name="transaccionSelecc">
                                        <option value="" disabled selected> Seleccione transaccion </option>
                                        @foreach ($datosProveedor as $proveedor)
                                            <option value="{{ $proveedor->transaccion_id }}">
                                                {{ $proveedor->transaccion_id }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </label>
                        <label class="label
                            mt-4">
                            Producto
                            <div class="control">
                                <div class="select">
                                    <select name="productoSelecc">
                                        <option value="" disabled selected> Seleccione producto </option>
                                        @foreach ($datosProveedor as $proveedor)
                                            <option value="{{ $proveedor->producto_id }}">
                                                {{ $proveedor->producto_id }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="has-text-centered">
                                <button type="submit" class="button is-link is-outlined is-rounded mt-4"> Crear </button>
                            </div>
                        </label>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
