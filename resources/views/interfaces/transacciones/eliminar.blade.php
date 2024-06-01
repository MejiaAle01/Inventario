@extends('plantilla/plantilla')

@section('tituloPagina', 'Transacciones | Eliminar')

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
                            <p> Entrada: <b>{{ $transaccion->entradas }}</b></p>
                            <p> Salida: <b>{{ $transaccion->salidas }}</b></p>
                            <p> Ajustes: <b>{{ $transaccion->ajustes }}</b></p>
                            <p> UCC: <b>{{ $transaccion->ucc }}</b></p>
                            <p> Fecha: <b>{{ $transaccion->creado }}</b></p>
                            <p> Proveedor: <b>{{ $transaccion->proveedores->nombre }}</b></p>
                            <p> Creado por: <b>{{ $transaccion->usuarios->name }}</b></p>
                        </div>
                    </article>
                    <form action="{{ route('transaccion.delete', encrypt($transaccion->id)) }}" method="POST"
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
