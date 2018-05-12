@extends('layouts.main')

@section('conteudo')
<div class="container py-5">
    <!-- @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif -->

    <div class="row">
        <div class="col-12 text-center">
            <h1>Olá, seja bem vindo!</h1>
        </div>
    </div>
</div>
@stop
