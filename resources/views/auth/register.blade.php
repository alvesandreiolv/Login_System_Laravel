@extends('masters.masterapp')

@section('content')

<div class="text-center personallogincardcentralizer">

    <div class="card bg-aeroblack" style="width: 100%; max-width: 400px;">

        <div class="card-header">{{ __('Registrar novo') }}</div>

        <div class="card-body">

            <form method="POST" class="form-signin" action="{{ route('register') }}">
                @csrf
                <span style="float: left;">Nome:</span>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror bg-aeroblack mb-2" name="name" value="{{ old('name') }}" placeholder="Digite o seu nome" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <span style="float: left;">Email:</span>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror bg-aeroblack mb-2" name="email" value="{{ old('email') }}" placeholder="Digite o seu email" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <span style="float: left;">Senha:</span>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror bg-aeroblack mb-2" name="password" placeholder="Digite a sua senha" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <span style="float: left;">Confirmar senha:</span>
                <input id="password-confirm" type="password" class="form-control bg-aeroblack " name="password_confirmation" placeholder="Confirme a sua senha" required autocomplete="new-password">


                <button class="btn btn-primary btn-block bg-aeroblack mt-4" type="submit">{{ __('Registrar') }}</button>

            </form>
        </div>
    </div>
</div>

@endsection
