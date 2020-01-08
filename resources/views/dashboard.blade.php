@extends('masters.masterdashboard')

@section('contentdashboard')

<h5 class="card-title">Olá, você está logado(a)!</h5>
<p class="card-text">Este é uma sistema simples de login desenvolvido com Laravel 6 e BootstrapAero 4.4.1.
<br>Contato: neyelson@gmail.com | github.com</p>

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

@endsection
