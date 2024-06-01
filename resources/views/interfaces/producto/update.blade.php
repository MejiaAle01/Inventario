@extends('plantilla/plantilla')

@section('tituloPagina', 'Productos | Actualizar')

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
                <h3 class="is-size-3" align="center"> Actualizar Productos </h3>
                <div class="card card-content m-4 p-5">
                    <form action="{{ route('producto.update', encrypt($productos->id)) }}" method="POST" autocomplete="off">
                        @csrf
                        @method('PUT')
                        <label class="label">
                            Producto
                            <input type="text" name="producto"
                                class="input control is-hovered @error('producto') is invalid @enderror" required
                                title="Producto" value="{{ $productos->producto }}" />
                            @error('producto')
                                <span class="has-text-danger"> {{ $message }} </span>
                            @enderror
                        </label>
                        <label class="label">
                            Cantidad
                            <input type="text" name="cantidad"
                                class="input control is-hovered @error('cantidad') is invalid @enderror" required
                                title="Cantidad" value="{{ $productos->cantidad }}" />
                            @error('cantidad')
                                <span class="has-text-danger"> {{ $message }} </span>
                            @enderror
                        </label>
                        <label class="label
                        mt-4">
                            Dirección
                            <input type="text" name="direccion"
                                class="input control is-hovered @error('direccion') is-invalid @enderror" required
                                title="Dirección" value="{{ $productos->dirección }}" />
                            @error('direccion')
                                <span class="has-text-danger"> {{ $message }} </span>
                            @enderror
                        </label>
                        <label class="label">
                            Recibido
                            <input type="text" name="recibido"
                                class="input control is-hovered @error('recibido') is-invalid @enderror" required
                                title="Recibido" value="{{ $productos->recibido }}" />
                            @error('recibido')
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
                                        <option value="{{ $productos->proveedor_id }}"> {{ $productos->proveedor_id }}
                                        </option>
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
