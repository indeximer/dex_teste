<?php namespace dex_teste\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

Class AdminController extends Controller{

    public function index(){
        return view('admin/index');
    }

    public function listaNoticias(){
        $noticias = DB::select('select * from noticias');
        return view('admin/listaNoticias')->with('noticias',$noticias);
    }

    public function adicionarNoticia(){
        return view('admin/adicionarNoticia');
    }

    public function inserirNoticia(){
        $titulo = Request::input('titulo');
        $data = Request::input('data');
        $autor = Request::input('autor');
        $categoria = Request::input('categoria');
        $resumo = Request::input('resumo');
        $conteudo = Request::input('conteudo');
 
        request()->validate([

             'imagem_principal' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $imagem_principal = time().'.'.request()->file('imagem_principal')->getClientOriginalExtension();
        request()->file('imagem_principal')->move(storage_path('uploads/noticias'), $imagem_principal);

        $slug = str_slug($titulo);
        $data = \Carbon\Carbon::parse($data)->format('y-m-d');

        DB::insert('insert into noticias (titulo, data, autor, categoria, imagem_principal, resumo, conteudo, slug) 
        values (?, ?, ?, ?, ?, ?, ?, ?)', array($titulo, $data, $autor, $categoria, $imagem_principal, $resumo, $conteudo, $slug));


        return view('admin/inserirNoticia')->with('slug',$slug);
    }
}