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
            'titulo'           => 'required|min:3|unique:noticias,titulo,' . $this->get('id'),
            'data'             => 'required',
            'resumo'           => 'required|max:250',
            'conteudo'         => 'required'
        ];
    }

    public function messages(){
        return [
            'required' => 'O campo :attribute é obrigatório.',
            'unique' => 'Já existe uma notícia com este título',
            'image' => 'O arquivo deve ser uma imagem.',
            'mimes' => 'A imagem deve ser jpeg, png ou jpg.',
            'max' => 'O campo :attribute aceita o máximo de 250 caracteres.',
            'min' => ' O campo :attribute requer o mínimo de 3 caracteres.'
        ];
        
    }
}
