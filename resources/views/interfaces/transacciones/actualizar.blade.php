@extends('plantilla/plantilla')

@section('tituloPagina', 'Actualizar Transacción')

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
                <h3 class="is-size-3" align="center"> Actualizar Transacción </h3>
                <div class="card card-content m-4 p-5">
                    <form action="{{ route('transaccion.update', encrypt($transaccion->id)) }}" method="POST"
                        autocomplete="off">
                        @csrf
                        @method('PUT')
                        <label class="label">
                            Entrada
                            <input type="text" name="entrada"
                                class="input control is-hovered @error('entrada') is invalid @enderror" required
                                title="Entrada" value="{{ $transaccion->entradas }}" />
                            @error('entrada')
                                <span class="has-text-danger"> {{ $message }} </span>
                            @enderror
                        </label>
                        <label class="label">
                            Salida
                            <input type="text" name="salida"
                                class="input control is-hovered @error('salida') is invalid @enderror" required
                                title="Salida" value="{{ $transaccion->salidas }}" />
                            @error('salida')
                                <span class="has-text-danger"> {{ $message }} </span>
                            @enderror
                        </label>
                        <label class="label
                        mt-4">
                            Ajustes
                            <input type="text" name="ajustes"
                                class="input control is-hovered @error('ajustes') is-invalid @enderror" required
                                title="Ajustes" value="{{ $transaccion->ajustes }}" />
                            @error('ajustes')
                                <span class="has-text-danger"> {{ $message }} </span>
                            @enderror
                        </label>
                        <label class="label
                        mt-4">
                            UCC
                            <input type="text" name="ucc"
                                class="input control is-hovered @error('ucc') is-invalid @enderror" required
                                title="Num. UCC" maxlength="12" value="{{ $transaccion->ucc }}" />
                            @error('ucc')
                                <span class="has-text-danger"> {{ $message }} </span>
                            @enderror
                        </label>
                        <label class="label
                        mt-4">
                            Fecha
                            <input type="string" name="fecha"
                                class="input control is-hovered @error('fecha') is-invalid @enderror" required
                                title="Fecha" value="{{ $transaccion->creado }}" />
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
                                        <option value="{{ $transaccion->proveedor_id }}">
                                            {{ $transaccion->proveedores->nombre }}
                                        </option>
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
                                        <option value="{{ $transaccion->user_id }}">{{ $transaccion->usuarios->name }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </label>
                        <div class="has-text-centered">
                            <button type="submit" class="button is-link is-outlined is-rounded mt-4"> Actualizar </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
