@extends('plantilla/plantilla')

@section('tituloPagina', 'Proveedores | Eliminar')

@section('contenido')
    <main class="container is-fluid">
        <div class="columns is-centered mt-6">
            <div class="column is-4 mt-6">
                <div class="card card-content m-4 p-5">
                    <h3 class="is-size-3" align="center"> Eliminar registro </h3>
                    <br>
                    <article class="message is-danger">
                        <div class="message-header">
                            <p> ¿Está seguro que desea eliminar este registro? </p>
                        </div>
                        <div class="message-body">
                            <p> Nombre: <b>{{ $proveedores->nombre }}</b></p>
                            <p> Empresa: <b>{{ $proveedores->empresa }}</b></p>
                            <p> Dirección: <b>{{ $proveedores->direccion }}</b></p>
                            <p> Transacción: <b>{{ $proveedores->transaccion_id }}</b></p>
                            <p> Producto: <b>{{ $proveedores->producto_id }}</b></p>
                        </div>
                    </article>
                    <form action="{{ route('proveedor.delete', encrypt($proveedores->id)) }}" method="POST"
                        autocomplete="off">
                        @csrf
                        @method('DELETE')
                        <div class="has-text-centered">
                            <button type="submit" class="button is-danger is-outlined is-rounded mt-4"> Eliminar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
