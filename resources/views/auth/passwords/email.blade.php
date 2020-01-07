@extends('masters.masterapp')

@section('content')

<div class="text-center personallogincardcentralizer">

<div class="card bg-aeroblack" style="width: 100%; max-width: 400px;">

<div class="card-header">{{ __('Redefinir senha') }}</div>

<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <form method="POST" class="form-signin" action="{{ route('password.email') }}">
        @csrf


            <span style="float: left;">Email:</span>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror bg-aeroblack " name="email" placeholder="Digite um email cadastrado" value="{{ old('email') }}" required autocomplete="email" autofocus style="margin-bottom: 10px;">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        <button class="btn btn-primary btn-block bg-aeroblack mt-4" type="submit">{{ __('Enviar link para redefinir senha') }}</button>

    </form>

</div>
</div>
</div>
@endsection
