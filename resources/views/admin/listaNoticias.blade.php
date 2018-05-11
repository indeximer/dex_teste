@extends('layout/admin')

@section('conteudo')
    <div class="row py-4">
        <div class="col-12">
            <h1>Notícias:</h1>

            <a href="/admin/adicionarNoticia" class="btn btn-sm btn-success"><i class="oi oi-plus"></i> Adicionar notícia</a>

            @if(old('titulo') != null)
                <p class="mt-3 alert alert-success"><a href="{{'/noticias/' . str_slug(old('titulo')) }}" target="_blank"><strong>Noticia</strong></a> adicionada com sucesso</p>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            @if(empty($noticias))
                <div class="row">
                    <div class="col-12">
                        <p class="alert alert-danger">Nenhuma notícia encontrada.</p>
                    </div>
                </div>
            @else
                <ul class="list-group">
                    @foreach($noticias as $noticia)
                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            {{ $noticia->titulo }}
                            <span>
                                <a href="/noticias/{{ $noticia->slug }}" target="_blank" class="badge badge-primary badge-pill" title="Ver notícia"><i class="oi oi-magnifying-glass"></i></a>
                                <a href="/admin/adicionarNoticia/{{ $noticia->id }}" class="badge badge-primary badge-pill ml-2" title="Editar"><i class="oi oi-pencil"></i></a>
                                <a href="/admin/removerNoticia/{{ $noticia->id }}" class="badge badge-danger badge-pill ml-2" title="Excluir"><i class="oi oi-trash"></i></a>
                            </span>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@stop