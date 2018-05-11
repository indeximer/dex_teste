<?php

namespace dex_teste\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoticiaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo'   => 'required|unique:noticias|min:3',
            'data'     => 'required',
            'resumo'   => 'required|max:250',
            'conteudo' => 'required'
        ];
    }

    public function messages(){
        return [
            'unique' => 'já existe outra notícia com este título!',
            'required' => ':attribute é obrigatório!',
            'max' => ':attribute aceita o máximo de 250 caracteres!',
            'min' => ':attribute requer o mínimo de 3 caracteres!'
        ];
        
    }
}
