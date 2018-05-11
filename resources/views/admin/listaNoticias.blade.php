@extends('layout/admin')

@section('conteudo')
    <div class="row py-4">
        <div class="col-12">
            <h1>Notícias:</h1>

            <a href="/admin/adicionarNoticia" class="btn btn-sm btn-success"><i class="oi oi-plus"></i> Adicionar notícia</a>
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
                            {{$noticia->titulo}}
                            <span>
                                <span class="badge badge-danger badge-pill" title="Excluir"><i class="oi oi-x"></i></span>
                                <a href="#" class="badge badge-primary badge-pill ml-2" title="Editar"><i class="oi oi-pencil"></i></a>
                            </span>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@stop