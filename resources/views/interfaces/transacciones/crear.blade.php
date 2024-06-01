@extends('plantilla/plantilla')

@section('tituloPagina', 'Nueva transacción')

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
                <h3 class="is-size-3" align="center"> Nueva transacción </h3>
                <div class="card card-content m-4 p-5">
                    <form action="{{ route('transaccion.store') }}" method="POST" autocomplete="off">
                        @csrf
                        <label class="label">
                            Entrada
                            <input type="text" name="entrada"
                                class="input control is-hovered @error('entrada') is invalid @enderror" required
                                title="Entrada" />
                            @error('entrada')
                                <span class="has-text-danger"> {{ $message }} </span>
                            @enderror
                        </label>
                        <label class="label">
                            Salida
                            <input type="text" name="salida"
                                class="input control is-hovered @error('salida') is invalid @enderror" required
                                title="Salida" />
                            @error('salida')
                                <span class="has-text-danger"> {{ $message }} </span>
                            @enderror
                        </label>
                        <label class="label
                            mt-4">
                            Ajustes
                            <input type="text" name="ajustes"
                                class="input control is-hovered @error('ajustes') is-invalid @enderror" required
                                title="Ajustes" />
                            @error('ajustes')
                                <span class="has-text-danger"> {{ $message }} </span>
                            @enderror
                        </label>
                        <label class="label
                            mt-4">
                            UCC
                            <input type="text" name="ucc"
                                class="input control is-hovered @error('ucc') is-invalid @enderror" required
                                title="Num. UCC" maxlength="12" />
                            @error('ucc')
                                <span class="has-text-danger"> {{ $message }} </span>
                            @enderror
                        </label>
                        <label class="label
                            mt-4">
                            Fecha
                            <input type="string" name="fecha"
                                class="input control is-hovered @error('fecha') is-invalid @enderror" required
                                title="Fecha" />
                            @error('fecha')
                                <span class="has-text-danger"> {{ $message }} </span>
                            @enderror
                            <p class="help is-info"> Ejemplo: 2024-05-31 12:45:00 </p>
                        </label>
                        <label class="label
                            mt-4">
                            Proveedor
                            <div class="control">
                                <div class="select">
                                    <select name="proveedorSelecc">
                                        <option value="" disabled selected> Seleccione proveedor </option>
                                        @foreach ($datosProveedor as $proveedor)
                                            <option value="{{ $proveedor->id }}">{{ $proveedor->proveedores->nombre }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </label>
                        <label class="label
                            mt-4">
                            Creado por
                            <div class="control">
                                <div class="select">
                                    <select name="usuarioSelecc">
                                        <option value="" disabled selected> Seleccione usuario </option>
                                        @foreach ($datosUsuario as $usuario)
                                            <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </label>
                        <div class="has-text-centered">
                            <button type="submit" class="button is-info is-outlined is-rounded mt-4"> Crear </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
