@extends('layout/admin')

@section('conteudo')
    <div class="row py-5">
        <div class="col-12 text-center">
            <h1 class="mb-4 alert alert-success">Notícia inserida com sucesso!</h1>
            
            <a href="/noticias/{{ $slug }}" target="_blank" class="btn btn-primary"><i class="oi oi-magnifying-glass"></i> Ver a notícia</a>
            <a href="/admin/noticias" class="btn btn-primary"><i class="oi oi-list"></i> Voltar para lista</a>
            <a href="/admin/adicionarNoticia" class="btn btn-success"><i class="oi oi-plus"></i> Adicionar nova notícia</a>
        </div>
    </div>
@stop