<?php namespace dex_teste\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use dex_teste\Noticias;
use dex_teste\Http\Requests\NoticiaRequest;
use Illuminate\Validation\Rule;

Class AdminController extends Controller{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin/index');
    }

    public function listaNoticias(){
        $noticias = Noticias::all();
        return view('admin/listaNoticias')->with('noticias',$noticias);
    }

    public function adicionarNoticia($id = null){

        if($id != null){
            $noticia = Noticias::find($id);
            return view('admin/adicionarNoticia')->with('noticia', $noticia);
        }else{
            return view('admin/adicionarNoticia');
        }
    }

    public function inserirNoticia(NoticiaRequest $request,Noticias $Noticia){

        $params = $request->all();

        $id = $request->input('id');

        if($id != null){
            $noticia = Noticias::find($id);

            $noticia->titulo = $request->input('titulo');
            $noticia->autor = $request->input('autor');
            $noticia->categoria = $request->input('categoria');
            $noticia->resumo = $request->input('resumo');
            $noticia->conteudo = $request->input('conteudo');

            if($noticia->imagem_principal != $request->input('imagem_nome')){
                $noticia->imagem_principal = $this->uploadImg('imagem_principal');
            }
        }else{
            $noticia = new Noticias($params);
            $noticia->imagem_principal = $this->uploadImg('imagem_principal');
        }

        $data = $request->input('data');
        $noticia->data = \Carbon\Carbon::parse($data)->format('y-m-d');
        $noticia->slug = str_slug($noticia->titulo);

        $noticia->save();

        return redirect()
            ->action('AdminController@listaNoticias')
            ->withInput($request->only(['titulo','id']));
    }

    public function atualizarNoticia(NoticiaRequest $request, Noticias $Noticia){

        $params = $request->all();

        $id = $request->input('id');

        if($id != null){
            $noticia = Noticias::find($id);

            $noticia->titulo = $request->input('titulo');
            $noticia->autor = $request->input('autor');
            $noticia->categoria = $request->input('categoria');
            $noticia->resumo = $request->input('resumo');
            $noticia->conteudo = $request->input('conteudo');

            if($noticia->imagem_principal != $request->input('imagem_nome')){
                $noticia->imagem_principal = $this->uploadImg('imagem_principal');
            }
        }else{
            $noticia = new Noticias($params);
            $noticia->imagem_principal = $this->uploadImg('imagem_principal');
        }

        $data = $request->input('data');
        $noticia->data = \Carbon\Carbon::parse($data)->format('y-m-d');
        $noticia->slug = str_slug($noticia->titulo);

        $noticia->save();

        return redirect()
            ->action('AdminController@listaNoticias')
            ->withInput($request->only(['titulo','id']));
    }

    public function removerNoticia($id){
        $noticia = Noticias::find($id);
        $noticia->delete();

        return redirect()->action('AdminController@listaNoticias');
    }

    private function uploadImg($img){
        request()->validate([
            $img => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
       $imagem_principal = time().'.'.request()->file($img)->getClientOriginalExtension();
       request()->file($img)->move(public_path('storage/uploads/noticias'), $imagem_principal);

       return $imagem_principal;
    }
}