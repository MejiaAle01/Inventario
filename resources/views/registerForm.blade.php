@extends('plantilla/plantilla')

@section('tituloPagina', 'Formulario registro')

@section('contenido')
    <main class="container is-fluid">
        <div class="columns is-centered mt-6">
            <div class="column is-4 mt-6">
                <h3 class="is-size-3" align="center">
                    <a href="{{ route('login.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-square-rounded-arrow-left-filled" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M12 2l.324 .001l.318 .004l.616 .017l.299 .013l.579 .034l.553 .046c4.785 .464 6.732 2.411 7.196 7.196l.046 .553l.034 .579c.005 .098 .01 .198 .013 .299l.017 .616l.005 .642l-.005 .642l-.017 .616l-.013 .299l-.034 .579l-.046 .553c-.464 4.785 -2.411 6.732 -7.196 7.196l-.553 .046l-.579 .034c-.098 .005 -.198 .01 -.299 .013l-.616 .017l-.642 .005l-.642 -.005l-.616 -.017l-.299 -.013l-.579 -.034l-.553 -.046c-4.785 -.464 -6.732 -2.411 -7.196 -7.196l-.046 -.553l-.034 -.579a28.058 28.058 0 0 1 -.013 -.299l-.017 -.616c-.003 -.21 -.005 -.424 -.005 -.642l.001 -.324l.004 -.318l.017 -.616l.013 -.299l.034 -.579l.046 -.553c.464 -4.785 2.411 -6.732 7.196 -7.196l.553 -.046l.579 -.034c.098 -.005 .198 -.01 .299 -.013l.616 -.017c.21 -.003 .424 -.005 .642 -.005zm.707 5.293a1 1 0 0 0 -1.414 0l-4 4a1.037 1.037 0 0 0 -.2 .284l-.022 .052a.95 .95 0 0 0 -.06 .222l-.008 .067l-.002 .063v-.035v.073a1.034 1.034 0 0 0 .07 .352l.023 .052l.03 .061l.022 .037a1.2 1.2 0 0 0 .05 .074l.024 .03l.073 .082l4 4l.094 .083a1 1 0 0 0 1.32 -.083l.083 -.094a1 1 0 0 0 -.083 -1.32l-2.292 -2.293h5.585l.117 -.007a1 1 0 0 0 -.117 -1.993h-5.585l2.292 -2.293l.083 -.094a1 1 0 0 0 -.083 -1.32z"
                                fill="currentColor" stroke-width="0" />
                        </svg>
                    </a>
                    Crear cuenta
                </h3>
                <div class="card card-content m-4 p-5">
                    <form action="{{ route('usuario.crear') }}" method="POST" autocomplete="off" id="formulario">
                        @csrf
                        <label class="label">
                            Nombre
                            <input type="text" name="name" id="Nombre" placeholder="Nombre"
                                class="input control is-hovered @error('nombre') is-invalid @enderror" title="Nombre"
                                required>
                            @error('nombre')
                                <span class="has-text-danger"> {{ $message }} </span>
                            @enderror
                        </label>
                        <label class="label mt-3">
                            Usuario
                            <input type="text" name="user" id="Usuario" placeholder="Usuario"
                                class="input control is-hovered @error('user') is-invalid @enderror" title="Usuario"
                                required>
                            @error('user')
                                <span class="has-text-danger"> {{ $message }} </span>
                            @enderror
                        </label>
                        <label class="label mt-3">
                            Contraseña
                            <input type="password" name="password" id="Contra" placeholder="Contraseña"
                                class="input control is-hovered @error('password') is-invalid @enderror" title="Contraseña"
                                required>
                            @error('password')
                                <span class="has-text-danger"> {{ $message }} </span>
                            @enderror
                        </label>
                        <label class="label mt-3">
                            Correo
                            <input type="email" name="email" id="Correo" placeholder="Email"
                                class="input control is-hovered @error('email') is-invalid @enderror" title="Correo"
                                required>
                            @error('email')
                                <span class="has-text-danger"> {{ $message }} </span>
                            @enderror
                        </label>
                        <input type="hidden" name="tipousuario" value="Usuario">
                        <div class="has-text-centered">
                            <button type="submit" value="Crear cuenta" class="button is-link is-outlined is-rounded mt-4">
                                Crear cuenta </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
