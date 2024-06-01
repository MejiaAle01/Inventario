@extends('plantilla/plantilla')

@section('tituloPagina', 'Proveedor | Actualizar')

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
                <h3 class="is-size-3" align="center"> Actualizar Proveedor </h3>
                <div class="card card-content m-4 p-5">
                    <form action="{{ route('proveedor.update', encrypt($proveedores->id)) }}" method="POST"
                        autocomplete="off">
                        @csrf
                        @method('PUT')
                        <label class="label">
                            Nombre
                            <input type="text" name="nombre"
                                class="input control is-hovered @error('nombre') is invalid @enderror" required
                                title="Nombre" value="{{ $proveedores->nombre }}" />
                            @error('nombre')
                                <span class="has-text-danger"> {{ $message }} </span>
                            @enderror
                        </label>
                        <label class="label">
                            Empresa
                            <input type="text" name="empresa"
                                class="input control is-hovered @error('empresa') is invalid @enderror" required
                                title="Empresa" value="{{ $proveedores->empresa }}" />
                            @error('empresa')
                                <span class="has-text-danger"> {{ $message }} </span>
                            @enderror
                        </label>
                        <label class="label
                        mt-4">
                            Dirección
                            <input type="text" name="direccion"
                                class="input control is-hovered @error('direccion') is-invalid @enderror" required
                                title="Dirección" value="{{ $proveedores->direccion }}" />
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
                                        <option value="{{ $proveedores->transaccion_id }}">
                                            {{ $proveedores->transaccion_id }}
                                        </option>
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
                                        <option value="{{ $proveedores->producto_id }}">
                                            {{ $proveedores->producto_id }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="has-text-centered">
                                <button type="submit" class="button is-link is-outlined is-rounded mt-4"> Actualizar
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
