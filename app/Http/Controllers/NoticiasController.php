<?php namespace dex_teste\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

Class NoticiasController extends Controller{

    public function index(){
        $noticias = DB::select('select * from noticias');

        return view('noticias/index')->with('noticias',$noticias);
    }

    public function post(){
        $slug = Request::route('slug');
        $noticia = DB::select('select * from noticias where slug = ?', [$slug]);

        if(empty($noticia)) {
            return "Essa notícia não existe";
        }

        return view('noticias/post')->with('noticia',$noticia[0]);
    }
}