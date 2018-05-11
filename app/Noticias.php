<?php

namespace dex_teste;

use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    public $timestamps = false;

    protected $fillable = array('titulo', 'autor', 'categoria', 'resumo', 'conteudo');
}
