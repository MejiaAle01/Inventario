@extends('plantilla/plantilla')

@section('tituloPagina', 'Login | Inventario')

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
                <h3 class="is-size-3" align="center"> Iniciar sesión </h3>
                <div class="card card-content m-4 p-5">
                    <form action="{{ route('verify.user') }}" method="POST" id="loginForm" autocomplete="off">
                        @csrf
                        <label class="label">
                            Usuario
                            <input type="text" name="user" id="Usuario" placeholder="Usuario"
                                class="input control is-hovered @error('user') is invalid @enderror" required
                                title="Usuario" />
                            @error('name')
                                <span class="has-text-danger"> {{ $message }} </span>
                            @enderror
                        </label>
                        <label class="label
                            mt-4">
                            Contraseña
                            <input type="password" name="password" id="Contra" placeholder="Contraseña"
                                class="input control is-hovered @error('password') is-invalid @enderror" required
                                title="Contraseña" maxlength="14" />
                            @error('password')
                                <span class="has-text-danger"> {{ $message }} </span>
                            @enderror
                        </label>
                        <div class="has-text-centered">
                            <button type="submit" value="Iniciar Sesión"
                                class="button is-link is-outlined is-rounded mt-4"> Iniciar sesión </button>
                        </div>
                        <hr class="is-divider has-background-light">
                        <footer class="card-footer is-justify-content-center">
                            <p>
                                Eres nuevo, <a href="{{ route('registroForm.vista') }}"><b> Crea una cuenta. </b></a>
                            </p>
                        </footer>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
