@extends('layouts.admin')

@section('conteudo')
    <div class="row py-5">
        <div class="col-12 text-center">
            <h1>{{ Auth::user()->name }}, seja bem vindo!</h1>
        </div>
    </div>
@stop