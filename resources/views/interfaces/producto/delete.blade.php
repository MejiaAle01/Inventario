@extends('plantilla/plantilla')

@section('tituloPagina', 'Productos | Eliminar')

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
                            <p> Producto: <b>{{ $productos->producto }}</b></p>
                            <p> Cantidad: <b>{{ $productos->cantidad }}</b></p>
                            <p> Dirección: <b>{{ $productos->dirección }}</b></p>
                            <p> Recibido: <b>{{ $productos->recibido }}</b></p>
                            <p> Proveedor: <b>{{ $productos->proveedor_id }}</b></p>
                        </div>
                    </article>
                    <form action="{{ route('producto.delete', encrypt($productos->id)) }}" method="POST" autocomplete="off">
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
