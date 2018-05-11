<?php namespace dex_teste\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use dex_teste\Noticias;

Class NoticiasController extends Controller{

    public function index(){
        $noticias = Noticias::all();

        return view('noticias/index')->with('noticias',$noticias);
    }

    public function post($slug){
        $noticia = Noticias::where('slug', $slug)->first();

        return view('noticias/post')->with('noticia',$noticia);
    }
}