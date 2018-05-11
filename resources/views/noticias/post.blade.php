@extends('layout/main')

@section('conteudo')
<section class="container py-5">
    <div class="row">
        <div class="col-12">
            <article class="card post-content">
                <img class="card-img-top" src="{{ asset('storage/uploads/noticias/' . $noticia->imagem_principal) }}">
                
                <div class="card-body">
                    <h1>{{ $noticia->titulo }}</h1>

                    <span class="badge badge-dark"><i class="oi oi-calendar"></i> {{ \Carbon\Carbon::parse($noticia->data)->format('d/m/Y') }}</span>

                    @if(!empty($noticia->autor))
                    <span class="badge badge-dark"><i class="oi oi-person"></i> {{ $noticia->autor }}</span>
                    @endif

                    @if(!empty($noticia->categoria))
                    <span class="badge badge-dark"><i class="oi oi-folder"></i> {{ $noticia->categoria }}</span>
                    @endif

                    <p class="mt-3">{{ $noticia->conteudo }}</p>
                </div>
            </article>
        </div>
    </div>

</section>
@stop