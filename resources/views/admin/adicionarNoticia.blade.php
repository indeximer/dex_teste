@extends('layout/admin')

@section('conteudo')
    <div class="row py-4">
        <div class="col-12">
            <h1>Adicionar notícia:</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12 pb-4">

            @if($errors->all())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>- {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" enctype="multipart/form-data" action="/admin/inserirNoticia">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                @if(isset($noticia))
                    <input type="hidden" name="id" value="{{ $noticia->id }}">
                    <input type="hidden" id="imagem_nome" name="imagem_nome" value="{{ $noticia->imagem_principal }}">
                @endif

                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" name="titulo" id="titulo" value="{{ isset($noticia) ? $noticia->titulo:''}}">
                </div>
                <div class="form-group">
                    <label for="imagem_principal">Imagem principal</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="imagem_principal" id="imagem_principal" value="{{ isset($noticia) ? $noticia->imagem_principal:''}}">
                        <label class="custom-file-label" for="customFile">{{ isset($noticia) ? $noticia->imagem_principal:'Selecione uma imagem'}}</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="data">Data</label>
                    <input type="text" class="form-control date-field" name="data" id="data" value="{{ isset($noticia) ? \Carbon\Carbon::parse($noticia->data)->format('d/m/y'):''}}">
                </div>
                <div class="form-group">
                    <label for="autor">Autor</label>
                    <input type="text" class="form-control" name="autor" id="autor" value="{{ isset($noticia) ? $noticia->autor:''}}">
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <input type="text" class="form-control" name="categoria" id="categoria" value="{{ isset($noticia) ? $noticia->categoria:''}}">
                </div>

                <div class="form-group">
                    <label for="resumo">Resumo</label>
                    <textarea class="form-control" name="resumo" id="resumo">{{ isset($noticia) ? $noticia->resumo:''}}</textarea>
                </div>

                <div class="form-group">
                    <label for="conteudo">Conteúdo</label>
                    <textarea class="form-control" name="conteudo" id="conteudo">{{ isset($noticia) ? $noticia->conteudo:''}}</textarea>
                </div>

                <button type="submit" class="btn btn-lg btn-success float-right ml-5"><i class="oi oi-box"></i> Salvar</button>
            </form>
        </div>
    </div>
@stop