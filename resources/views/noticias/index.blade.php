@extends('layout/main')

@section('conteudo')
<section class="container py-5">
    <header class="row">
        <div class="col-12">
            <h1 class="mb-4">Notícias</h1>
        </div>
    </header>

    @if(empty($noticias))
        <div class="row">
            <div class="col-12">
                <p class="alert alert-danger">Nenhuma notícia encontrada.</p>
            </div>
        </div>
    @else
        <ul class="row lista-noticias">
            @foreach($noticias as $noticia)
                <li class="col-12 col-lg-6 mb-4">
                    <a href="/noticias/{{ $noticia->slug }}" class="card">
                        <img class="card-img-top" src="{{ asset('storage/uploads/noticias/' . $noticia->imagem_principal) }}">

                        <div class="card-body">
                            <h2 class="card-title"><?= $noticia->titulo; ?></h2>
                            <p class="info">
                                <span class="badge badge-dark"><i class="oi oi-calendar"></i> {{ \Carbon\Carbon::parse($noticia->data)->format('d/m/Y') }}</span>

                                @if(!empty($noticia->autor))
                                <span class="badge badge-dark"><i class="oi oi-person"></i> {{ $noticia->autor }}</span>
                                @endif
                                
                                @if(!empty($noticia->categoria))
                                <span class="badge badge-dark"><i class="oi oi-folder"></i> {{ $noticia->categoria }}</span>
                                @endif
                            </p>
                            <p class="card-text">{{ $noticia->resumo }}</p>
                            <button class="btn btn-primary float-right">Leia mais</button>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</section>
@stop


